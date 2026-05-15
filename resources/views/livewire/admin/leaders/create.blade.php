@php
    use Illuminate\Support\Facades\Storage;
@endphp

<div class="max-w-4xl px-4 py-10 mx-auto">

    <div class="mb-8">

        <h1 class="text-3xl font-extrabold text-violet-900">
            Add Leader
        </h1>

        <p class="mt-2 text-gray-600">
            Create a new leadership profile.
        </p>

    </div>

    <form wire:submit="save" class="space-y-8">

        <div class="overflow-hidden bg-white shadow-2xl rounded-3xl">

            <div class="px-8 py-6 text-white bg-gradient-to-r from-violet-700 to-violet-900">

                <h2 class="text-xl font-bold">
                    Leader Information
                </h2>

            </div>

            <div class="p-8 space-y-6">

                <!-- Name -->
                <div>

                    <label class="block mb-2 font-bold text-gray-700">
                        Name
                    </label>

                    <input
                        type="text"
                        wire:model="name"
                        class="w-full border-gray-300 rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                    >

                </div>

                <!-- Position -->
                <div>

                    <label class="block mb-2 font-bold text-gray-700">
                        Position
                    </label>

                    <input
                        type="text"
                        wire:model="position"
                        class="w-full border-gray-300 rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                    >

                </div>

                <!-- Bio -->
                <div>

                    <label class="block mb-2 font-bold text-gray-700">
                        Biography
                    </label>

                    <textarea
                        wire:model="bio"
                        rows="6"
                        class="w-full border-gray-300 rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                    ></textarea>

                </div>

                <!-- Sort -->
                <div>

                    <label class="block mb-2 font-bold text-gray-700">
                        Sort Order
                    </label>

                    <input
                        type="number"
                        wire:model="sort_order"
                        class="w-full border-gray-300 rounded-2xl focus:border-violet-500 focus:ring-violet-500"
                    >

                </div>

                <!-- Active -->
                <div>

                    <label class="inline-flex items-center">

                        <input
                            type="checkbox"
                            wire:model="is_active"
                            class="border-gray-300 rounded text-violet-700"
                        >

                        <span class="ml-3 font-medium text-gray-700">

                            Active Leader

                        </span>

                    </label>

                </div>

                <!-- Upload -->
                <div>

                    <label class="block mb-2 font-bold text-gray-700">
                        Upload Image
                    </label>

                    <input
                        type="file"
                        wire:model="newImage"
                        class="w-full border-gray-300 rounded-2xl"
                    >

                    @if($newImage)

                        <img
                            src="{{ $newImage->temporaryUrl() }}"
                            class="object-cover w-64 mt-6 h-72 rounded-3xl"
                        >

                    @endif

                </div>

            </div>

        </div>

        <div class="flex justify-end">

            <button
                type="submit"
                class="px-8 py-4 font-bold text-white transition rounded-2xl bg-violet-700 hover:bg-violet-800"
            >

                Create Leader

            </button>

        </div>

    </form>

</div>