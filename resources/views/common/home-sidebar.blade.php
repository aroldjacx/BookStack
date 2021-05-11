@if(count($draftPages) > 0)
    <div id="recent-drafts" class="mb-xl">
        <h5>{{ trans('entities.my_recent_drafts') }}</h5>
        @include('partials.entity-list', ['entities' => $draftPages, 'style' => 'compact'])
    </div>
@endif

<div class="mb-xl">
    <h5>{{ trans('entities.' . ($signedIn ? 'my_recently_viewed' : 'books_recent')) }}</h5>
    <!--@include('partials.entity-list', [
        'entities' => $recents,
        'style' => 'compact',
        'emptyText' => $signedIn ? trans('entities.no_pages_viewed') : trans('entities.books_empty')
        ]) -->

        <ul class="mcd-menu">
            <li>
                <a href=""><strong>Who We Are</strong></a>
                <ul class="mcd-menu-sub">
                   <li><a href="">Team Directory</a></li> 
                   <li><a href="">International</a></li> 
                </ul>
            </li>
            <li>
                <a href=""><strong>People & Talent</strong></a>
                <ul class="mcd-menu-sub">
                   <li><a href="">Team Directory</a></li> 
                   <li><a href="">International</a></li> 
                </ul>
            </li>
            <li>
                <a href=""><strong>How We Do It</strong></a>
            </li>
            <li>
                <a href=""><strong>Product Team</strong></a>
                <ul class="mcd-menu-sub">
                   <li><a href="">Team Directory</a></li> 
                   <li><a href="">International</a></li> 
                </ul>
            </li>
             <li>
                <a href=""><strong>What We Do</strong></a>
            </li>
            <li>
                <a href=""><strong>Who Do I Ask?</strong></a>
                <ul class="mcd-menu-sub">
                   <li><a href="">Team Directory</a></li> 
                </ul>
            </li>
            <li>
                <a href=""><strong>Propeller Style Guide</strong></a>
            </li>
        </ul>

 <div class="entity-list compact">
                    <a href="#" class="bookshelf entity-list-item" data-entity-type="bookshelf" data-entity-id="2">
    <span role="presentation" class="icon text-bookshelf"><svg class="svg-icon" data-icon="bookshelf" role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M1.088 2.566h17.42v17.42H1.088z" fill="none"></path><path d="M4 20.058h15.892V22H4z"></path><path d="M2.902 1.477h17.42v17.42H2.903z" fill="none"></path><g><path d="M6.658 3.643V18h-2.38V3.643zM11.326 3.643V18H8.947V3.643zM14.722 3.856l5.613 13.214-2.19.93-5.613-13.214z"></path></g></svg></span>
    <div class="content">
            <h4 class="entity-list-item-name break-text">Submit a Ticket!</h4>
            <div class="entity-item-snippet">

    
    <p class="text-muted break-text"></p>
</div>
    </div>
</a>            </div>       
</div>

<!--div class="mb-xl">
    <h5><a class="no-color" href="{{ url("/pages/recently-updated") }}">{{ trans('entities.recently_updated_pages') }}</a></h5>
    <div id="recently-updated-pages">
        @include('partials.entity-list', [
        'entities' => $recentlyUpdatedPages,
        'style' => 'compact',
        'emptyText' => trans('entities.no_pages_recently_updated')
        ])
    </div>
</div>

<div id="recent-activity" class="mb-xl">
    <h5>{{ trans('entities.recent_activity') }}</h5>
    @include('partials.activity-list', ['activity' => $activity])
</div-->