@php
    use Illuminate\Support\Facades\Storage;
@endphp

<div class="px-4 py-10 mx-auto max-w-7xl">

    <div class="flex items-center justify-between mb-8">

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
           class="inline-flex items-center px-6 py-3 font-bold text-white rounded-2xl bg-violet-700 hover:bg-violet-800">

            Add Leader

        </a>

    </div>

    @if(session('success'))

        <div class="p-4 mb-6 text-green-700 border border-green-200 bg-green-50 rounded-2xl">

            {{ session('success') }}

        </div>

    @endif

    <div class="overflow-hidden bg-white shadow-2xl rounded-3xl">

        <table class="min-w-full">

            <thead class="text-white bg-violet-900">

                <tr>

                    <th class="px-6 py-4 text-left">
                        Image
                    </th>

                    <th class="px-6 py-4 text-left">
                        Name
                    </th>

                    <th class="px-6 py-4 text-left">
                        Position
                    </th>

                    <th class="px-6 py-4 text-right">
                        Actions
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach($leaders as $leader)

                    <tr class="border-b">

                        <td class="px-6 py-4">

                            @if($leader->image)

                                <img
                                    src="{{ Storage::url($leader->image) }}"
                                    class="object-cover w-16 h-16 rounded-2xl"
                                >

                            @endif

                        </td>

                        <td class="px-6 py-4 font-semibold">

                            {{ $leader->name }}

                        </td>

                        <td class="px-6 py-4 text-gray-600">

                            {{ $leader->position }}

                        </td>

                        <td class="px-6 py-4 text-right">

                            <div class="flex justify-end gap-3">

                                <a href="{{ route('dashboard.leaders.edit', $leader) }}"
                                   wire:navigate
                                   class="px-4 py-2 text-white rounded-xl bg-violet-700 hover:bg-violet-800">

                                    Edit

                                </a>

                                <button
                                    wire:click="delete({{ $leader->id }})"
                                    wire:confirm="Delete this leader?"
                                    class="px-4 py-2 text-white bg-red-600 rounded-xl hover:bg-red-700"
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