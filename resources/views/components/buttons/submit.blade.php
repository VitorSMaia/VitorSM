@props([
    'label' => '',
    'text_color' => 'text-white',
    'bg_color' => 'bg-blue-500'
])

<div {{ $attributes->merge(['class' => '']) }}>
    <button type="submit" class="{{ $text_color  }} {{ $bg_color }} w-full hover:-translate-y-1 active:translate-y-1 transition duration-150 ease-in-out  rounded-md px-8 py-2  font-semibold text-lg">
        {{ $label }}
    </button>
</div>
