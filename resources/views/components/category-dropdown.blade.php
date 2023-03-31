<x-dropdown>
    <x-slot name="trigger">
        <button class="pl-3 py-2 text-sm text-left flex font-semibold w-full">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

            <x-svg-item name="down-arrow" class="absolute pointer-events-none relative" style="left: 12px;"/>
        </button>

    </x-slot>


    <x-dropdown-item href="/" :active="request()->routeIs('home')">
        All
    </x-dropdown-item>

    @foreach ($categories as $category)
        <x-dropdown-item href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}" :active='request()->is("categories/{$category->slug}")'>
            {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
