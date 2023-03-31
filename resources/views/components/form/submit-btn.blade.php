@props(['name'])

<div class="text-center">
    <button type="submit"
        class="bg-blue-500 text-white rounded-full py-2 px-4 hover:bg-green-400 w-full">{{ ucwords($name) }}
        Post</button>
</div>