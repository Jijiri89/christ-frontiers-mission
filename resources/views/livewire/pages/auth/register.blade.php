<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([

            'name' => ['required', 'string', 'max:255'],

            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                'unique:' . User::class
            ],

            'password' => [
                'required',
                'string',
                'confirmed',
                Rules\Password::defaults()
            ],

        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        Auth::login($user);

        $this->redirect(
            route('dashboard', absolute: false),
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
                                d="M18 9v6m-3-3h6M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2h-3.586a1 1 0 01-.707-.293l-1.414-1.414A1 1 0 0012.586 4H11.414a1 1 0 00-.707.293L9.293 5.707A1 1 0 018.586 6H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                            />
                        </svg>

                    </div>

                    <h1 class="text-3xl font-extrabold text-white">

                        Create Account

                    </h1>

                    <p class="mt-3 text-sm text-violet-100">

                        Register to access the ministry dashboard

                    </p>

                </div>

            </div>

            <!-- Form -->
            <div class="p-8">

                <form wire:submit="register" class="space-y-6">

                    <!-- Name -->
                    <div>

                        <x-input-label
                            for="name"
                            :value="__('Full Name')"
                            class="font-bold text-gray-700"
                        />

                        <x-text-input
                            wire:model="name"
                            id="name"
                            type="text"
                            name="name"
                            required
                            autofocus
                            autocomplete="name"
                            class="block w-full px-5 py-4 mt-2 text-lg border-gray-300 rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                        />

                        <x-input-error
                            :messages="$errors->get('name')"
                            class="mt-2"
                        />

                    </div>

                    <!-- Email -->
                    <div>

                        <x-input-label
                            for="email"
                            :value="__('Email Address')"
                            class="font-bold text-gray-700"
                        />

                        <x-text-input
                            wire:model="email"
                            id="email"
                            type="email"
                            name="email"
                            required
                            autocomplete="username"
                            class="block w-full px-5 py-4 mt-2 text-lg border-gray-300 rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                        />

                        <x-input-error
                            :messages="$errors->get('email')"
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
                            wire:model="password"
                            id="password"
                            type="password"
                            name="password"
                            required
                            autocomplete="new-password"
                            class="block w-full px-5 py-4 mt-2 text-lg border-gray-300 rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                        />

                        <x-input-error
                            :messages="$errors->get('password')"
                            class="mt-2"
                        />

                    </div>

                    <!-- Confirm Password -->
                    <div>

                        <x-input-label
                            for="password_confirmation"
                            :value="__('Confirm Password')"
                            class="font-bold text-gray-700"
                        />

                        <x-text-input
                            wire:model="password_confirmation"
                            id="password_confirmation"
                            type="password"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                            class="block w-full px-5 py-4 mt-2 text-lg border-gray-300 rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                        />

                        <x-input-error
                            :messages="$errors->get('password_confirmation')"
                            class="mt-2"
                        />

                    </div>

                    <!-- Footer -->
                    <div class="flex flex-col gap-4 pt-2 sm:flex-row sm:items-center sm:justify-between">

                        <a
                            href="{{ route('login') }}"
                            wire:navigate
                            class="text-sm font-semibold transition text-violet-700 hover:text-violet-900"
                        >

                            Already registered?

                        </a>

                        <button
                            type="submit"
                            class="px-8 py-4 text-lg font-bold text-white transition shadow-lg rounded-2xl bg-gradient-to-r from-violet-700 to-violet-900 hover:from-violet-800 hover:to-violet-950"
                        >

                            Register

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>