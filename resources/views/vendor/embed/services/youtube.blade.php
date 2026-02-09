<x-embed-responsive-wrapper :aspect-ratio="$aspectRatio"
    style="width: 800px; height: 450px; max-width: 100%; border: 1px solid #ccc; border-radius: 8px;">
    <iframe aria-label="foo {{ $label }}" src="https://www.youtube-nocookie.com/embed/{{ $videoId }}"
        frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</x-embed-responsive-wrapper>
