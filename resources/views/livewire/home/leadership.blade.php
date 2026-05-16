@php
    use Illuminate\Support\Facades\Storage;
@endphp

@if($leadership)

<section class="relative py-24 overflow-hidden bg-gradient-to-b from-white to-violet-50">

    <!-- Background Effects -->
    <div class="absolute inset-0 pointer-events-none">

        <div class="absolute top-0 left-0 rounded-full w-72 h-72 bg-violet-200/30 blur-3xl"></div>

        <div class="absolute bottom-0 right-0 rounded-full w-96 h-96 bg-yellow-100/40 blur-3xl"></div>

    </div>

    <div class="relative px-4 mx-auto max-w-7xl">

        <!-- Section Header -->
        <div class="max-w-3xl mx-auto text-center">

            @if($leadership->subtitle)

                <div class="inline-flex items-center px-4 py-2 mb-6 rounded-full bg-violet-100">

                    <div class="w-2 h-2 mr-3 rounded-full bg-violet-700"></div>

                    <p class="text-sm font-bold tracking-[0.25em] uppercase text-violet-700">

                        {{ $leadership->subtitle }}

                    </p>

                </div>

            @endif

            <!-- Title -->
            <h2 class="text-4xl font-extrabold leading-tight text-gray-900 md:text-5xl">

                {{ $leadership->title }}

            </h2>

            <!-- Content -->
            <p class="mt-6 text-lg leading-relaxed text-gray-600">

                {{ $leadership->content }}

            </p>

        </div>

       <!-- Ministry Groups -->
<div class="mt-20 space-y-24">

    @foreach([
        'National Presbytery',
        'Women Ministry',
        'Children Ministry',
        'Youth Ministry',
    ] as $ministry)

        @php
            $groupedLeaders = $leaders->where('ministry', $ministry);
        @endphp

        @if($groupedLeaders->count())

            <!-- Ministry Header -->
            <div>

                <div class="flex items-center mb-10">

                    <div class="h-1 mr-4 rounded-full w-14 bg-gradient-to-r from-yellow-400 to-yellow-500"></div>

                    <h3 class="text-3xl font-extrabold text-violet-900 md:text-4xl">

                        {{ $ministry }}

                    </h3>

                </div>

                <!-- Leaders Grid -->
                <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-3">

                    @foreach($groupedLeaders as $leader)

                        <div class="overflow-hidden transition-all duration-500 bg-white border border-gray-100 shadow-xl group rounded-3xl hover:-translate-y-2 hover:shadow-2xl">

                            <!-- Leader Image -->
                            <div class="relative overflow-hidden">

                                @if($leader->image)

                                    <img
                                        src="{{ Storage::url($leader->image) }}"
                                        alt="{{ $leader->name }}"
                                        class="object-cover object-top w-full h-[500px] transition duration-700 group-hover:scale-105"
                                    >

                                @else

                                    <div class="flex items-center justify-center h-[500px] bg-gradient-to-br from-violet-200 to-violet-100">

                                        <svg
                                            class="w-24 h-24 text-violet-400"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24">

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z"
                                            />

                                        </svg>

                                    </div>

                                @endif

                                <!-- Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/5 to-transparent"></div>

                                <!-- Position Badge -->
                                <div class="absolute bottom-5 left-5">

                                    <span class="inline-flex items-center px-5 py-2 text-sm font-bold tracking-wide text-white rounded-full shadow-lg bg-violet-700/95 backdrop-blur-sm">

                                        {{ $leader->position }}

                                    </span>

                                </div>

                            </div>

                            <!-- Content -->
                            <div class="flex flex-col p-8 min-h-[220px]">

                                <h3 class="text-3xl font-extrabold tracking-tight text-gray-900">

                                    {{ $leader->name }}

                                </h3>

                                @if($leader->bio)

                                    <p class="mt-5 text-base leading-relaxed text-gray-600 line-clamp-4">

                                        {{ $leader->bio }}

                                    </p>

                                @endif

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        @endif

    @endforeach

</div>

        </div>

        <!-- CTA -->
        @if($leadership->button_text)

            <div class="mt-20 text-center">

                <a href="{{ $leadership->button_link }}"
                   wire:navigate
                   class="inline-flex items-center px-8 py-4 font-bold text-white transition-all duration-300 rounded-full shadow-xl bg-violet-700 hover:bg-violet-800 hover:scale-105 active:scale-95">

                    {{ $leadership->button_text }}

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

</section>

@endif