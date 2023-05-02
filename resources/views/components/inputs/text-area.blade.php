
@props([
    'model',
    'label'
])

<div {{ $attributes->merge(['class' => '']) }} >
    <label for="{{ $label }}" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">{{ $label }}</label>
    <textarea wire:model.defer="state.{{ $model }}" id="{{ $model }}" type="text" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center px-2 text-sm border-gray-300 rounded border" placeholder="{{ $label }}" >
    </textarea>
    @error($model) <span class="error">{{ $message }}</span> @enderror
</div>
