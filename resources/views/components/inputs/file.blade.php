
@props([
    'model',
    'label'
])

{{--<div  >--}}
{{--    <label for="{{ $label }}" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">{{ $label }}</label>--}}
{{--    <input wire:model.defer="state.{{ $model }}" id="{{ $model }}" type="file" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center px-2 text-sm border-gray-300 rounded border" placeholder="{{ $label }}" />--}}
{{--    --}}
{{--</div>--}}


<div {{ $attributes->merge(['class' => '']) }} class="flex min-h-screen items-center justify-center bg-gray-100 font-sans">
    <label for="{{ $model }}" class="mx-auto cursor-pointer flex w-full max-w-lg flex-col items-center rounded-xl border-2 border-dashed border-blue-400 bg-white p-6 text-center">
        <span class="material-symbols-rounded text-4xl  text-gray-400">
            cloud_upload
        </span>

        <h2 class="mt-4 text-xl font-medium text-gray-700 tracking-wide">{{ $label }}</h2>

        <p class="mt-2 text-gray-500 tracking-wide">Upload or darg & drop your file SVG, PNG, JPG or GIF. </p>

        <input wire:model.defer="state.{{ $model }}" id="{{ $model }}" type="file" class="hidden" />
    </label>
    @error("state." . $model ) <span class="error">{{ $message }}</span> @enderror
</div>
