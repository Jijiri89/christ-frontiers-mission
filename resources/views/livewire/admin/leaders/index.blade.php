@php
    use Illuminate\Support\Facades\Storage;
@endphp

<div class="px-4 py-10 mx-auto max-w-7xl">

    <div class="flex flex-col gap-4 mb-8 sm:flex-row sm:items-center sm:justify-between">

        <div>

            <h1 class="text-3xl font-extrabold text-violet-900">
                Leaders
            </h1>

            <p class="mt-2 text-gray-600">
                Manage ministry leadership profiles.
            </p>

        </div>

        <a href="{{ route('dashboard.leaders.create') }}"
           wire:navigate
           class="inline-flex items-center justify-center px-6 py-3 font-bold text-white transition rounded-2xl bg-violet-700 hover:bg-violet-800">

            Add Leader

        </a>

    </div>

    @if(session('success'))

        <div class="p-4 mb-6 text-green-700 border border-green-200 bg-green-50 rounded-2xl">

            {{ session('success') }}

        </div>

    @endif

    <div class="overflow-hidden bg-white shadow-2xl rounded-3xl">

        <!-- Responsive Table Wrapper -->
        <div class="overflow-x-auto">

            <table class="min-w-full">

                <thead class="text-white bg-violet-900">

                    <tr>

                        <th class="px-4 py-4 text-sm font-bold tracking-wide text-left uppercase whitespace-nowrap">

                            Image

                        </th>

                        <th class="px-4 py-4 text-sm font-bold tracking-wide text-left uppercase whitespace-nowrap">

                            Name

                        </th>

                        <th class="px-4 py-4 text-sm font-bold tracking-wide text-left uppercase whitespace-nowrap">

                            Ministry

                        </th>

                        <th class="px-4 py-4 text-sm font-bold tracking-wide text-left uppercase whitespace-nowrap">

                            Position

                        </th>

                        <th class="px-4 py-4 text-sm font-bold tracking-wide text-right uppercase whitespace-nowrap">

                            Actions

                        </th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($leaders as $leader)

                        <tr class="transition border-b hover:bg-gray-50">

                            <!-- Image -->
                            <td class="px-4 py-5 whitespace-nowrap">

                                @if($leader->image)

                                    <img
                                        src="{{ Storage::url($leader->image) }}"
                                        class="object-cover w-16 h-16 rounded-2xl"
                                    >

                                @else

                                    <div class="flex items-center justify-center w-16 h-16 text-sm font-bold text-gray-400 bg-gray-100 rounded-2xl">

                                        N/A

                                    </div>

                                @endif

                            </td>

                            <!-- Name -->
                            <td class="px-4 py-5 whitespace-nowrap">

                                <div class="font-bold text-violet-900">

                                    {{ $leader->name }}

                                </div>

                            </td>

                            <!-- Ministry -->
                            <td class="px-4 py-5 whitespace-nowrap">

                                <span class="inline-flex items-center px-3 py-1 text-xs font-bold rounded-full bg-violet-100 text-violet-700">

                                    {{ $leader->ministry }}

                                </span>

                            </td>

                            <!-- Position -->
                            <td class="px-4 py-5">

                                <div class="text-gray-600 min-w-[180px]">

                                    {{ $leader->position }}

                                </div>

                            </td>

                            <!-- Actions -->
                            <td class="px-4 py-5 text-right whitespace-nowrap">

                                <div class="flex justify-end gap-2">

                                    <a href="{{ route('dashboard.leaders.edit', $leader) }}"
                                       wire:navigate
                                       class="px-4 py-2 text-sm font-bold text-white transition rounded-xl bg-violet-700 hover:bg-violet-800">

                                        Edit

                                    </a>

                                    <button
                                        wire:click="delete({{ $leader->id }})"
                                        wire:confirm="Delete this leader?"
                                        class="px-4 py-2 text-sm font-bold text-white transition bg-red-600 rounded-xl hover:bg-red-700"
                                    >

                                        Delete

                                    </button>

                                </div>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>