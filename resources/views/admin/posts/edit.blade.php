<x-layout>
    <x-panel>
        <x-setting :heading="'Edit: ' . $post->title">

            <form method="POST" action="/admin/posts/{{ $post->slug }}" enctype="multipart/form-data"
                class="p-2 border border-gray-100 rounded-xl max-w-2xl mx-auto space-y-2">
                @csrf
                @method('PATCH')

                <x-form.input name="title" :value="old('title', $post->title)" />
                <x-form.input name="slug" :value="old('slug', $post->slug)" />
                <div class="flex mt-6">
                    <div class="flex-1">
                        <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
                    </div>
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="blog-post-thumbnail" class="rounded-xl ml-6" width="100">
                </div>

                <x-form.textarea name="excerpt" rows="2">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
                <x-form.textarea name="body" rows="10">{{ old('body', $post->body) }}</x-form.textarea>

                <div>
                    <x-form.label name="category" />

                    <select name="category_id" id="category_id"
                        class="text-xs border border-gray-250 p-2 w-full rounded-xl">
                        @php
                            $categories = \App\Models\Category::all();
                        @endphp

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                {{ ucwords($category->name) }}
                            </option>
                        @endforeach
                    </select>

                    <x-form.error name="category" />
                </div>

                <x-form.submit-btn name="update" />
            </form>

        </x-setting>
    </x-panel>

</x-layout>
