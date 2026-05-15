@php
    use Illuminate\Support\Facades\Storage;
@endphp

@if($partnership)

<section class="relative py-24 overflow-hidden bg-gradient-to-r from-yellow-100 via-yellow-100 to-yellow-500">

    <!-- Background Glow -->
    <div class="absolute inset-0 pointer-events-none">

        <div class="absolute top-0 right-0 rounded-full w-96 h-96 bg-violet-700/10 blur-3xl"></div>

        <div class="absolute bottom-0 left-0 rounded-full w-72 h-72 bg-white/20 blur-3xl"></div>

    </div>

    <div class="relative max-w-6xl px-4 mx-auto">

        <div class="max-w-4xl mx-auto text-center">

            <!-- Subtitle -->
            @if($partnership->subtitle)

                <div class="inline-flex items-center px-4 py-2 mb-6 border rounded-full bg-violet-900/10 border-violet-900/10">

                    <div class="w-2 h-2 mr-3 rounded-full bg-violet-900"></div>

                    <p class="text-sm font-bold tracking-[0.25em] uppercase text-violet-900">

                        {{ $partnership->subtitle }}

                    </p>

                </div>

            @endif

            <!-- Title -->
            <h2 class="text-4xl font-extrabold leading-tight md:text-5xl lg:text-6xl text-violet-950">

                {{ $partnership->title }}

            </h2>

            <!-- Content -->
            <p class="mt-8 text-lg leading-relaxed md:text-xl text-violet-900/80">

                {{ $partnership->content }}

            </p>

            <!-- Featured Image -->
            @if($partnership->image)

                <div class="mt-12">

                    <img
                        src="{{ Storage::url($partnership->image) }}"
                        alt="{{ $partnership->title }}"
                        class="object-cover w-full max-w-4xl mx-auto shadow-2xl rounded-3xl"
                    >

                </div>

            @endif

            <!-- CTA -->
            @if($partnership->button_text)

                <div class="mt-12">

                    <a href="{{ $partnership->button_link }}"
                       wire:navigate
                       class="inline-flex items-center px-8 py-4 font-bold text-white transition-all duration-300 rounded-full shadow-2xl bg-violet-900 hover:bg-violet-950 hover:scale-105 active:scale-95">

                        {{ $partnership->button_text }}

                    </a>

                </div>

            @endif

            <!-- Support Cards -->
            <div class="grid gap-6 mt-16 md:grid-cols-3">

                <!-- Pray -->
                <div class="p-8 shadow-lg bg-white/40 backdrop-blur-sm rounded-3xl">

                    <div class="flex items-center justify-center w-16 h-16 mx-auto rounded-2xl bg-violet-900/10">

                        <svg
                            class="w-8 h-8 text-violet-900"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8c-1.657 0-3 1.343-3 3v7h6v-7c0-1.657-1.343-3-3-3z"
                            />

                        </svg>

                    </div>

                    <h3 class="mt-6 text-xl font-bold text-violet-950">

                        Pray

                    </h3>

                    <p class="mt-4 text-sm leading-relaxed text-violet-900/80">

                        Stand with us in prayer for souls, missions, and ministry impact.

                    </p>

                </div>

                <!-- Give -->
                <div class="p-8 shadow-lg bg-white/40 backdrop-blur-sm rounded-3xl">

                    <div class="flex items-center justify-center w-16 h-16 mx-auto rounded-2xl bg-violet-900/10">

                        <svg
                            class="w-8 h-8 text-violet-900"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8c-1.657 0-3 1.343-3 3v7h6v-7c0-1.657-1.343-3-3-3z"
                            />

                        </svg>

                    </div>

                    <h3 class="mt-6 text-xl font-bold text-violet-950">

                        Give

                    </h3>

                    <p class="mt-4 text-sm leading-relaxed text-violet-900/80">

                        Support outreach, missions, church planting, and humanitarian work.

                    </p>

                </div>

                <!-- Go -->
                <div class="p-8 shadow-lg bg-white/40 backdrop-blur-sm rounded-3xl">

                    <div class="flex items-center justify-center w-16 h-16 mx-auto rounded-2xl bg-violet-900/10">

                        <svg
                            class="w-8 h-8 text-violet-900"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8c-1.657 0-3 1.343-3 3v7h6v-7c0-1.657-1.343-3-3-3z"
                            />

                        </svg>

                    </div>

                    <h3 class="mt-6 text-xl font-bold text-violet-950">

                        Go

                    </h3>

                    <p class="mt-4 text-sm leading-relaxed text-violet-900/80">

                        Join evangelism, missions, and outreach programs locally and globally.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

@endif