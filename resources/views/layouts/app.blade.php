<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'Christ Frontiers Mission International') }}
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap"
        rel="stylesheet"
    />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="font-sans antialiased text-gray-900 bg-gradient-to-br from-violet-50 via-white to-yellow-50">

    <div class="min-h-screen">

        <!-- Navigation -->
        <livewire:layout.navigation />

        <!-- Page Heading -->
        @if (isset($header))

            <header class="relative overflow-hidden shadow-xl bg-gradient-to-r from-violet-700 via-violet-800 to-violet-900">

                <!-- Background Glow -->
                <div class="absolute inset-0 pointer-events-none">

                    <div class="absolute top-0 right-0 rounded-full w-72 h-72 bg-yellow-400/20 blur-3xl"></div>

                    <div class="absolute bottom-0 left-0 rounded-full w-96 h-96 bg-violet-300/10 blur-3xl"></div>

                </div>

                <div class="relative px-4 py-8 mx-auto max-w-7xl sm:px-6 lg:px-8">

                    <div class="flex items-center justify-between">

                        <div>

                            <h1 class="text-3xl font-extrabold tracking-tight text-white">

                                {{ $header }}

                            </h1>

                            <div class="w-20 h-1 mt-3 bg-yellow-400 rounded-full"></div>

                        </div>

                    </div>

                </div>

            </header>

        @endif

        <!-- Main Content -->
        <main class="relative">

            {{ $slot }}

        </main>

        <!-- Footer -->
        <footer class="mt-20 text-white bg-gradient-to-r from-violet-900 to-violet-950">

            <div class="px-4 py-8 mx-auto max-w-7xl">

                <div class="flex flex-col items-center justify-between gap-4 md:flex-row">

                    <div>

                        <h2 class="text-xl font-bold text-yellow-400">
                            Christ Frontiers Mission International
                        </h2>

                        <p class="mt-1 text-sm text-violet-200">
                            Evangelizing the Nations Through Christ
                        </p>

                    </div>

                    <div class="text-sm text-violet-300">

                        © {{ date('Y') }} All Rights Reserved.

                    </div>

                </div>

            </div>

        </footer>

    </div>

    @livewireScripts

</body>
</html>