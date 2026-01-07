<x-admin.components.layout>
    <x-slot:judul>Guardian</x-slot:judul>

    <section class="bg-gray-50 dark:bg-gray-900 p-4 sm:p-6 lg:p-8">
        <div class="mx-auto max-w-screen-xl">
            <div x-data="{
                    openAddModal: false,
                    openDeleteModal: false,
                    openEditModal: false,
                    deleteUrl: '',
                    editUrl: '',
                }">

                


{{-- 
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white">Daftar Guardian</h1>
                <button 
                    @click="openAddModal = true"
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    Tambah Guardian
                </button>
            </div> --}}
            {{-- MODAL EDIT --}}
                    <div x-show="openEditModal" x-transition
                        class="fixed inset-0 flex items-center justify-center bg-black/50 z-50">

                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-2xl p-6 relative">

                            <button @click="openEditModal = false"
                                class="absolute top-2 right-3 text-gray-400 hover:text-gray-600">
                                ✕
                            </button>

                            <template x-if="editUrl">
                                <div x-html="await (await fetch(editUrl)).text()"></div>
                            </template>

                        </div>
                    </div>

            <x-admin.menu-table
                        button-label="Add Guardian"
                        on-click="openAddModal = true"
                    />

                    {{-- MODAL ADD --}}
                    <div x-show="openAddModal" x-transition
                        class="fixed inset-0 flex items-center justify-center bg-black/50 z-50">

                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-2xl p-6 relative">

                            <button @click="openAddModal = false"
                                class="absolute top-2 right-3 text-gray-400 hover:text-gray-600">
                                ✕
                            </button>

                            @include('admin.guardian.create', ['guardians' => $guardians])
                        </div>
                    </div>

            <div class="overflow-x-auto rounded-lg shadow-md">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 uppercase text-xs">
                        <tr>
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Nama</th>
                            <th class="px-4 py-3">Job</th>
                            <th class="px-4 py-3">Phone</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Address</th>
                            <th class="px-4 py-3 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($guardians as $guardian)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                            <td class="px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="px-4 py-2 font-medium text-gray-900 dark:text-white">{{ $guardian->nama }}</td>
                            <td class="px-4 py-2">{{ $guardian->job }}</td>
                            <td class="px-4 py-2">{{ $guardian->phone }}</td>
                            <td class="px-4 py-2">{{ $guardian->email }}</td>
                            <td class="px-4 py-2">{{ $guardian->address }}</td>
                            <td class="px-4 py-3 flex items-center justify-end">
                                        @php
                                            $dropdownId = 'student-dropdown-' . $guardian->id;
                                            $buttonId = $dropdownId . '-button';
                                        @endphp

                                        <button id="{{ $buttonId }}" data-dropdown-toggle="{{ $dropdownId }}"
                                            class="inline-flex items-center p-0.5 text-sm text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-100">

                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"/>
                                            </svg>
                                        </button>

                                        <div id="{{ $dropdownId }}" class="hidden z-10 w-44 bg-white rounded shadow dark:bg-gray-700">
                                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">

                                                {{-- TOMBOL EDIT --}}
                                                <li>
                                                    <button
                                                        @click="
                                                            openEditModal = true;
                                                            editUrl = '{{ route('guardians.edit', $guardian->id) }}'
                                                        "
                                                        class="block w-full text-left py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                        Edit
                                                    </button>
                                                </li>
                                            </ul>

                                            <div class="py-1">
                                                <button
                                                    @click="
                                                        openDeleteModal = true;
                                                        deleteUrl = '{{ route('guardians.destroy', $guardian->id) }}'
                                                    "
                                                    class="block w-full text-left py-2 px-4 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            
            @include('admin.guardian.delete')

        </div>
        <div class="mt-4">
                {{ $guardians->links() }}
            </div>
    </section>

    {{-- MODAL ADD / EDIT --}}
    <div x-data="{ openAddModal: false, openEditModal: false, editId: null }">
        {{-- Include modal components here --}}
    </div>
</x-admin.components.layout>
