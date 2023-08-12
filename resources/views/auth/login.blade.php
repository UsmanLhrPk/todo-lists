<x-layouts.guest>
    <x-flash-message />

    <div class="w-1/3 mx-auto">
        <form method="POST" class="p-6 mt-24 bg-purple-100 rounded-xl" action="{{ route('session.store') }}">
            @csrf

            <h1 class="mb-6 text-2xl font-bold text-center">Login</h1>

            <div class="w-full">
                <label class="inline-block mt-4 mb-2" for="email">Email</label><br />
                <x-input id="email" type="email" name="email" value="{{ old('email') }}"></x-input>
                @error('email')
                    <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                @enderror

            </div>

            <div class="w-full">
                <label class="inline-block mt-4 mb-2" for="password">Password</label><br />
                <x-input id="password" type="password" name="password" value="{{ old('password') }}"></x-input>
                @error('password')
                    <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="w-full">
                <input type="submit" class="w-full py-3 mt-6 font-medium text-white bg-purple-500 rounded-lg cursor-pointer hover:bg-purple-400">
            </div>
        </form>
    </div>
</x-layouts.guest>

