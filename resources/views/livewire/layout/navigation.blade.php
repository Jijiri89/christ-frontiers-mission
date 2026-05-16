<div>

<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav
    x-data="{ open: false }"
    class="sticky top-0 z-50 border-b shadow-xl border-violet-800/30 bg-gradient-to-r from-violet-800 via-violet-900 to-violet-950"
>

    <!-- Main Navigation -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

        <div class="flex items-center justify-between h-16">

            <!-- Left -->
            <div class="flex items-center">

                <!-- Logo -->
                <a
                    href="{{ route('dashboard') }}"
                    wire:navigate
                    class="flex items-center space-x-3"
                >

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
                        <div class="flex items-center justify-center bg-yellow-400 rounded-full shadow-lg w-11 h-11">

                            <span class="text-lg font-extrabold text-violet-900">

                                CF

                            </span>

                        </div>

                    @endif

                    <!-- Site Name -->
                    <div class="hidden sm:block">

                        <h1 class="text-lg font-extrabold tracking-tight text-white">

                            {{ $settings?->site_name ?? 'Christ Frontiers' }}

                        </h1>

                        <p class="text-xs font-semibold tracking-[0.2em] uppercase text-yellow-300">

                            Mission International

                        </p>

                    </div>

                </a>

                @auth

                    @if(auth()->user()->is_admin)

                        <!-- Desktop Links -->
                        <div class="items-center hidden space-x-2 sm:flex ms-10">

                            <!-- Dashboard -->
                            <x-nav-link
                                :href="route('dashboard')"
                                :active="request()->routeIs('dashboard')"
                                wire:navigate
                                class="text-white hover:text-yellow-300"
                            >

                                Dashboard

                            </x-nav-link>

                            <!-- Users -->
                            <x-nav-link
                                :href="route('dashboard.users')"
                                :active="request()->routeIs('dashboard.users*')"
                                wire:navigate
                                class="text-white hover:text-yellow-300"
                            >

                                Users

                            </x-nav-link>

                            <!-- Homepage -->
                            <x-nav-link
                                :href="route('dashboard.homepage-sections')"
                                :active="request()->routeIs('dashboard.homepage-sections*')"
                                wire:navigate
                                class="text-white hover:text-yellow-300"
                            >

                                Homepage

                            </x-nav-link>

                            <!-- Leadership -->
                            <x-nav-link
                                :href="route('dashboard.leaders')"
                                :active="request()->routeIs('dashboard.leaders*')"
                                wire:navigate
                                class="text-white hover:text-yellow-300"
                            >

                                Leadership

                            </x-nav-link>

                            <!-- Events -->
                            <x-nav-link
                                :href="route('dashboard.events')"
                                :active="request()->routeIs('dashboard.events*')"
                                wire:navigate
                                class="text-white hover:text-yellow-300"
                            >

                                Events

                            </x-nav-link>

                            <!-- Settings -->
                            <x-nav-link
                                :href="route('dashboard.settings')"
                                :active="request()->routeIs('dashboard.settings*')"
                                wire:navigate
                                class="text-white hover:text-yellow-300"
                            >

                                Settings

                            </x-nav-link>

                        </div>

                    @endif

                @endauth

            </div>

            <!-- Right -->
            <div class="items-center hidden sm:flex">

                <x-dropdown align="right" width="56">

                    <x-slot name="trigger">

                        <button
                            class="inline-flex items-center px-4 py-2 space-x-3 text-sm font-medium text-white transition border rounded-2xl bg-white/10 border-white/10 hover:bg-white/20 focus:outline-none"
                        >

                            <div
                                x-data="{{ json_encode(['name' => auth()->user()->name]) }}"
                                x-text="name"
                                x-on:profile-updated.window="name = $event.detail.name"
                            ></div>

                            <svg
                                class="w-4 h-4 text-yellow-300"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                />
                            </svg>

                        </button>

                    </x-slot>

                    <x-slot name="content">

                        <div class="px-4 py-3 border-b border-gray-100">

                            <p class="text-sm font-semibold text-gray-900">

                                {{ auth()->user()->name }}

                            </p>

                            <p class="mt-1 text-xs text-gray-500">

                                {{ auth()->user()->email }}

                            </p>

                        </div>

                        <x-dropdown-link
                            :href="route('profile')"
                            wire:navigate
                        >

                            Profile

                        </x-dropdown-link>

                        <button
                            wire:click="logout"
                            class="w-full text-start"
                        >

                            <x-dropdown-link>

                                Log Out

                            </x-dropdown-link>

                        </button>

                    </x-slot>

                </x-dropdown>

            </div>

            <!-- Mobile Button -->
            <div class="flex sm:hidden">

                <button
                    @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 text-white transition rounded-xl hover:bg-white/10"
                >

                    <svg
                        class="w-6 h-6"
                        stroke="currentColor"
                        fill="none"
                        viewBox="0 0 24 24"
                    >

                        <path
                            :class="{'hidden': open, 'inline-flex': ! open }"
                            class="inline-flex"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />

                        <path
                            :class="{'hidden': ! open, 'inline-flex': open }"
                            class="hidden"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />

                    </svg>

                </button>

            </div>

        </div>

    </div>

    <!-- Mobile Menu -->
    <div
        :class="{'block': open, 'hidden': ! open}"
        class="hidden border-t shadow-2xl sm:hidden border-violet-800/30 bg-gradient-to-b from-violet-900 to-violet-950"
    >

        @auth

            @if(auth()->user()->is_admin)

                <!-- Mobile Links -->
                <div class="px-4 py-5 space-y-1">

                    <!-- Dashboard -->
                    <x-responsive-nav-link
                        :href="route('dashboard')"
                        :active="request()->routeIs('dashboard')"
                        wire:navigate
                    >

                        Dashboard

                    </x-responsive-nav-link>

                    <!-- Users -->
                    <x-responsive-nav-link
                        :href="route('dashboard.users')"
                        :active="request()->routeIs('dashboard.users*')"
                        wire:navigate
                    >

                        Users

                    </x-responsive-nav-link>

                    <!-- Homepage -->
                    <x-responsive-nav-link
                        :href="route('dashboard.homepage-sections')"
                        :active="request()->routeIs('dashboard.homepage-sections*')"
                        wire:navigate
                    >

                        Homepage

                    </x-responsive-nav-link>

                    <!-- Leadership -->
                    <x-responsive-nav-link
                        :href="route('dashboard.leaders')"
                        :active="request()->routeIs('dashboard.leaders*')"
                        wire:navigate
                    >

                        Leadership

                    </x-responsive-nav-link>

                    <!-- Events -->
                    <x-responsive-nav-link
                        :href="route('dashboard.events')"
                        :active="request()->routeIs('dashboard.events*')"
                        wire:navigate
                    >

                        Events

                    </x-responsive-nav-link>

                    <!-- Settings -->
                    <x-responsive-nav-link
                        :href="route('dashboard.settings')"
                        :active="request()->routeIs('dashboard.settings*')"
                        wire:navigate
                    >

                        Settings

                    </x-responsive-nav-link>

                </div>

            @endif

        @endauth

        <!-- Mobile User -->
        <div class="px-4 py-6 mt-4 border-t border-violet-700/40 bg-white/5">

            <div class="mb-5">

                <div
                    class="text-base font-bold tracking-wide text-white"
                    x-data="{{ json_encode(['name' => auth()->user()->name]) }}"
                    x-text="name"
                ></div>

                <div class="mt-1 text-sm text-violet-300">

                    {{ auth()->user()->email }}

                </div>

            </div>

            <div class="space-y-2">

                <x-responsive-nav-link
                    :href="route('profile')"
                    wire:navigate
                >

                    Profile

                </x-responsive-nav-link>

                <button
                    wire:click="logout"
                    class="w-full text-start"
                >

                    <x-responsive-nav-link>

                        Log Out

                    </x-responsive-nav-link>

                </button>

            </div>

        </div>

    </div>

</nav>

</div>