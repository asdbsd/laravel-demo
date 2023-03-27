@props(['currentCategory'])
 
<div class="lg:inline-flex lg:w-32 relative bg-gray-100 rounded-xl">

    <div @click="show = ! show"  x-data="{ show: false }" @click.away="show = false" class="w-full">
        {{-- Trigger --}}
        {{ $trigger }}

        {{-- Links --}}
        <div x-show="show" class="py-2 absolute bg-gray-100 mt-2 rounded-xl w-full z-50 overflow-auto max-h-52" style="display: none;">
            {{ $slot }}
        </div>
    </div>

</div>