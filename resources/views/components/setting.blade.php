@props(['heading'])

<h1 class="text-lg font-bold mb-4 text-center border-b pb-4">
    {{ $heading }}
</h1>

<div class="flex">
    <aside class="w-48">
        <h4 class="pb-2 max-w-5 font-semibold}}">Links</h4>
        <ul class="mt-1">
            <li>
                <a href="/admin/posts"
                    class="text-sm text-gray-500 {{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">All Posts</a>

            </li>
            <li>
                <a href="/admin/posts/create"
                    class="text-sm text-gray-500 {{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">New
                    Post</a>
            </li>
        </ul>
    </aside>

    <x-panel>
        {{ $slot }}
    </x-panel>

</div>
