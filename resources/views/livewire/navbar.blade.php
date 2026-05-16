<div x-data="{ open: false }" x-cloak>

    <!-- Navbar -->
    <nav class="fixed top-0 z-50 w-full shadow-lg bg-gradient-to-r from-violet-700 to-violet-900">

        <div class="container flex items-center justify-between h-16 px-4 mx-auto max-w-7xl">

          <!-- Logo -->
<a href="/" wire:navigate class="flex items-center space-x-3">

    @php
        use Illuminate\Support\Facades\Storage;

        $settings = \App\Models\Setting::first();
    @endphp

    <!-- Dynamic Logo -->
    @if($settings?->logo)

        <img
            src="{{ Storage::url($settings->logo) }}"
            alt="{{ $settings->site_name }}"
            class="object-contain w-12 h-12"
        >

    @else

        <!-- Fallback -->
        <div class="flex items-center justify-center w-12 h-12 text-lg font-extrabold text-white rounded-full bg-gradient-to-br from-yellow-400 to-yellow-500">

            CF

        </div>

    @endif

    <!-- Site Name -->
    <div class="hidden md:block">

        <div class="text-lg font-bold text-white">

            {{ $settings?->site_name ?? 'Christ Frontiers' }}

        </div>

        <div class="text-xs font-medium tracking-wider text-yellow-300">

            Mission International

        </div>

    </div>

</a>
            <!-- Desktop Menu -->
            <div class="items-center hidden space-x-1 md:flex">

                <!-- Home -->
                <a href="/"
                   wire:navigate
                   class="relative px-4 py-2 font-medium text-white transition-all duration-300 rounded-lg hover:bg-white/10 group">

                    <span class="{{ request()->is('/') ? 'text-yellow-300 font-semibold' : '' }}">

                        Home

                    </span>

                    <div class="absolute bottom-0 left-4 right-4 h-0.5 bg-yellow-400 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ request()->is('/') ? 'scale-x-100' : '' }}"></div>

                </a>

                <!-- Events -->
                <a href="{{ route('events') }}"
                   wire:navigate
                   class="relative px-4 py-2 font-medium text-white transition-all duration-300 rounded-lg hover:bg-white/10 group">

                    <span class="{{ request()->routeIs('events') ? 'text-yellow-300 font-semibold' : '' }}">

                        Events

                    </span>

                    <div class="absolute bottom-0 left-4 right-4 h-0.5 bg-yellow-400 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ request()->routeIs('events') ? 'scale-x-100' : '' }}"></div>

                </a>

                <!-- About -->
                <a href="/about"
                   wire:navigate
                   class="relative px-4 py-2 font-medium text-white transition-all duration-300 rounded-lg hover:bg-white/10 group">

                    <span class="{{ request()->is('about') ? 'text-yellow-300 font-semibold' : '' }}">

                        About Us

                    </span>

                    <div class="absolute bottom-0 left-4 right-4 h-0.5 bg-yellow-400 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ request()->is('about') ? 'scale-x-100' : '' }}"></div>

                </a>

                <!-- Contact -->
                <a href="/contact"
                   wire:navigate
                   class="relative px-4 py-2 font-medium text-white transition-all duration-300 rounded-lg hover:bg-white/10 group">

                    <span class="{{ request()->is('contact') ? 'text-yellow-300 font-semibold' : '' }}">

                        Contact

                    </span>

                    <div class="absolute bottom-0 left-4 right-4 h-0.5 bg-yellow-400 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ request()->is('contact') ? 'scale-x-100' : '' }}"></div>

                </a>

            </div>

            <!-- Mobile Button -->
            <button
                @click="open = !open"
                class="flex items-center justify-center w-10 h-10 text-white rounded-lg md:hidden hover:bg-white/10">

                <svg
                    x-show="!open"
                    class="w-6 h-6"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"
                    />

                </svg>

                <svg
                    x-show="open"
                    class="w-6 h-6"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"
                    />

                </svg>

            </button>

        </div>

        <!-- Mobile Menu -->
        <div
            x-show="open"
            x-transition
            @click.away="open = false"
            class="shadow-xl md:hidden bg-gradient-to-b from-violet-800 to-violet-900">

            <ul class="py-2 space-y-1">

                <!-- Home -->
                <li>

                    <a href="/"
                       wire:navigate
                       class="flex items-center px-4 py-3 text-white hover:bg-white/10">

                        Home

                    </a>

                </li>

                <!-- Events -->
                <li>

                    <a href="{{ route('events') }}"
                       wire:navigate
                       class="flex items-center px-4 py-3 text-white hover:bg-white/10">

                        Events

                    </a>

                </li>

                <!-- About -->
                <li>

                    <a href="/about"
                       wire:navigate
                       class="flex items-center px-4 py-3 text-white hover:bg-white/10">

                        About Us

                    </a>

                </li>

                <!-- Contact -->
                <li>

                    <a href="/contact"
                       wire:navigate
                       class="flex items-center px-4 py-3 text-white hover:bg-white/10">

                        Contact Us

                    </a>

                </li>

            </ul>

        </div>

    </nav>

    <!-- Page Offset -->
    <div class="pt-16"></div>

</div>