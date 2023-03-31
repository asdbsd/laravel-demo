<x-layout>
    <x-panel>
        <h1 class="text-center font-bold text-xl mb-4">Register</h1>

        <form method="POST" action="/register" class="p-2 border border-gray-100 rounded-xl max-w-2xl mx-auto space-y-2">
            @csrf

            {{-- Name Field --}}
            <div class="mb-6">
                <x-form.input name="name" />
            </div>

            {{-- Username Field --}}
            <div class="mb-6">
                <x-form.input name="username" />
            </div>

            {{-- E-Mail Field --}}
            <div class="mb-6">
                <x-form.input name="email" />
            </div>

            {{-- Password Field --}}
            <div class="mb-6">
                <x-form.input name="password" type="password" />
            </div>

            {{-- Submit Btn --}}
            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white rounded-full py-2 px-4 hover:bg-green-400 w-full">
                    Create User
                </button>
            </div>

        </form>
    </x-panel>
</x-layout>
