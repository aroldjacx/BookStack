@extends('tri-layout')

@section('body')

    <div class="mb-s">
        @include('partials.breadcrumbs', ['crumbs' => [
            $shelf,
        ]])
    </div>

    <main class="card content-wrap">
        <h1 class="break-text">{{$shelf->name}}</h1>
        <div class="book-content">
            <p class="text-muted">{!! nl2br(e($shelf->description)) !!}</p>
            @if(count($shelf->visibleBooks) > 0)
                @if($view === 'list')
                    <div class="entity-list">
                        @foreach($shelf->visibleBooks as $book)
                            @include('books.list-item', ['book' => $book])
                        @endforeach
                    </div>
                @else
                    <div class="grid third book-card">

<div class="grid-card">
    <div class="featured-image-container-wrap">
        <h2 class="text-limit-lines-2">New Hires</h2>

    </div>
    <div class="grid-card-content">
        <section class="ac-container">
                <div>
                    <input id="ac-1" name="accordion-1" type="radio" />
                    <label for="ac-1">About us</label>
                    <article class="ac-small">
                        <ul>
                            <li><a href="#">Birthay</a></li>
                            <li><a href="#">Monday</a></li>
                            <li><a href="#">Seventh</a></li>
                            <li><a href="#">Seventh</a></li>

                        </ul>
                    </article>
                </div>
                <div>
                    <input id="ac-2" name="accordion-1" type="radio" />
                    <label for="ac-2">How we work</label>
                    <article class="ac-small">
                         <ul>
                            <li><a href="#">Birthay</a></li>
                            <li><a href="#">Monday</a></li>
                            <li><a href="#">Seventh</a></li>
                        </ul>
                    </article>
                </div>
                <div>
                    <input id="ac-3" name="accordion-1" type="radio" />
                    <label for="ac-3">References</label>
                    <article class="ac-small">
                        <ul>
                            <li><a href="#">Birthay</a></li>
                            <li><a href="#">Monday</a></li>
                            <li><a href="#">Seventh</a></li>
                            <li><a href="#">Seventh</a></li>
                        </ul>
                    </article>
                </div>
                <div>
                    <input id="ac-4" name="accordion-1" type="radio" />
                    <label for="ac-4">Contact us</label>
                    <article class="ac-small">
                         <ul>
                            <li><a href="#">Birthay</a></li>
                            <li><a href="#">Monday</a></li>
                            <li><a href="#">Seventh</a></li>
                            <li><a href="#">Seventh</a></li>
                        </ul>
                    </article>
                </div>
            </section>
    </div>

</div>

<div class="grid-card">
    <div class="featured-image-container-wrap">
        <h2 class="text-limit-lines-2">Personal</h2>

    </div>
    <div class="grid-card-content">
        <section class="ac-container">
                <div>
                    <input id="ac-5" name="accordion-2" type="radio" checked />
                    <label for="ac-5">Leaves of Absence</label>
                    <article class="ac-medium">
                        <ul>
                            <li><a href="http://bookstack.localhost/books/personal/page/leave-of-absence">Birthay Parents</a></li>
                            <li><a href="#">Payroll</a></li>
                            <li><a href="#">PTO</a></li>
                            <li><a href="#">Sequoia</a></li>
                            <li><a href="#">Clint Perks</a></li>
                            <li><a href="#">Work from Home</a></li>
                            <li><a href="#">Life Event</a></li>
                        </ul>
                    </article>
                </div>
                <div>
                    <input id="ac-6" name="accordion-2" type="radio" />
                    <label for="ac-6">How we work</label>
                    <article class="ac-small">
                         <ul>
                            <li><a href="#">Birthay</a></li>
                            <li><a href="#">Monday</a></li>
                            <li><a href="#">Seventh</a></li>
                        </ul>
                    </article>
                </div>
                <div>
                    <input id="ac-7" name="accordion-2" type="radio" />
                    <label for="ac-7">References</label>
                    <article class="ac-small">
                        <ul>
                            <li><a href="#">Birthay</a></li>
                            <li><a href="#">Monday</a></li>
                            <li><a href="#">Seventh</a></li>
                            <li><a href="#">Seventh</a></li>
                        </ul>
                    </article>
                </div>
                <div>
                    <input id="ac-8" name="accordion-2" type="radio" />
                    <label for="ac-8">Contact us</label>
                    <article class="ac-small">
                         <ul>
                            <li><a href="#">Birthay</a></li>
                            <li><a href="#">Monday</a></li>
                            <li><a href="#">Seventh</a></li>
                            <li><a href="#">Seventh</a></li>
                        </ul>
                    </article>
                </div>
            </section>
    </div>

</div>

<div class="grid-card">
    <div class="featured-image-container-wrap">
        <h2 class="text-limit-lines-2">Proessional</h2>

    </div>
    <div class="grid-card-content">
        <section class="ac-container">
                <div>
                    <input id="ac-9" name="accordion-3" type="radio" />
                    <label for="ac-9">About us</label>
                    <article class="ac-small">
                        <ul>
                            <li><a href="#">Birthay</a></li>
                            <li><a href="#">Monday</a></li>
                            <li><a href="#">Seventh</a></li>
                            <li><a href="#">Seventh</a></li>

                        </ul>
                    </article>
                </div>
                <div>
                    <input id="ac-10" name="accordion-3" type="radio" />
                    <label for="ac-10">How we work</label>
                    <article class="ac-small">
                         <ul>
                            <li><a href="#">Birthay</a></li>
                            <li><a href="#">Monday</a></li>
                            <li><a href="#">Seventh</a></li>
                        </ul>
                    </article>
                </div>
                <div>
                    <input id="ac-11" name="accordion-3" type="radio" />
                    <label for="ac-11">References</label>
                    <article class="ac-small">
                        <ul>
                            <li><a href="#">Birthay</a></li>
                            <li><a href="#">Monday</a></li>
                            <li><a href="#">Seventh</a></li>
                            <li><a href="#">Seventh</a></li>
                        </ul>
                    </article>
                </div>
                <div>
                    <input id="ac-12" name="accordion-3" type="radio" />
                    <label for="ac-12">Contact us</label>
                    <article class="ac-small">
                         <ul>
                            <li><a href="#">Birthay</a></li>
                            <li><a href="#">Monday</a></li>
                            <li><a href="#">Seventh</a></li>
                            <li><a href="#">Seventh</a></li>
                        </ul>
                    </article>
                </div>
            </section>
    </div>

</div>
                        @foreach($shelf->visibleBooks as $key => $book)
                            @include('partials.entity-grid-item', ['entity' => $book])
                        @endforeach 
                    </div>
                @endif
            @else
                <div class="mt-xl">
                    <hr>
                    <p class="text-muted italic mt-xl mb-m">{{ trans('entities.shelves_empty_contents') }}</p>
                    <div class="icon-list inline block">
                        @if(userCan('book-create-all') && userCan('bookshelf-update', $shelf))
                            <a href="{{ $shelf->getUrl('/create-book') }}" class="icon-list-item text-book">
                                <span class="icon">@icon('add')</span>
                                <span>{{ trans('entities.books_create') }}</span>
                            </a>
                        @endif
                        @if(userCan('bookshelf-update', $shelf))
                            <a href="{{ $shelf->getUrl('/edit') }}" class="icon-list-item text-bookshelf">
                                <span class="icon">@icon('edit')</span>
                                <span>{{ trans('entities.shelves_edit_and_assign') }}</span>
                            </a>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </main>

@stop

@section('left')

    @if($shelf->tags->count() > 0)
        <div id="tags" class="mb-xl">
            @include('components.tag-list', ['entity' => $shelf])
        </div>
    @endif

<div class="mb-xl">
    <h5>{{ trans('entities.' . ($signedIn ? 'my_recently_viewed' : 'books_recent')) }}</h5>

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
        </a>
        </div>       
</div>


@stop

@section('right')
    <div class="actions mb-xl">
        <h5>{{ trans('common.resource') }}</h5>


<div class="resource-grid">
        <ul id="og-grid" class="og-grid">
                    <li>
                        <a href="#">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/12005/balloon-sq1.jpg" alt="img01">
                            <span>title here TBD</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/12005/balloon-sq1.jpg" alt="img02">
                            <span>title here TBD</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/12005/balloon-sq1.jpg" alt="img03">
                            <span>title here TBD</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/12005/balloon-sq1.jpg" alt="img04">
                            <span>title here TBD</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/12005/balloon-sq1.jpg" alt="img03">
                            <span>title here TBD</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/12005/balloon-sq1.jpg" alt="img04">
                            <span>title here TBD</span>
                        </a>
                    </li>
                </ul>

</div>

    </div>
@stop




