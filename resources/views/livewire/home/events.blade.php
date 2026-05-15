@php
    use Illuminate\Support\Facades\Storage;
@endphp

<div>

    <!-- Hero -->
    <section class="relative overflow-hidden bg-gradient-to-r from-violet-700 via-violet-800 to-violet-900">

        <!-- Background -->
        <div class="absolute inset-0">

            <div class="absolute top-0 left-0 rounded-full w-72 h-72 bg-yellow-400/20 blur-3xl"></div>

            <div class="absolute bottom-0 right-0 rounded-full w-96 h-96 bg-violet-300/20 blur-3xl"></div>

        </div>

        <div class="relative px-4 py-24 mx-auto text-center max-w-7xl">

            <div class="inline-flex items-center px-4 py-2 mb-6 border rounded-full bg-white/10 border-white/20 backdrop-blur-sm">

                <div class="w-2 h-2 mr-3 bg-yellow-400 rounded-full"></div>

                <p class="text-sm font-semibold tracking-[0.25em] uppercase text-yellow-300">

                    Ministry Events

                </p>

            </div>

            <h1 class="text-5xl font-extrabold leading-tight text-white md:text-6xl">

                Upcoming Events

            </h1>

            <p class="max-w-3xl mx-auto mt-8 text-xl leading-relaxed text-violet-100">

                Join conferences, crusades, conventions, revival meetings,
                leadership summits, and ministry programs.

            </p>

        </div>

    </section>

    <!-- Events -->
    <section class="relative py-24 overflow-hidden bg-gradient-to-b from-gray-50 to-white">

        <!-- Background -->
        <div class="absolute inset-0 pointer-events-none">

            <div class="absolute top-0 right-0 rounded-full w-72 h-72 bg-violet-200/20 blur-3xl"></div>

            <div class="absolute bottom-0 left-0 rounded-full w-96 h-96 bg-yellow-100/30 blur-3xl"></div>

        </div>

        <div class="relative px-4 mx-auto max-w-7xl">

            <!-- Section Header -->
            <div class="max-w-3xl mx-auto text-center">

                <h2 class="text-4xl font-extrabold text-gray-900 md:text-5xl">

                    Church Programs & Gatherings

                </h2>

                <p class="mt-6 text-lg leading-relaxed text-gray-600">

                    Stay connected with ministry activities and special events.

                </p>

            </div>

            @if($events->count())

                <!-- Events Grid -->
                <div class="grid gap-10 mt-20 md:grid-cols-2 lg:grid-cols-3">

                    @foreach($events as $event)

                        <div class="overflow-hidden transition-all duration-500 bg-white border border-gray-100 shadow-xl group rounded-3xl hover:-translate-y-2 hover:shadow-2xl">

                            <!-- Image -->
                            <div class="relative overflow-hidden">

                                @if($event->image)

                                    <img
                                        src="{{ Storage::url($event->image) }}"
                                        alt="{{ $event->title }}"
                                        class="object-cover w-full transition duration-700 h-72 group-hover:scale-105"
                                    >

                                @else

                                    <div class="flex items-center justify-center h-72 bg-gradient-to-br from-violet-200 to-violet-100">

                                        <svg
                                            class="w-20 h-20 text-violet-400"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24">

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M8 7V3m8 4V3m-9 8h10m-11 9h12a2 2 0 002-2V7a2 2 0 00-2-2H6a2 2 0 00-2 2v11a2 2 0 002 2z"
                                            />

                                        </svg>

                                    </div>

                                @endif

                                <!-- Date Badge -->
                                <div class="absolute top-5 left-5">

                                    <div class="px-5 py-3 text-center text-white shadow-xl rounded-2xl bg-violet-700/95 backdrop-blur-sm">

                                        <div class="text-2xl font-extrabold leading-none">

                                            {{ \Carbon\Carbon::parse($event->start_date)->format('d') }}

                                        </div>

                                        <div class="mt-1 text-xs font-bold tracking-widest text-yellow-300 uppercase">

                                            {{ \Carbon\Carbon::parse($event->start_date)->format('M') }}

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- Content -->
                            <div class="flex flex-col p-8 min-h-[320px]">

                                <h3 class="text-3xl font-extrabold leading-tight text-gray-900">

                                    {{ $event->title }}

                                </h3>

                                <!-- Location -->
                                @if($event->location)

                                    <div class="flex items-center mt-5 text-violet-700">

                                        <svg
                                            class="w-5 h-5 mr-2"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24">

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z"
                                            />

                                        </svg>

                                        <span class="font-semibold">

                                            {{ $event->location }}

                                        </span>

                                    </div>

                                @endif

                                <!-- Date -->
                                <div class="flex items-center mt-4 text-gray-500">

                                    <svg
                                        class="w-5 h-5 mr-2"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10"
                                        />

                                    </svg>

                                    <span class="font-medium">

                                        {{ \Carbon\Carbon::parse($event->start_date)->format('F d, Y') }}

                                    </span>

                                </div>

                                <!-- Description -->
                                @if($event->description)

                                    <p class="mt-6 leading-relaxed text-gray-600 line-clamp-4">

                                        {{ $event->description }}

                                    </p>

                                @endif

                                <!-- CTA -->
                                <div class="pt-8 mt-auto">

                                    <a href="#"
                                       class="inline-flex items-center font-bold transition text-violet-700 hover:text-violet-900">

                                        Learn More

                                        <svg
                                            class="w-5 h-5 ml-2"
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

                            </div>

                        </div>

                    @endforeach

                </div>

            @else

                <!-- Empty State -->
                <div class="max-w-2xl mx-auto mt-24 text-center">

                    <div class="flex items-center justify-center w-32 h-32 mx-auto rounded-full bg-violet-100">

                        <svg
                            class="w-16 h-16 text-violet-400"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M8 7V3m8 4V3m-9 8h10"
                            />

                        </svg>

                    </div>

                    <h3 class="mt-10 text-3xl font-extrabold text-gray-900">

                        No Upcoming Events

                    </h3>

                    <p class="mt-4 text-lg leading-relaxed text-gray-600">

                        Upcoming ministry events and conferences will appear here.

                    </p>

                </div>

            @endif

        </div>

    </section>

</div>