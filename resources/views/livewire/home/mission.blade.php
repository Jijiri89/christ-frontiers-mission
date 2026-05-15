@php
    use Illuminate\Support\Facades\Storage;
@endphp

@if($mission)

<section class="relative py-24 overflow-hidden bg-gradient-to-br from-violet-900 via-violet-800 to-violet-950">

    <!-- Background Effects -->
    <div class="absolute inset-0 pointer-events-none">

        <div class="absolute top-0 left-0 rounded-full w-72 h-72 bg-yellow-400/10 blur-3xl"></div>

        <div class="absolute bottom-0 right-0 rounded-full w-96 h-96 bg-violet-300/10 blur-3xl"></div>

        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5"></div>

    </div>

    <div class="relative max-w-6xl px-4 mx-auto">

        <div class="max-w-4xl mx-auto text-center">

            <!-- Subtitle -->
            @if($mission->subtitle)

                <div class="inline-flex items-center px-4 py-2 mb-6 border rounded-full bg-white/10 border-white/10 backdrop-blur-sm">

                    <div class="w-2 h-2 mr-3 bg-yellow-400 rounded-full"></div>

                    <p class="text-sm font-bold tracking-[0.25em] uppercase text-yellow-300">

                        {{ $mission->subtitle }}

                    </p>

                </div>

            @endif

            <!-- Title -->
            <h2 class="text-4xl font-extrabold leading-tight text-white md:text-5xl lg:text-6xl">

                {{ $mission->title }}

            </h2>

            <!-- Content -->
            <p class="mt-8 text-lg leading-relaxed md:text-xl text-violet-100">

                {{ $mission->content }}

            </p>

            <!-- Featured Image -->
            @if($mission->image)

                <div class="mt-12">

                    <img
                        src="{{ Storage::url($mission->image) }}"
                        alt="{{ $mission->title }}"
                        class="object-cover w-full max-w-4xl mx-auto shadow-2xl rounded-3xl"
                    >

                </div>

            @endif

            <!-- Mission Cards -->
            <div class="grid gap-6 mt-16 md:grid-cols-3">

                <!-- Evangelism -->
                <div class="p-8 transition-all duration-300 border bg-white/5 border-white/10 rounded-3xl backdrop-blur-sm hover:bg-white/10 hover:-translate-y-1">

                    <div class="flex items-center justify-center w-16 h-16 mx-auto rounded-2xl bg-yellow-400/20">

                        <svg
                            class="w-8 h-8 text-yellow-300"
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

                    <h3 class="mt-6 text-xl font-bold text-white">

                        Evangelism

                    </h3>

                    <p class="mt-4 text-sm leading-relaxed text-violet-200">

                        Reaching nations and communities with the Gospel of Jesus Christ.

                    </p>

                </div>

                <!-- Discipleship -->
                <div class="p-8 transition-all duration-300 border bg-white/5 border-white/10 rounded-3xl backdrop-blur-sm hover:bg-white/10 hover:-translate-y-1">

                    <div class="flex items-center justify-center w-16 h-16 mx-auto rounded-2xl bg-yellow-400/20">

                        <svg
                            class="w-8 h-8 text-yellow-300"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2z"
                            />

                        </svg>

                    </div>

                    <h3 class="mt-6 text-xl font-bold text-white">

                        Discipleship

                    </h3>

                    <p class="mt-4 text-sm leading-relaxed text-violet-200">

                        Teaching believers sound biblical doctrine and spiritual growth.

                    </p>

                </div>

                <!-- Community Impact -->
                <div class="p-8 transition-all duration-300 border bg-white/5 border-white/10 rounded-3xl backdrop-blur-sm hover:bg-white/10 hover:-translate-y-1">

                    <div class="flex items-center justify-center w-16 h-16 mx-auto rounded-2xl bg-yellow-400/20">

                        <svg
                            class="w-8 h-8 text-yellow-300"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M17 20h5V4H2v16h5m10 0v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6m10 0H7"
                            />

                        </svg>

                    </div>

                    <h3 class="mt-6 text-xl font-bold text-white">

                        Community Impact

                    </h3>

                    <p class="mt-4 text-sm leading-relaxed text-violet-200">

                        Transforming lives through prayer, compassion, and ministry outreach.

                    </p>

                </div>

            </div>

            <!-- CTA -->
            @if($mission->button_text)

                <div class="mt-14">

                    <a href="{{ $mission->button_link }}"
                       wire:navigate
                       class="inline-flex items-center px-8 py-4 font-bold transition-all duration-300 bg-yellow-400 rounded-full shadow-2xl text-violet-900 hover:bg-yellow-500 hover:scale-105 active:scale-95">

                        {{ $mission->button_text }}

                    </a>

                </div>

            @endif

        </div>

    </div>

</section>

@endif