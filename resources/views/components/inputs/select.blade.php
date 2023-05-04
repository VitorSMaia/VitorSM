
@props([
    'model',
    'label',
    'rows' => '3',
    'defer' => true
])

<div {{ $attributes->merge(['class' => 'text-gray-800 text-sm font-bold leading-tight tracking-normal']) }} >
    <label for="{{ $label }}" class="">{{ $label }}</label>
    <select wire:model.@if($defer)'defer'@endif ="state.{{ $model }}" id="{{ $model }}" rows="{{ $rows }}" type="text" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full flex items-center px-2 text-sm border-gray-300 rounded border" placeholder="{{ $label }}" >
        {{ $slot }}
    </select>
    @error($model) <span class="error">{{ $message }}</span> @enderror
</div>
