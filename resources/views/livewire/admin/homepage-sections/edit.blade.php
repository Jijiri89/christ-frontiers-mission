
    @php
    use Illuminate\Support\Facades\Storage;
@endphp

<div class="max-w-4xl px-4 py-10 mx-auto">

    <!-- Header -->
    <div class="mb-8">

        <h1 class="text-3xl font-extrabold tracking-tight text-violet-900">
            Edit Homepage Section
        </h1>

        <p class="mt-2 text-sm font-semibold tracking-[0.2em] uppercase text-violet-600">

            {{ $section->section_key }}

        </p>

    </div>

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

                <!-- Icon -->
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

                <!-- Content -->
                <div class="ml-4">

                    <h3 class="font-bold text-green-800">
                        Success
                    </h3>

                    <p class="mt-1 text-sm text-green-700">

                        {{ session('success') }}

                    </p>

                </div>

                <!-- Close -->
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

    <!-- Form -->
    <form wire:submit="update" class="space-y-8">

        <!-- Main Card -->
        <div class="overflow-hidden bg-white border border-gray-100 shadow-xl rounded-3xl">

            <!-- Card Header -->
            <div class="px-8 py-6 border-b border-gray-100 bg-gradient-to-r from-violet-700 to-violet-900">

                <h2 class="text-xl font-bold text-white">
                    Section Information
                </h2>

                <p class="mt-1 text-sm text-violet-200">
                    Update homepage content and media.
                </p>

            </div>

            <!-- Card Body -->
            <div class="p-8 space-y-6">

                <!-- Title -->
                <div>

                    <label class="block mb-2 text-sm font-bold text-gray-700">
                        Title
                    </label>

                    <input
                        type="text"
                        wire:model="title"
                        class="w-full border-gray-300 shadow-sm rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                    >

                    @error('title')

                        <p class="mt-2 text-sm text-red-600">

                            {{ $message }}

                        </p>

                    @enderror

                </div>

                <!-- Subtitle -->
                <div>

                    <label class="block mb-2 text-sm font-bold text-gray-700">
                        Subtitle
                    </label>

                    <input
                        type="text"
                        wire:model="subtitle"
                        class="w-full border-gray-300 shadow-sm rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                    >

                    @error('subtitle')

                        <p class="mt-2 text-sm text-red-600">

                            {{ $message }}

                        </p>

                    @enderror

                </div>

                <!-- Content -->
                <div>

                    <label class="block mb-2 text-sm font-bold text-gray-700">
                        Content
                    </label>

                    <textarea
                        wire:model="content"
                        rows="8"
                        class="w-full border-gray-300 shadow-sm rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                    ></textarea>

                    @error('content')

                        <p class="mt-2 text-sm text-red-600">

                            {{ $message }}

                        </p>

                    @enderror

                </div>

                <!-- Buttons -->
                <div class="grid gap-6 md:grid-cols-2">

                    <!-- Button Text -->
                    <div>

                        <label class="block mb-2 text-sm font-bold text-gray-700">
                            Button Text
                        </label>

                        <input
                            type="text"
                            wire:model="button_text"
                            class="w-full border-gray-300 shadow-sm rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                        >

                    </div>

                    <!-- Button Link -->
                    <div>

                        <label class="block mb-2 text-sm font-bold text-gray-700">
                            Button Link
                        </label>

                        <input
                            type="text"
                            wire:model="button_link"
                            class="w-full border-gray-300 shadow-sm rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                        >

                    </div>

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

                    <!-- Preview New Image -->
                    @if($newImage)

                        <div class="mt-6">

                            <p class="mb-3 text-sm font-semibold text-gray-600">
                                New Image Preview
                            </p>

                            <img
                                src="{{ $newImage->temporaryUrl() }}"
                                class="object-cover w-full max-w-sm shadow-xl rounded-3xl"
                            >

                        </div>

                    <!-- Existing Image -->
                    @elseif($image)

                        <div class="mt-6">

                            <p class="mb-3 text-sm font-semibold text-gray-600">
                                Current Image
                            </p>

                            <img
                                src="{{ Storage::url($image) }}"
                                class="object-cover w-full max-w-sm shadow-xl rounded-3xl"
                            >

                            <!-- Remove Image -->
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

                <svg
                    class="w-5 h-5 mr-3"
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

                Save Changes

            </button>

        </div>

    </form>

</div>
