<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(
            default: route('dashboard', absolute: false),
            navigate: true
        );
    }
}; ?>

<div class="flex items-center justify-center min-h-screen px-4 py-10 bg-gradient-to-br from-violet-900 via-violet-800 to-violet-950">

    <div class="w-full max-w-md">

        <!-- Card -->
        <div class="overflow-hidden bg-white shadow-2xl rounded-3xl">

            <!-- Header -->
            <div class="relative px-8 py-10 overflow-hidden text-center bg-gradient-to-r from-violet-700 to-violet-900">

                <div class="absolute top-0 left-0 rounded-full w-44 h-44 bg-yellow-400/20 blur-3xl"></div>

                <div class="relative">

                    <div class="flex items-center justify-center w-20 h-20 mx-auto mb-5 rounded-full shadow-xl bg-gradient-to-br from-yellow-400 to-yellow-500">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 text-violet-950"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z"
                            />
                        </svg>

                    </div>

                    <h1 class="text-3xl font-extrabold text-white">

                        Welcome Back

                    </h1>

                    <p class="mt-3 text-sm text-violet-100">

                        Sign in to access the admin dashboard

                    </p>

                </div>

            </div>

            <!-- Form -->
            <div class="p-8">

                <!-- Session Status -->
                <x-auth-session-status
                    class="mb-6"
                    :status="session('status')"
                />

                <form wire:submit="login" class="space-y-6">

                    <!-- Email -->
                    <div>

                        <x-input-label
                            for="email"
                            :value="__('Email Address')"
                            class="font-bold text-gray-700"
                        />

                        <x-text-input
                            wire:model="form.email"
                            id="email"
                            type="email"
                            name="email"
                            required
                            autofocus
                            autocomplete="username"
                            class="block w-full px-5 py-4 mt-2 text-lg border-gray-300 rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                        />

                        <x-input-error
                            :messages="$errors->get('form.email')"
                            class="mt-2"
                        />

                    </div>

                    <!-- Password -->
                    <div>

                        <x-input-label
                            for="password"
                            :value="__('Password')"
                            class="font-bold text-gray-700"
                        />

                        <x-text-input
                            wire:model="form.password"
                            id="password"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            class="block w-full px-5 py-4 mt-2 text-lg border-gray-300 rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                        />

                        <x-input-error
                            :messages="$errors->get('form.password')"
                            class="mt-2"
                        />

                    </div>

                    <!-- Remember -->
                    <div class="flex items-center justify-between">

                        <label
                            for="remember"
                            class="inline-flex items-center"
                        >

                            <input
                                wire:model="form.remember"
                                id="remember"
                                type="checkbox"
                                name="remember"
                                class="border-gray-300 rounded text-violet-700 focus:ring-violet-500"
                            >

                            <span class="ml-3 text-sm font-medium text-gray-700">

                                Remember me

                            </span>

                        </label>

                        @if (Route::has('password.request'))

                            <a
                                href="{{ route('password.request') }}"
                                wire:navigate
                                class="text-sm font-semibold transition text-violet-700 hover:text-violet-900"
                            >

                                Forgot Password?

                            </a>

                        @endif

                    </div>

                    <!-- Button -->
                    <div>

                        <button
                            type="submit"
                            class="w-full px-6 py-4 text-lg font-bold text-white transition shadow-lg rounded-2xl bg-gradient-to-r from-violet-700 to-violet-900 hover:from-violet-800 hover:to-violet-950"
                        >

                            Log In

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>