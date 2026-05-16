@php
    use Illuminate\Support\Facades\Storage;
@endphp

<x-app-layout>
@auth

    @if(auth()->user()->is_admin)
    <x-slot name="header">

        <div class="relative overflow-hidden shadow-2xl rounded-3xl bg-gradient-to-r from-violet-700 via-violet-800 to-violet-900">

            <div class="absolute inset-0">

                <div class="absolute top-0 left-0 rounded-full w-72 h-72 bg-yellow-400/20 blur-3xl"></div>

                <div class="absolute bottom-0 right-0 rounded-full w-96 h-96 bg-violet-300/20 blur-3xl"></div>

            </div>

            <div class="relative px-8 py-12 lg:px-12">

                <div class="max-w-4xl">

                    <h2 class="text-4xl font-extrabold tracking-tight text-white lg:text-5xl">

                        Dashboard

                    </h2>

                    <p class="mt-4 text-lg leading-relaxed text-violet-100">

                        Christ Frontiers Mission International Admin Panel

                    </p>

                    <div class="w-24 h-1 mt-6 bg-yellow-400 rounded-full"></div>

                </div>

            </div>

        </div>

    </x-slot>

    <div class="py-8">

        <div class="px-4 mx-auto space-y-10 max-w-7xl sm:px-6 lg:px-8">

            <!-- Stats -->
            <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">

                <!-- Homepage Sections -->
                <div class="p-8 text-white shadow-2xl rounded-3xl bg-gradient-to-r from-violet-700 to-violet-900">

                    <p class="text-sm font-bold uppercase text-violet-200">

                        Homepage Sections

                    </p>

                    <h3 class="mt-6 text-6xl font-extrabold">

                        {{ \App\Models\HomepageSection::count() }}

                    </h3>

                </div>

                <!-- Leaders -->
                <div class="p-8 shadow-2xl rounded-3xl bg-gradient-to-r from-yellow-400 to-yellow-500">

                    <p class="text-sm font-bold text-yellow-100 uppercase">

                        Leaders

                    </p>

                    <h3 class="mt-6 text-6xl font-extrabold text-violet-950">

                        {{ \App\Models\Leader::count() }}

                    </h3>

                </div>

                <!-- Active Leaders -->
                <div class="p-8 text-white shadow-2xl rounded-3xl bg-gradient-to-r from-green-600 to-green-700">

                    <p class="text-sm font-bold text-green-100 uppercase">

                        Active Leaders

                    </p>

                    <h3 class="mt-6 text-6xl font-extrabold">

                        {{ \App\Models\Leader::where('is_active', true)->count() }}

                    </h3>

                </div>

                <!-- Events -->
                <div class="p-8 text-white shadow-2xl rounded-3xl bg-gradient-to-r from-sky-600 to-sky-700">

                    <p class="text-sm font-bold uppercase text-sky-100">

                        Events

                    </p>

                    <h3 class="mt-6 text-6xl font-extrabold">

                        {{ \App\Models\Event::count() }}

                    </h3>

                </div>

            </div>

            <!-- Quick Actions -->
            <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-4">

                <!-- Homepage Management -->
                <div class="p-10 bg-white shadow-xl rounded-3xl">

                    <h3 class="text-3xl font-extrabold text-violet-900">

                        Homepage Management

                    </h3>

                    <p class="mt-4 text-lg text-gray-600">

                        Edit homepage sections, ministry content, and images.

                    </p>

                    <div class="mt-10">

                        <a href="{{ route('dashboard.homepage-sections') }}"
                           wire:navigate
                           class="inline-flex items-center px-6 py-4 font-bold text-white transition rounded-2xl bg-violet-700 hover:bg-violet-800">

                            Manage Homepage

                        </a>

                    </div>

                </div>

                <!-- Leadership Management -->
                <div class="p-10 bg-white shadow-xl rounded-3xl">

                    <h3 class="text-3xl font-extrabold text-violet-900">

                        Leadership Management

                    </h3>

                    <p class="mt-4 text-lg text-gray-600">

                        Add and manage ministry leaders.

                    </p>

                    <div class="flex flex-wrap gap-4 mt-10">

                        <a href="{{ route('dashboard.leaders') }}"
                           wire:navigate
                           class="inline-flex items-center px-6 py-4 font-bold text-white transition rounded-2xl bg-violet-700 hover:bg-violet-800">

                            View Leaders

                        </a>

                        <a href="{{ route('dashboard.leaders.create') }}"
                           wire:navigate
                           class="inline-flex items-center px-6 py-4 font-bold transition bg-yellow-400 rounded-2xl text-violet-950 hover:bg-yellow-500">

                            Add Leader

                        </a>

                    </div>

                </div>

                <!-- Event Management -->
                <div class="p-10 bg-white shadow-xl rounded-3xl">

                    <h3 class="text-3xl font-extrabold text-violet-900">

                        Event Management

                    </h3>

                    <p class="mt-4 text-lg text-gray-600">

                        Create, organize, and manage ministry events, crusades, conferences, and conventions.

                    </p>

                    <div class="flex flex-wrap gap-4 mt-10">

                        <a href="{{ route('dashboard.events') }}"
                           wire:navigate
                           class="inline-flex items-center px-6 py-4 font-bold text-white transition rounded-2xl bg-violet-700 hover:bg-violet-800">

                            View Events

                        </a>

                        <a href="{{ route('dashboard.events.create') }}"
                           wire:navigate
                           class="inline-flex items-center px-6 py-4 font-bold transition bg-yellow-400 rounded-2xl text-violet-950 hover:bg-yellow-500">

                            Add Event

                        </a>

                    </div>

                </div>

                <!-- Settings Management -->
                <div class="p-10 bg-white shadow-xl rounded-3xl">

                    <h3 class="text-3xl font-extrabold text-violet-900">

                        Website Settings

                    </h3>

                    <p class="mt-4 text-lg text-gray-600">

                        Manage logo, church name, contact details, branding, and website identity.

                    </p>

                    <div class="flex flex-wrap gap-4 mt-10">

                        <a href="{{ route('dashboard.settings') }}"
                           wire:navigate
                           class="inline-flex items-center px-6 py-4 font-bold text-white transition rounded-2xl bg-violet-700 hover:bg-violet-800">

                            Open Settings

                        </a>

                    </div>

                </div>

            </div>

            <!-- Recent Leaders -->
            <div class="p-10 bg-white shadow-2xl rounded-3xl">

                <div class="flex items-center justify-between">

                    <div>

                        <h3 class="text-3xl font-extrabold text-violet-900">

                            Recent Leaders

                        </h3>

                        <p class="mt-2 text-lg text-gray-600">

                            Latest ministry profiles.

                        </p>

                    </div>

                </div>

                <div class="grid gap-8 mt-10 md:grid-cols-2 lg:grid-cols-3">

                    @foreach(\App\Models\Leader::latest()->take(3)->get() as $leader)

                        <div class="overflow-hidden border border-gray-100 shadow-lg rounded-3xl">

                            @if($leader->image)

                                <img
                                    src="{{ Storage::url($leader->image) }}"
                                    class="object-cover object-top w-full h-80"
                                >

                            @endif

                            <div class="p-6">

                                <h4 class="text-2xl font-extrabold text-gray-900">

                                    {{ $leader->name }}

                                </h4>

                                <p class="mt-2 font-bold text-violet-700">

                                    {{ $leader->position }}

                                </p>

                                <div class="mt-4">

                                    <span class="inline-flex items-center px-4 py-2 text-sm font-bold rounded-full bg-violet-100 text-violet-700">

                                        {{ $leader->ministry }}

                                    </span>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>


        @else

        <div class="max-w-4xl px-4 py-20 mx-auto text-center">

            <div class="p-10 bg-white shadow-2xl rounded-3xl">

                <h1 class="text-4xl font-extrabold text-red-600">

                    Access Denied

                </h1>

                <p class="mt-4 text-lg text-gray-600">

                    You do not have permission to access this dashboard.

                </p>

            </div>

        </div>

    @endif

@endauth

</x-app-layout>