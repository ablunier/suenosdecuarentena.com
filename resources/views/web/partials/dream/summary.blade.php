<article class="at-dream fadeIn wow">
    <time class="dream-date" datetime="{{ $dream->dreamed_on->toDateTimeString() }}">
        {{ $dream->dreamed_on->isoFormat('D [de] MMMM [de] Y') }}
    </time>
    @if ($dream->location)
        <span class="dream-place">{{ $dream->location->name }}</span>
    @endif
    @if ($dream->owner_name)
    <span class="dream-author">{{ $dream->owner_name }}</span>
    @endif

    <p>{!! $dream->description !!}</p>
</article>
