<div class="flex flex-col md:flex-row md:flex-wrap">
@foreach ($posts->take(6) as $post)
<x-post-inline :post="$post" class="w-full md:w-1/3 lg:w-1/4 py-4 md:py-0 md:px-4"/>
@if (! $loop->last)
<hr class="border-b my-6">
@endif
@endforeach
</div>