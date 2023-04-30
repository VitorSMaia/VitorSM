@props([
    'model',
    'label'
])

<div {{ $attributes->merge(['class' => '']) }} >
    <label for="{{ $label }}" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">{{ $label }}</label>
    <input wire:model.defer="state.{{ $model }}" id="{{ $model }}" type="date" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center px-2 text-sm border-gray-300 rounded border" placeholder="{{ $label }}" />
    @error("state." . $model ) <span class="error">{{ $message }}</span> @enderror
</div>