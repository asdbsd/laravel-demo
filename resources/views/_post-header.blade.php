<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <!--  Category -->
        <x-dropdown>
            <x-slot name="trigger">
                <button class="pl-3 py-2 text-sm text-left flex font-semibold" style="width: 100%;">
                    {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

                    <x-svg-item name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />
                </button>

            </x-slot>


            <x-dropdown-item href="/" :active="request()->routeIs('home')">
                All
            </x-dropdown-item>

            @foreach ($categories as $category)
                <x-dropdown-item href="/categories/{{ $category->slug }}" :active='request()->is("categories/{$category->slug}")'>
                    {{ ucwords($category->name )}}
                </x-dropdown-item>
            @endforeach
        </x-dropdown>

        {{-- <!-- Other Filters -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                <option value="category" disabled selected>Other Filters
                </option>
                <option value="foo">Foo
                </option>
                <option value="bar">Bar
                </option>
            </select>

            <x-svg-item name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />
        </div> --}}
        

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                <input type="text" name="search" placeholder="Find something"
                    class="bg-transparent placeholder-black font-semibold text-sm">
            </form>
        </div>
    </div>
</header>