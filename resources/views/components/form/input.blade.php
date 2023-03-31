@props(['name', 'type' => 'text'])

<div>
    <x-form.label class="label" :name="$name" />

    <input type="{{ $type }}" name="{{ $name }}" placeholder="{{ ucwords($name) }}"
        class="text-xs border border-gray-250 p-2 w-full rounded-xl" {{ $attributes(['value' => old($name)]) }}>

    <x-form.error :name="$name" />
</div> 