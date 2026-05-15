<div class="px-4 py-10 mx-auto max-w-7xl">

    <!-- Header -->
    <div class="flex flex-col gap-4 mb-8 md:flex-row md:items-center md:justify-between">

        <div>

            <h1 class="text-3xl font-extrabold tracking-tight text-violet-900">
                Homepage Sections
            </h1>

            <p class="mt-2 text-gray-600">
                Manage homepage content, text, buttons, and images.
            </p>

        </div>

    </div>

    <!-- Table Card -->
    <div class="overflow-hidden bg-white border border-gray-100 shadow-2xl rounded-3xl">

        <div class="overflow-x-auto">

            <table class="min-w-full divide-y divide-gray-200">

                <!-- Table Head -->
                <thead class="bg-gradient-to-r from-violet-700 to-violet-900">

                    <tr>

                        <th class="px-6 py-5 text-xs font-bold tracking-wider text-left uppercase text-violet-100">

                            Image

                        </th>

                        <th class="px-6 py-5 text-xs font-bold tracking-wider text-left uppercase text-violet-100">

                            Section

                        </th>

                        <th class="px-6 py-5 text-xs font-bold tracking-wider text-left uppercase text-violet-100">

                            Title

                        </th>

                        <th class="px-6 py-5 text-xs font-bold tracking-wider text-right uppercase text-violet-100">

                            Actions

                        </th>

                    </tr>

                </thead>

                <!-- Table Body -->
                <tbody class="bg-white divide-y divide-gray-100">

                    @foreach($sections as $section)

                        <tr class="transition duration-200 hover:bg-violet-50/40">

                            <!-- Image -->
                            <td class="px-6 py-5">

                                @if($section->image)

                                    <img
                                        src="{{ Storage::url($section->image) }}"
                                        alt="{{ $section->title }}"
                                        class="object-cover w-16 h-16 shadow-lg rounded-2xl"
                                    >

                                @else

                                    <div class="flex items-center justify-center w-16 h-16 text-xs font-bold text-gray-400 bg-gray-100 rounded-2xl">

                                        No Image

                                    </div>

                                @endif

                            </td>

                            <!-- Section -->
                            <td class="px-6 py-5">

                                <div class="inline-flex items-center px-4 py-2 rounded-full bg-violet-100">

                                    <div class="w-2 h-2 mr-2 rounded-full bg-violet-700"></div>

                                    <span class="text-sm font-bold tracking-wide uppercase text-violet-700">

                                        {{ $section->section_key }}

                                    </span>

                                </div>

                            </td>

                            <!-- Title -->
                            <td class="px-6 py-5">

                                <h3 class="font-semibold text-gray-800">

                                    {{ $section->title }}

                                </h3>

                            </td>

                            <!-- Actions -->
                            <td class="px-6 py-5 text-right">

                                <a
                                    href="{{ route('dashboard.homepage-sections.edit', $section) }}"
                                    wire:navigate
                                    class="inline-flex items-center px-5 py-3 text-sm font-bold text-white transition-all duration-300 shadow-lg rounded-xl bg-gradient-to-r from-violet-700 to-violet-900 hover:scale-105 hover:from-violet-800 hover:to-violet-950"
                                >

                                    <svg
                                        class="w-4 h-4 mr-2"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M11 5h2m-1 0v14m-7-7h14"
                                        />

                                    </svg>

                                    Edit

                                </a>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>