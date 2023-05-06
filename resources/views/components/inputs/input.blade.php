
@props([
    'model',
    'label'
])

<div {{ $attributes->merge(['class' => 'font-bold tracking-normal']) }} >
    <label for="{{ $label }}" class="font-light text-lg">{{ $label }}</label>
    <input wire:model.defer="state.{{ $model }}" id="{{ $model }}" name="{{ $model }}" type="text" class="text-gray-600 font-light focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center px-2 border-gray-300 rounded-md border " placeholder="{{ $label }}" />
    @error($model)
        <div class="mt-2 bg-red-100 border border-red-400 text-red-700 px-2 py-1 rounded relative" role="alert">
            <strong class="font-light">Error!</strong>
            <span class="block sm:inline">{{ $message }}</span>
        </div>
    @enderror
</div>
