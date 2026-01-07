<x-admin.components.layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div x-data="{
                    openAddModal: false,
                    openDeleteModal: false,
                    openEditModal:false,
                    editUrl:'',
                    editName:'',
                    deleteUrl: '',
                    editPhone:'',
                    editSubject:'',
                    editAddress:'',
                    }">
                     <!-- MODAL EDIT -->
<div x-show="openEditModal" x-transition
    class="fixed inset-0 flex items-center justify-center bg-black/50 z-50">

    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-2xl p-6 relative">

        <button @click="openEditModal = false"
            class="absolute top-2 right-3 text-gray-400 hover:text-gray-600">
            ✕
        </button>

        <form :action="editUrl" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Edit Teacher</h3>

            <div class="grid gap-4 sm:grid-cols-1">

                <div>
                    <label class="block mb-2 text-sm font-medium">Name</label>
                    <input type="text" name="nama" x-model="editName"
                        class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium">Subject</label>
                    <select name="subject_id" x-model="editSubject"
                        class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
                        @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium">Phone</label>
                    <input type="text" name="phone" x-model="editPhone"
                        class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium">Address</label>
                    <input type="text" name="address" x-model="editAddress"
                        class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
                </div>

            </div>

            <div class="flex justify-end space-x-2">
                <button type="submit"
                    class="px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800">
                    Update
                </button>
            </div>
        </form>

    </div>
</div>




                    <x-admin.menu-table
                        button-label="Add Teacher"
                        on-click="openAddModal = true"
                    />


                    <div x-show="openAddModal"  x-transition class="fixed inset-0 flex items-center    
                    justify-center bg-black/50 z-50" >
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-2xl p-6 relative" >
                            {{-- Tombol close --}}
                            <button
                                @click="openAddModal = false"
                                class="absolute top-2 right-3 text-gray-400 hover:text-gray-600"
                            >
                                ✕
                            </button>


                            @include('admin.teacher.create', ['subjects' => $subjects])

                        </div>
                    </div>

                   
                    {{-- @include('admin.student.delete') --}}
                    {{-- </div> --}}

                    <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">ID</th>
                                <th scope="col" class="px-4 py-3">Nama</th>
                                <th scope="col" class="px-4 py-3">Subject Name</th>
                                <th scope="col" class="px-4 py-3">Phone</th>
                                <th scope="col" class="px-4 py-3">Address</th>
                                <th scope="col" class="px-4 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $teacher)
                            <tr class="border-b dark:border-gray-700">
                                
                                <td class="px-4 py-3">{{ $loop->iteration }}</td>
                                <td class="px-4 py-3">{{ $teacher->nama}}</td>
                                <td class="px-4 py-3">{{ $teacher->subject->name}}</td>
                                <td class="px-4 py-3">{{ $teacher->phone }}</td>
                                <td class="px-4 py-3">{{ $teacher->address }}</td>
                                
                                <td class="px-4 py-3 flex items-center justify-end">
                                    @php
                                        $dropdownId = 'teacher-dropdown-' . $teacher->id;
                                        $buttonId = $dropdownId . '-button';
                                    @endphp

                                    <button id="{{ $buttonId }}" data-dropdown-toggle="{{ $dropdownId }}" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                    <div id="{{ $dropdownId }}" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="{{ $buttonId }}">
                                            {{-- <li>
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                            </li> --}}
                                            <li>
                                                <button
    @click="
        openEditModal = true;
        editUrl = '{{ route('teachers.update', $teacher->id) }}';
        editName = @js($teacher->nama);
        editPhone = @js($teacher->phone);
        editAddress = @js($teacher->address);
        editSubject = @js($teacher->subject_id);
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
                                                
                                                deleteUrl = '{{ route('teachers.destroy', $teacher->id) }}';
                                                    
                                                "
                                                class="block w-full text-left py-2 px-4 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                
                                            >
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

                    <div class="p-4">
                        {{ $teachers->links() }}
                    </div>
                    @include('admin.teacher.delete')
            </div>
        </div>
    </section>

    

</x-admin.components.layout>
