@props(['src', 'caption' => ''])

<div {{ $attributes->merge(['class' => 'clear-both']) }} >
    <img src="{{ url($src) }}" class="rounded-md" alt="{{ $attributes['alt'] ?? $caption }}"/>
    @if ($caption)
        <p class="text-xs text-slate-500 text-center">{{ $caption }}</p>
    @endif
</div>
