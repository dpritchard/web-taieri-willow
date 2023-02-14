@props(['images'])

<div x-data="{ foo: 'bar' }">
@foreach ($images as $img)
	<x-img src="/assets/img/{{$img['src']}}" 
	       caption="{{$img['caption']}}" x-ref="TODO"
		   class="float-right w-1/3 mx-2 my-2"/>
@endforeach
</div>