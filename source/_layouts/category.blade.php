@extends('_layouts.main')

@section('body')
    <h1>{{ $page->title }}</h1>

    <div class="border-b border-slate-200 mb-4">
        @yield('content')
    </div>

    <div class="flex flex-col md:flex-row md:flex-wrap">
    @foreach ($page->posts($posts) as $post)
        <x-post-inline :post="$post" class="w-full md:w-1/3 lg:w-1/4 py-4 md:py-0 md:px-4"/>
    @endforeach
    </div>
@stop
