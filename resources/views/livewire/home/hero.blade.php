<div>
    @if($hero)

<section class="relative overflow-hidden bg-gradient-to-r from-violet-700 via-violet-800 to-violet-900">

    <!-- Background Effects -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">

        <div class="absolute top-0 left-0 rounded-full w-72 h-72 bg-yellow-400/20 blur-3xl"></div>

        <div class="absolute bottom-0 right-0 rounded-full w-96 h-96 bg-violet-300/10 blur-3xl"></div>

        <div class="absolute inset-0 bg-black/10"></div>

    </div>

    <!-- Hero Content -->
    <div class="relative px-4 py-20 mx-auto max-w-7xl sm:py-24">

        <div class="max-w-4xl mx-auto text-center">

            <!-- Subtitle -->
            @if($hero->subtitle)

                <div class="inline-flex items-center px-4 py-2 mb-6 border rounded-full bg-white/10 border-white/20 backdrop-blur-sm">

                    <div class="w-2 h-2 mr-3 bg-yellow-400 rounded-full"></div>

                    <p class="text-xs sm:text-sm font-semibold tracking-[0.25em] uppercase text-yellow-300">

                        {{ $hero->subtitle }}

                    </p>

                </div>

            @endif

            <!-- Main Title -->
            <h1 class="text-4xl font-extrabold leading-tight text-white sm:text-5xl md:text-6xl">

                {{ $hero->title }}

            </h1>

            <!-- Content -->
            @if($hero->content)

                <p class="max-w-3xl mx-auto mt-8 text-lg leading-relaxed sm:text-xl text-violet-100">

                    {{ $hero->content }}

                </p>

            @endif

            <!-- Action Buttons -->
            <div class="flex flex-col items-center justify-center gap-4 mt-12 sm:flex-row">

                @if($hero->button_text)

                    <a href="{{ $hero->button_link }}"
                       wire:navigate
                       class="inline-flex items-center justify-center px-8 py-4 text-base font-bold transition-all duration-300 bg-yellow-400 rounded-full shadow-xl text-violet-900 hover:bg-yellow-500 hover:scale-105 active:scale-95">

                        {{ $hero->button_text }}

                    </a>

                @endif

                <a href="{{ route('home') }}"
                   wire:navigate
                   class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-white transition-all duration-300 border rounded-full border-white/30 backdrop-blur-sm hover:bg-white/10 hover:border-white/50">

                    Contact Us

                </a>

            </div>

            <!-- Statistics -->
            <div class="grid grid-cols-2 gap-8 pb-24 mt-20 md:grid-cols-4">

                @php
                    $stats = [
                        ['value' => '78+', 'label' => 'Churches'],
                        ['value' => '70+', 'label' => 'Ministers'],
                        ['value' => '4', 'label' => 'Bible Schools'],
                        ['value' => '20+', 'label' => 'Years Ministry'],
                    ];
                @endphp

                @foreach($stats as $stat)

                    <div class="text-center">

                        <div class="text-3xl font-bold text-yellow-300 sm:text-4xl">

                            {{ $stat['value'] }}

                        </div>

                        <p class="mt-2 text-sm text-violet-200">

                            {{ $stat['label'] }}

                        </p>

                    </div>

                @endforeach

            </div>

        </div>

    </div>

    <!-- Bottom Wave -->
    <div class="absolute bottom-0 left-0 right-0 leading-none">

        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1440 320"
            class="w-full h-auto text-gray-50"
            fill="currentColor">

            <path d="M0,224L80,197.3C160,171,320,117,480,117.3C640,117,800,171,960,176C1120,181,1280,139,1360,117.3L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>

        </svg>

    </div>

</section>

@endif
</div>