---
title: News
description: The list of news posts for the site
pagination:
    collection: posts
    perPage: 6
---
@extends('_layouts.main')

@section('body')
    <div class="flex flex-col md:flex-row md:flex-wrap">
        @foreach ($pagination->items as $post)
            <x-post-inline :post="$post" class="w-full md:w-1/2 lg:w-1/3 py-4 md:py-0 md:px-4"/>
        @endforeach
    </div>

    @if ($pagination->pages->count() > 1)
        <nav class="flex text-base my-8">
            @if ($previous = $pagination->previous)
                <a
                    href="{{ $previous }}"
                    title="Previous Page"
                    class="bg-slate-200 hover:bg-slate-400 rounded mr-3 px-5 py-3"
                >&LeftArrow;</a>
            @endif

            @foreach ($pagination->pages as $pageNumber => $path)
                <a
                    href="{{ $path }}"
                    title="Go to Page {{ $pageNumber }}"
                    class="bg-slate-200 hover:bg-slate-400 rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'text-amber-700' : '' }}"
                >{{ $pageNumber }}</a>
            @endforeach

            @if ($next = $pagination->next)
                <a
                    href="{{ $next }}"
                    title="Next Page"
                    class="bg-slate-200 hover:bg-slate-400 rounded mr-3 px-5 py-3"
                >&RightArrow;</a>
            @endif
        </nav>
    @endif
@stop
