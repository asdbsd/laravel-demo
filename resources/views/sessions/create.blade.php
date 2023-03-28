<x-layout>
    <main class="max-w-lg mx-auto mt-6 lg:mt-20 space-y-6 bg-gray-100 p-6 rounded-xl">

        {{-- @foreach ($errors->all() as $error)
            <li class="text-center text-red-500" style="list-style-type: none">{{ $error }}</li>
        @endforeach --}}

        <h1 class="text-center font-bold text-xl">Log In</h1>

        <form method="POST" action="/login">
            @csrf

            {{-- E-mail Field --}}
            <div class="mb-6">
                <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    E-mail
                </label>

                <input type="email" name="email" id="email" class="border border-gray-400 p-2 w-full"
                    value="{{ old('email') }}" required>

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password Field --}}
            <div class="mb-6">
                <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Password
                </label>

                <input type="password" name="password" id="password" class="border border-gray-400 p-2 w-full" required>

                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Submit Btn --}}
            <div class="text-center">
                <button type="submit" class="bg-green-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                    Log In
                </button>
            </div>

        </form>
    </main>
</x-layout>
