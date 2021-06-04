
<div class="mb-xl">
    <h5>{{ trans('entities.pages_navigation_top') }}</h5>

    {!!  customSidbarNavigationForBlade() !!}

</div>

<style>
ul#nav-list-wrapper:first-of-type  > li {
    color: red;
    font-weight: bold;
}

ul#nav-list-wrapper:not(:first-of-type) > li {
    background-color: #900;
    font-weight: 100;
}

</style>

<nav id="book-tree"
     class="book-tree mb-xl"
     aria-label="{{ trans('entities.books_navigation') }}">

    <!--h5>{{ trans('entities.books_navigation') }}</h5-->

    <ul class="sidebar-page-list mt-xs menu entity-list">
        @if (userCan('view', $book))
            <li class="list-item-book book">
                @include('partials.entity-list-item-basic', ['entity' => $book, 'classes' => ($current->matches($book)? 'selected' : '')])
            </li>
        @endif

        @foreach($sidebarTree as $bookChild)
            <li class="list-item-{{ $bookChild->getType() }} {{ $bookChild->getType() }} {{ $bookChild->isA('page') && $bookChild->draft ? 'draft' : '' }}">
                @include('partials.entity-list-item-basic', ['entity' => $bookChild, 'classes' => $current->matches($bookChild)? 'selected' : ''])

                @if($bookChild->isA('chapter') && count($bookChild->visible_pages) > 0)
                    <div class="entity-list-item no-hover">
                        <span role="presentation" class="icon text-chapter"></span>
                        <div class="content">
                            @include('chapters.child-menu', [
                                'chapter' => $bookChild,
                                'current' => $current,
                                'isOpen'  => $bookChild->matchesOrContains($current)
                            ])
                        </div>
                    </div>

                @endif

            </li>
        @endforeach
    </ul>
</nav>

    <div class="entity-list compact">
        <a href="#" class="bookshelf entity-list-item" data-entity-type="bookshelf" data-entity-id="2">
        <span role="presentation" class="icon text-bookshelf"><svg class="svg-icon" data-icon="bookshelf" role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M1.088 2.566h17.42v17.42H1.088z" fill="none"></path><path d="M4 20.058h15.892V22H4z"></path><path d="M2.902 1.477h17.42v17.42H2.903z" fill="none"></path><g><path d="M6.658 3.643V18h-2.38V3.643zM11.326 3.643V18H8.947V3.643zM14.722 3.856l5.613 13.214-2.19.93-5.613-13.214z"></path></g></svg></span>
        <div class="content">
        <h4 class="entity-list-item-name break-text">Submit a Ticket!</h4>
        <div class="entity-item-snippet">
        <p class="text-muted break-text"></p>
        </div>
        </div>
        </a>
    </div> 