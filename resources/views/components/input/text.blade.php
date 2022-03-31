@php
$attributeName = $attributes->wire('model')->value();
@endphp

<div class="relative text-left w-full">
    <input type="text" {{ $attributes->wire('model') }} placeholder="{{ $placeholder ?? null }}" class="outline-none border-opacity-30
        @if($errors->has($attributeName)) border-red-400 focus:border-red-400 @else border-white focus:border-white  @endif
        bg-white bg-opacity-20 ring-0 focus:ring-0 focus:outline-none rounded-lg shadow-sm w-full @if(isset($icon)) pl-10 @endif placeholder:text-gray-400">

    @if(isset($icon))
    <x-dynamic-component :component="'icon.' . $icon" class="opacity-50 w-5 h-5 absolute top-[10px] left-3" />
    @endif

    @if($errors->has($attributeName)) <p class="text-sm text-red-400">{{ $errors->first($attributeName) }}</p> @endif
</div>
