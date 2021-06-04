<?php

use BookStack\Auth\Permissions\PermissionService;
use BookStack\Auth\User;
use BookStack\Model;
use BookStack\Settings\SettingService;

/**
 * Get the path to a versioned file.
 * @throws Exception
 */
function versioned_asset(string $file = ''): string
{
    static $version = null;

    if (is_null($version)) {
        $versionFile = base_path('version');
        $version = trim(file_get_contents($versionFile));
    }

    $additional = '';
    if (config('app.env') === 'development') {
        $additional = sha1_file(public_path($file));
    }

    $path = $file . '?version=' . urlencode($version) . $additional;
    return url($path);
}

/**
 * Helper method to get the current User.
 * Defaults to public 'Guest' user if not logged in.
 */
function user(): User
{
    return auth()->user() ?: User::getDefault();
}

/**
 * Check if current user is a signed in user.
 */
function signedInUser(): bool
{
    return auth()->user() && !auth()->user()->isDefault();
}

/**
 * Check if the current user has general access.
 */
function hasAppAccess(): bool
{
    return !auth()->guest() || setting('app-public');
}

/**
 * Check if the current user has a permission. If an ownable element
 * is passed in the jointPermissions are checked against that particular item.
 */
function userCan(string $permission, Model $ownable = null): bool
{
    if ($ownable === null) {
        return user() && user()->can($permission);
    }

    // Check permission on ownable item
    $permissionService = app(PermissionService::class);
    return $permissionService->checkOwnableUserAccess($ownable, $permission);
}

/**
 * Check if the current user has the given permission
 * on any item in the system.
 */
function userCanOnAny(string $permission, string $entityClass = null): bool
{
    $permissionService = app(PermissionService::class);
    return $permissionService->checkUserHasPermissionOnAnything($permission, $entityClass);
}

/**
 * Helper to access system settings.
 * @return bool|string|SettingService
 */
function setting(string $key = null, $default = false)
{
    $settingService = resolve(SettingService::class);

    if (is_null($key)) {
        return $settingService;
    }

    return $settingService->get($key, $default);
}

/**
 * Get a path to a theme resource.
 */
function theme_path(string $path = ''): string
{
    $theme = config('view.theme');

    if (!$theme) {
        return '';
    }

    return base_path('themes/' . $theme .($path ? DIRECTORY_SEPARATOR.$path : $path));
}

/**
 * Get fetch an SVG icon as a string.
 * Checks for icons defined within a custom theme before defaulting back
 * to the 'resources/assets/icons' folder.
 *
 * Returns an empty string if icon file not found.
 */
function icon(string $name, array $attrs = []): string
{
    $attrs = array_merge([
        'class'     => 'svg-icon',
        'data-icon' => $name,
        'role'      => 'presentation',
    ], $attrs);
    $attrString = ' ';
    foreach ($attrs as $attrName => $attr) {
        $attrString .=  $attrName . '="' . $attr . '" ';
    }

    $iconPath = resource_path('icons/' . $name . '.svg');
    $themeIconPath = theme_path('icons/' . $name . '.svg');

    if ($themeIconPath && file_exists($themeIconPath)) {
        $iconPath = $themeIconPath;
    } else if (!file_exists($iconPath)) {
        return '';
    }

    $fileContents = file_get_contents($iconPath);
    return  str_replace('<svg', '<svg' . $attrString, $fileContents);
}

/**
 * Generate a url with multiple parameters for sorting purposes.
 * Works out the logic to set the correct sorting direction
 * Discards empty parameters and allows overriding.
 */
function sortUrl(string $path, array $data, array $overrideData = []): string
{
    $queryStringSections = [];
    $queryData = array_merge($data, $overrideData);

    // Change sorting direction is already sorted on current attribute
    if (isset($overrideData['sort']) && $overrideData['sort'] === $data['sort']) {
        $queryData['order'] = ($data['order'] === 'asc') ? 'desc' : 'asc';
    } elseif (isset($overrideData['sort'])) {
        $queryData['order'] = 'asc';
    }

    foreach ($queryData as $name => $value) {
        $trimmedVal = trim($value);
        if ($trimmedVal === '') {
            continue;
        }
        $queryStringSections[] = urlencode($name) . '=' . urlencode($trimmedVal);
    }

    if (count($queryStringSections) === 0) {
        return $path;
    }

    return url($path . '?' . implode('&', $queryStringSections));
}


/**
 * Build the HTML for the custom sidebar navigation
 * HTML will be location here, however, you can update the styling
 * via CSS.
 */
 function customSidbarNavigationForBlade(): string
 {
    // Query collection
    $settings = \BookStack\Settings\Setting::all();
    $html = '';

    // loop through settings, to get the navigation custom data
    foreach ($settings as $value) {
        if (setting('app-custom-navigation')){
            $json = setting('app-custom-navigation');
            $objNav = json_decode($json);
        }
    }
    // return html <ul> list back to laraval blade.
    return navBuildParentChildList($objNav);
 }

/**
 * The navBuildParentChildList will build the HTML UL list
 * it will loop back itself and look for children elements.
 */
function navBuildParentChildList($objNav)
{
    //init 
    $arrayNav = (array) $objNav; // typecase object to array
    $html = '';
    
    // start UL html tag
    $html .= '<ul id="nav-list-wrapper">';

    // start loop to 
    for ($i=0; $i < COUNT($arrayNav); $i++) 
    { 
        //dd($arrayNav[$i]);

        $text = isset($arrayNav[$i]->text) ? $arrayNav[$i]->text : 'n/a';
        $url = isset($arrayNav[$i]->url) ? $arrayNav[$i]->url : '#';

        // append to $html string to build html/ul list
        // note the open tag <li> starts here, beceause we need to include chile list side
        $html .= "<li><a href='". $url."'>". $text ;

        // check the index of the array to see if child array exist
        if (property_exists((object) $arrayNav[$i],'children'))
        {  
            // forloop to itrate over children array
            for ($i2=0; $i2 < COUNT($arrayNav[$i]->children); $i2++) 
            {  
                // Loop back on itself to if children exist in index
                // not closing </li> tag. we have sub ul list
               $html .=   navBuildParentChildList($arrayNav[$i]->children). "</a></li>";
               break;
             
            }//endloop
        }
        //else{
            //dd($arrayNav[$i]);
      //      $html .=   $arrayNav[$i]->text . "</a></li>";
       //     break;
      //  }
    }//endloop

    // end UL html tag
    $html .= '</ul>';

    return $html;
}