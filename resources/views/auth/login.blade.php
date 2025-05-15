<x-guest-layout>
    <div class="p-6 flex items-center justify-center bg-gradient-to-br from-blue-600 via-indigo-300 to-blue-500 px-4 rounded-lg">
        <div class="w-full max-w-md bg-white/90 backdrop-blur-md rounded-2xl shadow-xl border border-gray-200">
            <div class="p-8 sm:p-10">
                {{-- <!-- Logo (optional) -->
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12">
                </div> --}}

                <h1 class="text-3xl font-bold text-center text-gray-800 mb-2">Welcome Back</h1>
                <p class="text-center text-gray-500 text-sm mb-6">Sign in to your Payroll Account</p>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" name="email" type="email" :value="old('email')" required autofocus autocomplete="username"
                            class="block mt-1 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out" placeholder="danishnurwahid1022011@gmail.com" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-500" />
                    </div>

                    <!-- Password -->
                    <div class="mb-4">

                    <x-input-label for="password" :value="__('Password')" class="text-gray-700" />
                        <div class="relative">
                            <x-text-input
                                id="password"
                                class="block mt-1 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out"
                                type="password"
                                name="password"
                                required
                                autocomplete="current-password"
                                placeholder="danishganteng"
                            />
                            <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500" onclick="togglePassword()">
                                <i id="toggleIcon" class="ri-eye-close-line text-lg"></i>
                            </button>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />

                    </div>

                    <!-- Remember Me & Forgot -->
                    <div class="flex items-center justify-between mb-6">
                        <label class="inline-flex items-center text-sm text-gray-600">
                            <input type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <span class="ml-2">Remember me</span>
                        </label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">
                                Forgot password?
                            </a>
                        @endif
                    </div>

                    <!-- Login Button -->
                    <div>
                        <button type="submit"
                            class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75 transition">
                            Log in
                        </button>
                    </div>
                </form>
                 <p class="mt-7 text-sm text-gray-600 text-center">Belum punya akun? <a href="{{ route('register') }}" class="text-light font-semibold hover:underline hover:text-red-500"">Daftar</a></p>
            </div>
        </div>
    </div>

        <!-- Toggle Password Script -->
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('ri-eye-close-line');
                toggleIcon.classList.add('ri-eye-line');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('ri-eye-line');
                toggleIcon.classList.add('ri-eye-close-line');
            }
        }
    </script>

    <!-- Remix Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css">
</x-guest-layout>