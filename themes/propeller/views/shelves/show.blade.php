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
                    <div class="grid third">
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


    
@stop

@section('right')
    <div class="actions mb-xl">
        <h5>{{ trans('common.actions') }}</h5>
        <div class="icon-list text-primary">

            @if(userCan('book-create-all') && userCan('bookshelf-update', $shelf))
                <a href="{{ $shelf->getUrl('/create-book') }}" class="icon-list-item">
                    <span class="icon">@icon('add')</span>
                    <span>{{ trans('entities.books_new_action') }}</span>
                </a>
            @endif

            @include('partials.view-toggle', ['view' => $view, 'type' => 'shelf'])

            <hr class="primary-background">

            @if(userCan('bookshelf-update', $shelf))
                <a href="{{ $shelf->getUrl('/edit') }}" class="icon-list-item">
                    <span>@icon('edit')</span>
                    <span>{{ trans('common.edit') }}</span>
                </a>
            @endif

            @if(userCan('restrictions-manage', $shelf))
                <a href="{{ $shelf->getUrl('/permissions') }}" class="icon-list-item">
                    <span>@icon('lock')</span>
                    <span>{{ trans('entities.permissions') }}</span>
                </a>
            @endif

            @if(userCan('bookshelf-delete', $shelf))
                <a href="{{ $shelf->getUrl('/delete') }}" class="icon-list-item">
                    <span>@icon('delete')</span>
                    <span>{{ trans('common.delete') }}</span>
                </a>
            @endif

        </div>
    </div>
@stop




