
<div class="content">
    <h4 class="entity-list-item-name break-text">
       {{ $book->name }}</h4>
    <div class="entity-item-snippet">
        <p class="text-muted break-text mb-s">{{ $book->getExcerpt() }}</p>
    </div>
    <hr/>
    @foreach($bookChildren as $bookname=>$bookChapter)
        @if($book->name==$bookname)


                    @foreach($bookChapter as $chapter)
                        <div >
                            @if($chapter->chapter_id =='0')
                                <a href="{{ $chapter->getUrl() }}"
                                   class="chapter entity-list-item" data-entity-type="chapter"
                                   data-entity-id="{{$chapter->id}}">
                                    @icon('page') {{$chapter->name}}</a>
                            @else
                                <button type="button" chapter-toggle
                                        aria-expanded="false"
                                        class="text-muted chapter-expansion-toggle"><h5
                                            class="entity-list-item-name break-text">
                                        @icon('caret-right') {{$chapter->name}}</h5></button>
                                <div class="inset-list">

                                    @if(count($chapter->visible_pages) >0)

                                            @foreach($chapter->visible_pages as $chapterpage)

                                                    <a href="{{ $chapterpage->getUrl() }}"
                                                       class="chapter entity-list-item">
                                                        @icon('page') {{ $chapterpage->name }}
                                                    </a>

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
