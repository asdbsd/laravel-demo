@props(['name', 'rows'])

<div>
    <x-form.label  class="label" :name="$name" />

    <textarea rows="{{ $rows }}" type="text" name="{{ $name }}"
        class="text-xs border border-gray-250 p-2 w-full rounded-xl" required {{ $attributes }}>{{ $slot ?? old($name) }}</textarea>

    <x-form.error :name="$name" />
</div>