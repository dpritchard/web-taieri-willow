@props(['post'])

<div {{ $attributes->merge(['class' => 'flex flex-row md:flex-col']) }}>
    <!-- Medium and above -->
    <div class="hidden md:flex flex-col">
        <h2 class="text-xl mb-0">
                <a
                    href="{{ $post->getUrl() }}"
                    title="Read more - {{ $post->title }}"
                    class="text-slate-900"
                >{{ $post->title }}</a>
        </h2>
        <p class="text-slate-700 text-xs mb-2">{{ $post->getDate()->format('F j, Y') }}</p>
        <p class="my-0">{!! $post->getExcerpt(200) !!} <a href="{{ $post->getUrl() }}">Read&nbspMore...</a></p>
        @if ($post->cover_image)
        <a href="{{ $post->getUrl() }}">
            <x-img :src="$post->cover_image" caption="" class="my-2" 
                alt="{{ $post->title }} cover image"/>
        </a>
        @endif
    </div>

    <!-- Small screens -->
    <div class="flex flex-row md:hidden">
        @if ($post->cover_image)
        <div class="flex w-1/3 mr-2">
            <a href="{{ $post->getUrl() }}">
                <x-img :src="$post->cover_image" caption="" class="" 
                    alt="{{ $post->title }} cover image"/>
            </a>    
        </div>
        @endif
        <div class="flex flex-col w-2/3">
            <h2 class="my-0 text-xl">
                <a
                    href="{{ $post->getUrl() }}"
                    title="Read more - {{ $post->title }}"
                    class="text-slate-900"
                >{{ $post->title }}</a>
            </h2>
            <p class="text-slate-700 text-xs mb-2">{{ $post->getDate()->format('F j, Y') }}</p>
            <p class="mb-4 mt-0">{!! $post->getExcerpt(200) !!} <a href="{{ $post->getUrl() }}">Read&nbspMore...</a></p>
        </div>
    </div>
    
    

    

    
</div>
