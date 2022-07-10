@foreach ($posts->where('featured', true) as $featuredPost)
    <div class="w-full mb-6">
        @if ($featuredPost->cover_image)
            <img src="{{ $page->fullUrl($featuredPost->cover_image) }}" alt="{{ $featuredPost->title }} cover image" class="mb-6">
        @endif

        <p class="text-slate-700 font-medium my-2">
            {{ $featuredPost->getDate()->format('F j, Y') }}
        </p>

        <h2 class="mt-0">
            <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" class="text-slate-900">
                {{ $featuredPost->title }}
            </a>
        </h2>

        <p class="mt-0 mb-4">{!! $featuredPost->getExcerpt() !!}</p>

        <a href="{{ $featuredPost->getUrl() }}" title="Read - {{ $featuredPost->title }}" class="uppercase tracking-wide mb-4">
            Read
        </a>
    </div>

    @if (! $loop->last)
        <hr class="border-b my-6">
    @endif
@endforeach
