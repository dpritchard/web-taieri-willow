@props(['src', 'caption' => ''])

<div {{ $attributes->merge(['class' => 'w-1/2 md:w-1/3 mx-2 my-2 clear-both']) }} >
    <img src="{{ url($src) }}" class="rounded-md" alt="{{ $attributes['alt'] ?? $caption }}"/>
    @if ($caption)
        <p class="text-xs text-slate-500 text-center">{{ $caption }}</p>
    @endif
</div>
