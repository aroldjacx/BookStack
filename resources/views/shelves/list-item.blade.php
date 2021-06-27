
    <div class="entity-list-item-image bg-bookshelf @if($shelf->image_id) has-image @endif" style="background-image: url('{{ $shelf->getBookCover() }}')">
        @icon('bookshelf')
    </div>
    <div class="content py-xs">
        @if(count($shelf->visibleBooks)>0)
        <button type="button" chapter-toggle
                        aria-expanded="false"
                        class="text-muted chapter-expansion-toggle">
                        <h4 class="entity-list-item-name break-text">@icon('caret-right'){{ $shelf->name }}</h4>
                        </button>
        <div class="inset-list" style="margin-left:30px;">
            @foreach($shelf->visibleBooks as $book)
        <div class="chapter chapter-expansion">
            <div class="content">
                <button type="button" chapter-toggle
                        aria-expanded="false"
                        class="text-muted chapter-expansion-toggle"><h4 class="entity-list-item-name break-text">@icon('caret-right') {{ $book->name }}</h4>    </button>
                        <div class="inset-list"  style="margin-left:30px;">
                            <div class="entity-list-item-children">
                                @foreach($bookChildren as $bookname=>$bookChapter)
                                    @if($book->name==$bookname)


                                            @foreach($bookChapter as $chapter)
                                                <?php /*echo '<pre>'; */?><!--
                                            <?php /*print_r($chapter->visible_pages) */?>
                                                --><?php /*echo '</pre>'; */?>
                                            <div class="entity-list book-contents">
                                            @if($chapter->chapter_id =='0')
                                                 <a href="{{ $chapter->getUrl() }}" class="chapter entity-list-item" data-entity-type="chapter" data-entity-id="{{$chapter->id}}">
                                            <h4>{{$chapter->name}}</h4>
                                            </a>
                                            @else
                                                <button type="button" chapter-toggle
                                                aria-expanded="false"
                                                class="text-muted page-expansion-toggle"><h4 class="entity-list-item-name break-text">@icon('caret-right') {{$chapter->name}}</h4>   </button>
                                                <div class="inset-list"  style="margin-left:30px;">

                                                    @if(count($chapter->visible_pages) >0)
                                                        <ul>
                                                        @foreach($chapter->visible_pages as $chapterpage)
                                                        <li>
                                                                 <a href="{{ $chapterpage->getUrl() }}" class="chapter entity-list-item" data-entity-type="page" data-entity-id="{{$chapterpage->id}}">
                                                            {{ $chapterpage->name }}
                                                            </a>
                                                        </li>
                                                        @endforeach
                                                        </ul>

                                                    @endif

                                                </div>
                                            @endif

                                            </div>
                                            @endforeach


                                    @endif
                                @endforeach

                            </div>
                        </div>
            </div>
        </div>
    @endforeach
        </div>
        @else
            <a href="{{ $shelf->getUrl() }}" class="shelf entity-list-item" data-entity-type="bookshelf" data-entity-id="{{$shelf->id}}"><h4 class="entity-list-item-name break-text">{{ $shelf->name }}</h4></a>
        @endif
        <div class="entity-item-snippet">
            <p class="text-muted break-text mb-none">{{ $shelf->getExcerpt() }}</p>
        </div>
    </div>
