<div class="max-w-5xl px-4 py-10 mx-auto">

    <!-- Header -->
    <div class="mb-10">

        <h1 class="text-4xl font-extrabold text-violet-900">

            Create Event

        </h1>

        <p class="mt-3 text-lg text-gray-600">

            Add conferences, conventions, crusades, and ministry programs.

        </p>

    </div>

    <!-- Form -->
    <form wire:submit="save" class="space-y-8">

        <div class="overflow-hidden bg-white border border-gray-100 shadow-2xl rounded-3xl">

            <!-- Card Header -->
            <div class="px-8 py-6 text-white bg-gradient-to-r from-violet-700 to-violet-900">

                <h2 class="text-2xl font-bold">

                    Event Information

                </h2>

            </div>

            <!-- Card Body -->
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
                        placeholder="Annual Convention 2026"
                    >

                    @error('title')

                        <p class="mt-2 text-sm text-red-600">

                            {{ $message }}

                        </p>

                    @enderror

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
                        placeholder="Event description..."
                    ></textarea>

                    @error('description')

                        <p class="mt-2 text-sm text-red-600">

                            {{ $message }}

                        </p>

                    @enderror

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
                        placeholder="Wa Central Auditorium"
                    >

                    @error('location')

                        <p class="mt-2 text-sm text-red-600">

                            {{ $message }}

                        </p>

                    @enderror

                </div>

                <!-- Dates -->
                <div class="grid gap-6 md:grid-cols-2">

                    <!-- Start -->
                    <div>

                        <label class="block mb-3 text-sm font-bold tracking-wide text-gray-700 uppercase">

                            Start Date

                        </label>

                        <input
                            type="datetime-local"
                            wire:model="start_date"
                            class="w-full border-gray-300 rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                        >

                        @error('start_date')

                            <p class="mt-2 text-sm text-red-600">

                                {{ $message }}

                            </p>

                        @enderror

                    </div>

                    <!-- End -->
                    <div>

                        <label class="block mb-3 text-sm font-bold tracking-wide text-gray-700 uppercase">

                            End Date

                        </label>

                        <input
                            type="datetime-local"
                            wire:model="end_date"
                            class="w-full border-gray-300 rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                        >

                        @error('end_date')

                            <p class="mt-2 text-sm text-red-600">

                                {{ $message }}

                            </p>

                        @enderror

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

                    @error('newImage')

                        <p class="mt-2 text-sm text-red-600">

                            {{ $message }}

                        </p>

                    @enderror

                    <!-- Preview -->
                    @if($newImage)

                        <div class="mt-6">

                            <img
                                src="{{ $newImage->temporaryUrl() }}"
                                class="object-cover w-full max-w-md shadow-xl rounded-3xl"
                            >

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

                Create Event

            </button>

        </div>

    </form>

</div>