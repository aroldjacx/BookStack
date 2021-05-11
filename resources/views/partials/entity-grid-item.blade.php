<a href="{{ $entity->getUrl() }}" class="grid-card"
   data-entity-type="{{ $entity->getType() }}" data-entity-id="{{ $entity->id }}">
    <div class="bg-{{ $entity->getType() }} featured-image-container-wrap">
        <div class="featured-image-container" @if($entity->cover) style="background-image: url('{{ $entity->getBookCover() }}')"@endif>
        </div>
        @icon($entity->getType())
    </div>
    <div class="grid-card-content">
        <h2 class="text-limit-lines-2">{{ $entity->name }}</h2>
        <p class="text-muted">{{ $entity->getExcerpt(130) }}</p>
    </div>
    
</a>