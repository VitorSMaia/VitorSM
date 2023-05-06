
@props([
    'model',
    'label',
    'rows' => '3',
    'defer' => true
])

<div {{ $attributes->merge(['class' => 'font-bold tracking-normal']) }} >
    <label for="{{ $label }}" class="font-light text-lg">{{ $label }}</label>
    <textarea wire:model.@if($defer)'defer'@endif ="state.{{ $model }}" id="{{ $model }}" rows="{{ $rows }}" type="text" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full flex items-center px-2 text-sm border-gray-300 rounded border" placeholder="{{ $label }}" >
    </textarea>
    @error($model)
    <div class="mt-2 bg-red-100 border border-red-400 text-red-700 px-2 py-1 rounded relative" role="alert">
        <strong class="font-light">Error!</strong>
        <span class="block sm:inline">{{ $message }}</span>
    </div>
    @enderror
</div>
