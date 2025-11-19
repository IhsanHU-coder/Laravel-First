<div x-show="openEditModal" 
     x-transition 
     class="fixed inset-0 flex items-center justify-center bg-black/50 z-50">

    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-2xl p-6 relative">

        <!-- Close button -->
        <button
            @click="openEditModal = false"
            class="absolute top-2 right-3 text-gray-400 hover:text-gray-600"
        >
            ✕
        </button>

        <!-- Title -->
        <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">
            Edit Classroom
        </h2>

        <!-- FORM -->
        <form :action="editUrl" method="POST">
            @csrf
            @method('PUT')

            <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                Classroom Name
            </label>

            <input 
                type="text"
                name="name"
                x-model="editName"
                class="w-full border rounded px-3 py-2 mb-4 dark:bg-gray-700 dark:text-white"
                required
            />

            <!-- Buttons -->
            <div class="flex justify-end space-x-2 mt-4">
                <button
                    type="button"
                    @click="openEditModal = false"
                    class="px-4 py-2 bg-gray-300 text-black rounded-lg hover:bg-gray-400"
                >
                    Cancel
                </button>

                <button
                    type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700"
                >
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
