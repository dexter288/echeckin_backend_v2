<div class="sm:fixed sm:top-0 sm:right-0 p-6 text-end z-10">
    @auth
        <a href="{{ url('/dashboard') }}"
            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
            wire:navigate>Dashboard</a>
    @else
        <a href="{{ route('login') }}"
            class="bg-cyan-300 inline-block px-12 py-3 text-sm font-medium text-white bg-cyan-600 border border-cyan-600 rounded active:text-cyan-500 hover:bg-transparent hover:text-cyan-600 focus:outline-none focus:ring"
            wire:navigate>
            Log in
        </a>
        @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="inline-block px-12 py-3 text-sm font-medium text-cyan-600 border border-cyan-600 rounded hover:bg-cyan-600 hover:text-white active:bg-indigo-500 focus:outline-none focus:ring"
                wire:navigate>
                Register
            </a>
        @endif

    @endauth
</div>
