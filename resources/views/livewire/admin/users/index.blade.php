<div class="px-4 py-10 mx-auto max-w-7xl">

    <div class="flex items-center justify-between mb-8">

        <div>

            <h1 class="text-3xl font-extrabold text-violet-900">
                Users Management
            </h1>

            <p class="mt-2 text-gray-600">
                Manage admin access and user permissions.
            </p>

        </div>

    </div>

    @if(session('success'))

        <div class="p-4 mb-6 text-green-700 border border-green-200 bg-green-50 rounded-2xl">

            {{ session('success') }}

        </div>

    @endif

    @if(session('error'))

        <div class="p-4 mb-6 text-red-700 border border-red-200 bg-red-50 rounded-2xl">

            {{ session('error') }}

        </div>

    @endif

    <div class="overflow-hidden bg-white shadow-2xl rounded-3xl">

        <!-- Responsive Wrapper -->
        <div class="overflow-x-auto">

            <table class="min-w-full">

                <thead class="text-white bg-violet-900">

                    <tr>

                        <th class="px-4 py-4 text-sm font-bold tracking-wide text-left uppercase whitespace-nowrap">

                            Name

                        </th>

                        <th class="px-4 py-4 text-sm font-bold tracking-wide text-left uppercase whitespace-nowrap">

                            Email

                        </th>

                        <th class="px-4 py-4 text-sm font-bold tracking-wide text-left uppercase whitespace-nowrap">

                            Role

                        </th>

                        <th class="px-4 py-4 text-sm font-bold tracking-wide text-right uppercase whitespace-nowrap">

                            Actions

                        </th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($users as $user)

                        <tr class="transition border-b hover:bg-gray-50">

                            <!-- Name -->
                            <td class="px-4 py-5 whitespace-nowrap">

                                <div class="font-bold text-violet-900">

                                    {{ $user->name }}

                                </div>

                            </td>

                            <!-- Email -->
                            <td class="px-4 py-5">

                                <div class="text-gray-600 break-all min-w-[220px]">

                                    {{ $user->email }}

                                </div>

                            </td>

                            <!-- Role -->
                            <td class="px-4 py-5 whitespace-nowrap">

                                @if($user->is_admin)

                                    <span class="inline-flex items-center px-3 py-1 text-xs font-bold text-green-700 bg-green-100 rounded-full">

                                        Admin

                                    </span>

                                @else

                                    <span class="inline-flex items-center px-3 py-1 text-xs font-bold text-gray-700 bg-gray-100 rounded-full">

                                        User

                                    </span>

                                @endif

                            </td>

                            <!-- Actions -->
                            <td class="px-4 py-5 text-right whitespace-nowrap">

                                @if(auth()->id() !== $user->id)

                                    <button
                                        wire:click="toggleAdmin({{ $user->id }})"
                                        wire:confirm="Are you sure you want to update this user role?"
                                        class="px-4 py-2 text-sm font-bold text-white transition rounded-xl {{ $user->is_admin ? 'bg-red-600 hover:bg-red-700' : 'bg-violet-700 hover:bg-violet-800' }}"
                                    >

                                        {{ $user->is_admin ? 'Remove Admin' : 'Make Admin' }}

                                    </button>

                                @else

                                    <span class="text-sm font-semibold text-gray-400">

                                        Current User

                                    </span>

                                @endif

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>