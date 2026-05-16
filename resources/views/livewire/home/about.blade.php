@php
    use Illuminate\Support\Facades\Storage;
@endphp

<div>
    @if($about)

<section class="relative py-24 overflow-hidden bg-gradient-to-b from-gray-50 to-white">

    <!-- Background Decoration -->
    <div class="absolute inset-0 pointer-events-none">

        <div class="absolute top-0 right-0 rounded-full w-72 h-72 bg-violet-200/30 blur-3xl"></div>

        <div class="absolute bottom-0 left-0 rounded-full w-96 h-96 bg-yellow-100/40 blur-3xl"></div>

    </div>

    <div class="relative px-4 mx-auto max-w-7xl">

        <div class="grid items-center gap-16 lg:grid-cols-2">

            <!-- Image -->
            <div class="relative">

                <div class="absolute w-32 h-32 border-4 border-yellow-400 -top-6 -left-6 rounded-3xl"></div>

                @if($about->image)

                    <img
                        src="{{ Storage::url($about->image) }}"
                        alt="{{ $about->title }}"
                        class="relative object-cover w-full shadow-2xl rounded-3xl"
                    >

                @endif

                <div class="absolute inset-0 ring-1 ring-black/10 rounded-3xl"></div>

            </div>

            <!-- Content -->
            <div>

                <!-- Subtitle -->
                @if($about->subtitle)

                    <div class="inline-flex items-center px-4 py-2 mb-6 rounded-full bg-violet-100">

                        <div class="w-2 h-2 mr-3 rounded-full bg-violet-700"></div>

                        <p class="text-sm font-bold tracking-[0.25em] uppercase text-violet-700">

                            {{ $about->subtitle }}

                        </p>

                    </div>

                @endif

                <!-- Title -->
                <h2 class="text-4xl font-bold leading-tight text-gray-900 md:text-5xl">

                    {{ $about->title }}

                </h2>

                <!-- Content -->
                <div class="mt-8 space-y-6 text-lg leading-relaxed text-gray-600">

                    {!! nl2br(e($about->content)) !!}

                </div>

                <!-- CTA -->
                @if($about->button_text)

                    <div class="mt-10">

                        <a href="{{ $about->button_link }}"
                           wire:navigate
                           class="inline-flex items-center px-8 py-4 font-bold text-white transition-all duration-300 rounded-full shadow-xl bg-violet-700 hover:bg-violet-800 hover:scale-105 active:scale-95">

                            {{ $about->button_text }}

                            <svg
                                class="w-5 h-5 ml-3"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 5l7 7-7 7"
                                />

                            </svg>

                        </a>

                    </div>

                @endif

            </div>

        </div>

    </div>

</section>

@endif
</div>