<label for="{{ $props['for'] }}"
    class="{{ $props['class'] ?? '' }} block text-sm font-medium tracking-wide text-gray-800 mb-1.5">
    {{ $props['label'] }}
    @isset($props['required'])
        @if ($props['required'])
            <span class="text-red-500 font-medium">*</span>
        @endif
    @endisset
</label>
