<x-layout>
    <x-panel>
        <x-setting heading="Create New Post">

            <form method="POST" action="/admin/posts" enctype="multipart/form-data" class="p-2 border border-gray-100 rounded-xl max-w-2xl mx-auto space-y-2">
                @csrf

                <x-form.input name="title" />
                <x-form.input name="slug" />
                <x-form.input name="thumbnail" type="file" />
                <x-form.textarea name="excerpt" rows="2" />
                <x-form.textarea name="body" rows="10" />

                <div>
                    <x-form.label name="category" />

                    <select name="category_id" id="category_id"
                        class="text-xs border border-gray-250 p-2 w-full rounded-xl">
                        @php
                            $categories = \App\Models\Category::all();
                        @endphp

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') ? 'selected' : '' }}>
                                {{ ucwords($category->name) }}
                            </option>
                        @endforeach
                    </select>

                    <x-form.error name="category" />
                </div>

                <x-form.submit-btn name="add" />
            </form>

        </x-setting>
    </x-panel>

</x-layout>
