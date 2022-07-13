@extends('_layouts.main')

@php
    $page->type = 'article';
@endphp

@section('body')
    <h1 class="leading-none mb-2">{{ $page->title }}</h1>

    @if ($page->cover_image)
        <x-img src="{{ $page->cover_image }}" caption="" class="float-right w-1/3 mx-2 my-2"
               alt="{{ $page->title }} cover image"/>
    @endif

    <p class="text-slate-700">{{ $page->author }}  •  {{ date('F j, Y', $page->date) }}</p>

    @yield('content')

    @if ($page->categories)
        <p>
        @foreach ($page->categories as $i => $category)
            <a
                href="{{ url('/news/categories/' . $category) }}"
                title="View posts in {{ $category }}"
                class="inline-block bg-slate-200 hover:bg-slate-400 leading-loose tracking-wide text-slate-800 hover:text-slate-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
            >{{ $category }}</a>
        @endforeach
        <p>
    @endif
    <div class="clear-both"></div>
    <hr class="border-b my-8">

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>
@endsection
