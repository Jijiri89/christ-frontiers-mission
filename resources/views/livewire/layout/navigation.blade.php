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

                    <div class="flex items-center justify-center bg-yellow-400 rounded-full shadow-lg w-11 h-11">

                        <x-application-logo class="fill-current w-7 h-7 text-violet-900" />

                    </div>

                    <div class="hidden sm:block">

                        <h1 class="text-lg font-extrabold tracking-tight text-white">
                            Christ Frontiers
                        </h1>

                        <p class="text-xs font-semibold tracking-[0.2em] uppercase text-yellow-300">
                            Mission International
                        </p>

                    </div>

                </a>

                <!-- Desktop Links -->
                <div class="items-center hidden space-x-2 sm:flex ms-10">

                    <x-nav-link
                        :href="route('dashboard')"
                        :active="request()->routeIs('dashboard')"
                        wire:navigate
                        class="text-white hover:text-yellow-300"
                    >

                        Dashboard

                    </x-nav-link>

                    <x-nav-link
                        :href="route('dashboard.homepage-sections')"
                        :active="request()->routeIs('dashboard.homepage-sections*')"
                        wire:navigate
                        class="text-white hover:text-yellow-300"
                    >

                        Homepage Sections

                    </x-nav-link>

                </div>

            </div>

            <!-- Right -->
            <div class="items-center hidden sm:flex">

                <x-dropdown align="right" width="56">

                    <x-slot name="trigger">

                        <button
                            class="inline-flex items-center px-4 py-2 space-x-3 text-sm font-medium text-white transition border rounded-xl bg-white/10 border-white/10 hover:bg-white/20 focus:outline-none"
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
                    class="inline-flex items-center justify-center p-2 text-white transition rounded-lg hover:bg-white/10"
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
        class="hidden border-t sm:hidden border-violet-800/30 bg-violet-950"
    >

        <div class="px-4 py-4 space-y-2">

            <x-responsive-nav-link
                :href="route('dashboard')"
                :active="request()->routeIs('dashboard')"
                wire:navigate
            >

                Dashboard

            </x-responsive-nav-link>

            <x-responsive-nav-link
                :href="route('dashboard.homepage-sections')"
                :active="request()->routeIs('dashboard.homepage-sections*')"
                wire:navigate
            >

                Homepage Sections

            </x-responsive-nav-link>

        </div>

        <!-- Mobile User -->
        <div class="px-4 py-4 border-t border-violet-800/30">

            <div class="mb-4">

                <div
                    class="text-base font-semibold text-white"
                    x-data="{{ json_encode(['name' => auth()->user()->name]) }}"
                    x-text="name"
                ></div>

                <div class="text-sm text-violet-300">

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