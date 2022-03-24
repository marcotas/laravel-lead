<div {{ $attributes }}>
    <input type="text" wire:model="{{ $attributes->wire('model') }}" class="border-gray-300 focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 rounded-md shadow-sm">
    @if($errors->has('name')) <p>{{ $errors->first('name') }}</p> @endif
</div>
