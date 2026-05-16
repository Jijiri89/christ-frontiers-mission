
<div class="max-w-5xl px-4 py-10 mx-auto">
    @php
    use Illuminate\Support\Facades\Storage;
@endphp


    <!-- Success -->
    @if(session('success'))

        <div
            x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 4000)"
            x-show="show"
            x-transition
            class="fixed z-50 w-full max-w-sm top-6 right-6"
        >

            <div class="p-4 border border-green-200 shadow-2xl bg-green-50 rounded-2xl">

                <div class="flex items-start">

                    <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 bg-green-100 rounded-full">

                        <svg
                            class="w-5 h-5 text-green-600"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 13l4 4L19 7"
                            />

                        </svg>

                    </div>

                    <div class="ml-4">

                        <h3 class="font-bold text-green-800">
                            Success
                        </h3>

                        <p class="mt-1 text-sm text-green-700">

                            {{ session('success') }}

                        </p>

                    </div>

                </div>

            </div>

        </div>

    @endif

    <!-- Header -->
    <div class="mb-10">

        <h1 class="text-4xl font-extrabold text-violet-900">

            Edit Event

        </h1>

        <p class="mt-3 text-lg text-gray-600">

            Update ministry event details.

        </p>

    </div>

    <!-- Form -->
    <form wire:submit="update" class="space-y-8">

        <div class="overflow-hidden bg-white border border-gray-100 shadow-2xl rounded-3xl">

            <!-- Header -->
            <div class="px-8 py-6 text-white bg-gradient-to-r from-violet-700 to-violet-900">

                <h2 class="text-2xl font-bold">

                    Event Information

                </h2>

            </div>

            <!-- Body -->
            <div class="p-8 space-y-8">

                <!-- Title -->
                <div>

                    <label class="block mb-3 text-sm font-bold tracking-wide text-gray-700 uppercase">

                        Event Title

                    </label>

                    <input
                        type="text"
                        wire:model="title"
                        class="w-full border-gray-300 rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                    >

                </div>

                <!-- Description -->
                <div>

                    <label class="block mb-3 text-sm font-bold tracking-wide text-gray-700 uppercase">

                        Description

                    </label>

                    <textarea
                        wire:model="description"
                        rows="6"
                        class="w-full border-gray-300 rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                    ></textarea>

                </div>

                <!-- Location -->
                <div>

                    <label class="block mb-3 text-sm font-bold tracking-wide text-gray-700 uppercase">

                        Location

                    </label>

                    <input
                        type="text"
                        wire:model="location"
                        class="w-full border-gray-300 rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                    >

                </div>

                <!-- Dates -->
                <div class="grid gap-6 md:grid-cols-2">

                    <div>

                        <label class="block mb-3 text-sm font-bold tracking-wide text-gray-700 uppercase">

                            Start Date

                        </label>

                        <input
                            type="datetime-local"
                            wire:model="start_date"
                            class="w-full border-gray-300 rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                        >

                    </div>

                    <div>

                        <label class="block mb-3 text-sm font-bold tracking-wide text-gray-700 uppercase">

                            End Date

                        </label>

                        <input
                            type="datetime-local"
                            wire:model="end_date"
                            class="w-full border-gray-300 rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                        >

                    </div>

                </div>

                <!-- Upload -->
                <div>

                    <label class="block mb-3 text-sm font-bold tracking-wide text-gray-700 uppercase">

                        Event Image

                    </label>

                    <input
                        type="file"
                        wire:model="newImage"
                        class="w-full border-gray-300 rounded-2xl"
                    >

                    <!-- Preview -->
                    @if($newImage)

                        <div class="mt-6">

                            <img
                                src="{{ $newImage->temporaryUrl() }}"
                                class="object-cover w-full max-w-md shadow-xl rounded-3xl"
                            >

                        </div>

                    @elseif($image)

                        <div class="mt-6">

                            <img
                                src="{{ Storage::url($image) }}"
                                class="object-cover w-full max-w-md shadow-xl rounded-3xl"
                            >

                            <div class="mt-4">

                                <label class="inline-flex items-center">

                                    <input
                                        type="checkbox"
                                        wire:model="removeImage"
                                        class="text-red-600 border-gray-300 rounded focus:ring-red-500"
                                    >

                                    <span class="ml-2 font-semibold text-red-600">

                                        Remove current image

                                    </span>

                                </label>

                            </div>

                        </div>

                    @endif

                </div>

                <!-- Active -->
                <div>

                    <label class="inline-flex items-center">

                        <input
                            type="checkbox"
                            wire:model="is_active"
                            class="border-gray-300 rounded text-violet-700 focus:ring-violet-500"
                        >

                        <span class="ml-3 font-semibold text-gray-700">

                            Active Event

                        </span>

                    </label>

                </div>

            </div>

        </div>

        <!-- Submit -->
        <div class="flex justify-end">

            <button
                type="submit"
                class="inline-flex items-center px-8 py-4 font-bold text-white transition-all duration-300 shadow-xl rounded-2xl bg-violet-700 hover:bg-violet-800 hover:scale-105 active:scale-95">

                Save Changes

            </button>

        </div>

    </form>

</div>