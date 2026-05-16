@php
    use Illuminate\Support\Facades\Storage;
@endphp

<div class="max-w-4xl px-4 py-10 mx-auto">

    <!-- Floating Success Message -->
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

                    <button
                        @click="show = false"
                        class="ml-auto text-green-500 hover:text-green-700"
                    >

                        ✕

                    </button>

                </div>

            </div>

        </div>

    @endif

    <!-- Header -->
    <div class="mb-8">

        <h1 class="text-3xl font-extrabold tracking-tight text-violet-900">
            Edit Leader
        </h1>

        <p class="mt-2 text-gray-600">
            Update ministry leadership information.
        </p>

    </div>

    <!-- Form -->
    <form wire:submit="update" class="space-y-8">

        <!-- Main Card -->
        <div class="overflow-hidden bg-white border border-gray-100 shadow-2xl rounded-3xl">

            <!-- Card Header -->
            <div class="px-8 py-6 text-white bg-gradient-to-r from-violet-700 to-violet-900">

                <h2 class="text-xl font-bold">
                    Leader Information
                </h2>

                <p class="mt-1 text-sm text-violet-200">
                    Manage leader profile and ministry details.
                </p>

            </div>

            <!-- Card Body -->
            <div class="p-8 space-y-6">

                <!-- Name -->
                <div>

                    <label class="block mb-2 text-sm font-bold text-gray-700">
                        Name
                    </label>

                    <input
                        type="text"
                        wire:model="name"
                        class="w-full border-gray-300 shadow-sm rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                    >

                    @error('name')

                        <p class="mt-2 text-sm text-red-600">

                            {{ $message }}

                        </p>

                    @enderror

                </div>

                <!-- Position -->
                <div>

                    <!-- Ministry -->
<div>

    <label class="block mb-2 text-sm font-bold text-gray-700">
        Ministry
    </label>

    <select
        wire:model="ministry"
        class="w-full border-gray-300 shadow-sm rounded-2xl focus:border-violet-500 focus:ring-violet-500">

        <option value="">
            Select Ministry
        </option>

        <option value="National Presbytery">
            National Presbytery
        </option>

        <option value="Women Ministry">
            Women Ministry
        </option>

        <option value="Children Ministry">
            Children Ministry
        </option>

        <option value="Youth Ministry">
            Youth Ministry
        </option>

    </select>

    @error('ministry')

        <p class="mt-2 text-sm text-red-600">

            {{ $message }}

        </p>

    @enderror

</div>

                    <label class="block mb-2 text-sm font-bold text-gray-700">
                        Position
                    </label>

                    <input
                        type="text"
                        wire:model="position"
                        class="w-full border-gray-300 shadow-sm rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                    >

                    @error('position')

                        <p class="mt-2 text-sm text-red-600">

                            {{ $message }}

                        </p>

                    @enderror

                </div>

                <!-- Bio -->
                <div>

                    <label class="block mb-2 text-sm font-bold text-gray-700">
                        Biography
                    </label>

                    <textarea
                        wire:model="bio"
                        rows="6"
                        class="w-full border-gray-300 shadow-sm rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                    ></textarea>

                    @error('bio')

                        <p class="mt-2 text-sm text-red-600">

                            {{ $message }}

                        </p>

                    @enderror

                </div>

                <!-- Sort Order -->
                <div>

                    <label class="block mb-2 text-sm font-bold text-gray-700">
                        Sort Order
                    </label>

                    <input
                        type="number"
                        wire:model="sort_order"
                        class="w-full border-gray-300 shadow-sm rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                    >

                </div>

                <!-- Active -->
                <div>

                    <label class="inline-flex items-center">

                        <input
                            type="checkbox"
                            wire:model="is_active"
                            class="border-gray-300 rounded text-violet-700 focus:ring-violet-500"
                        >

                        <span class="ml-3 font-medium text-gray-700">

                            Active Leader

                        </span>

                    </label>

                </div>

                <!-- Image Upload -->
                <div>

                    <label class="block mb-2 text-sm font-bold text-gray-700">
                        Upload Image
                    </label>

                    <input
                        type="file"
                        wire:model="newImage"
                        class="w-full border-gray-300 rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                    >

                    <!-- Uploading -->
                    <div
                        wire:loading
                        wire:target="newImage"
                        class="mt-3 text-sm font-medium text-violet-700"
                    >

                        Uploading image...

                    </div>

                    @error('newImage')

                        <p class="mt-2 text-sm text-red-600">

                            {{ $message }}

                        </p>

                    @enderror

                    <!-- New Preview -->
                    @if($newImage)

                        <div class="mt-6">

                            <p class="mb-3 text-sm font-semibold text-gray-600">
                                New Image Preview
                            </p>

                            <img
                                src="{{ $newImage->temporaryUrl() }}"
                                class="object-cover w-64 shadow-xl h-72 rounded-3xl"
                            >

                        </div>

                    <!-- Current Image -->
                    @elseif($image)

                        <div class="mt-6">

                            <p class="mb-3 text-sm font-semibold text-gray-600">
                                Current Image
                            </p>

                            <img
                                src="{{ Storage::url($image) }}"
                                class="object-cover w-64 shadow-xl h-72 rounded-3xl"
                            >

                            <!-- Remove -->
                            <div class="mt-4">

                                <label class="inline-flex items-center">

                                    <input
                                        type="checkbox"
                                        wire:model="removeImage"
                                        class="text-red-600 border-gray-300 rounded focus:ring-red-500"
                                    >

                                    <span class="ml-2 text-sm font-semibold text-red-600">

                                        Remove current image

                                    </span>

                                </label>

                            </div>

                        </div>

                    @endif

                </div>

            </div>

        </div>

        <!-- Submit -->
        <div class="flex items-center justify-end">

            <button
                type="submit"
                class="inline-flex items-center px-8 py-4 font-bold text-white transition-all duration-300 shadow-2xl rounded-2xl bg-gradient-to-r from-violet-700 to-violet-900 hover:scale-105 hover:from-violet-800 hover:to-violet-950 active:scale-95"
            >

                Save Changes

            </button>

        </div>

    </form>

</div>