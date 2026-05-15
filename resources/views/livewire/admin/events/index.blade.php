@php
    use Illuminate\Support\Facades\Storage;
@endphp

<div class="px-4 py-10 mx-auto max-w-7xl">

    <!-- Header -->
    <div class="flex items-center justify-between mb-10">

        <div>

            <h1 class="text-4xl font-extrabold text-violet-900">

                Events

            </h1>

            <p class="mt-2 text-lg text-gray-600">

                Manage ministry events and conferences.

            </p>

        </div>

        <a href="{{ route('dashboard.events.create') }}"
           wire:navigate
           class="inline-flex items-center px-6 py-4 font-bold text-white transition rounded-2xl bg-violet-700 hover:bg-violet-800">

            Add Event

        </a>

    </div>

    <!-- Success -->
    @if(session('success'))

        <div class="p-4 mb-6 text-green-800 border border-green-200 bg-green-50 rounded-2xl">

            {{ session('success') }}

        </div>

    @endif

    <!-- Table -->
    <div class="overflow-hidden bg-white border border-gray-100 shadow-2xl rounded-3xl">

        <table class="min-w-full divide-y divide-gray-100">

            <thead class="bg-violet-50">

                <tr>

                    <th class="px-6 py-5 text-xs font-bold tracking-wider text-left uppercase text-violet-700">

                        Image

                    </th>

                    <th class="px-6 py-5 text-xs font-bold tracking-wider text-left uppercase text-violet-700">

                        Event

                    </th>

                    <th class="px-6 py-5 text-xs font-bold tracking-wider text-left uppercase text-violet-700">

                        Date

                    </th>

                    <th class="px-6 py-5 text-xs font-bold tracking-wider text-left uppercase text-violet-700">

                        Status

                    </th>

                    <th class="px-6 py-5 text-right text-xs font-bold tracking-wider text.violet-700 uppercase">

                        Actions

                    </th>

                </tr>

            </thead>

            <tbody class="divide-y divide-gray-100">

                @forelse($events as $event)

                    <tr class="transition hover:bg-gray-50">

                        <!-- Image -->
                        <td class="px-6 py-4">

                            @if($event->image)

                                <img
                                    src="{{ Storage::url($event->image) }}"
                                    class="object-cover w-20 h-20 rounded-2xl"
                                >

                            @else

                                <div class="flex items-center justify-center w-20 h-20 rounded-2xl bg-violet-100">

                                    <svg
                                        class="w-8 h-8 text-violet-400"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8 7V3m8 4V3"
                                        />

                                    </svg>

                                </div>

                            @endif

                        </td>

                        <!-- Event -->
                        <td class="px-6 py-4">

                            <h3 class="text-lg font-bold text-gray-900">

                                {{ $event->title }}

                            </h3>

                            <p class="mt-1 text-sm text-gray-500">

                                {{ $event->location }}

                            </p>

                        </td>

                        <!-- Date -->
                        <td class="px-6 py-4">

                            <div class="font-semibold text-gray-900">

                                {{ \Carbon\Carbon::parse($event->start_date)->format('M d, Y') }}

                            </div>

                        </td>

                        <!-- Status -->
                        <td class="px-6 py-4">

                            @if($event->is_active)

                                <span class="inline-flex px-4 py-2 text-sm font-bold text-green-700 bg-green-100 rounded-full">

                                    Active

                                </span>

                            @else

                                <span class="inline-flex px-4 py-2 text-sm font-bold text-red-700 bg-red-100 rounded-full">

                                    Inactive

                                </span>

                            @endif

                        </td>

                        <!-- Actions -->
                        <td class="px-6 py-4 text-right">

                            <div class="flex justify-end gap-3">

                                <a href="{{ route('dashboard.events.edit', $event) }}"
                                   wire:navigate
                                   class="px-4 py-2 text-sm font-bold text-white transition rounded-xl bg-violet-700 hover:bg-violet-800">

                                    Edit

                                </a>

                                <button
                                    wire:click="delete({{ $event->id }})"
                                    wire:confirm="Delete this event?"
                                    class="px-4 py-2 text-sm font-bold text-white transition bg-red-600 rounded-xl hover:bg-red-700">

                                    Delete

                                </button>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="5" class="px-6 py-20 text-center">

                            <div class="text-gray-400">

                                No events found.

                            </div>

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>