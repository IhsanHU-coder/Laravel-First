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
