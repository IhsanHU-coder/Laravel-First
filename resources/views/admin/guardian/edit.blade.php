<form action="{{ route('guardians.update', $guardian->id) }}" 
      method="POST" 
      class="space-y-4">
    @csrf
    @method('PUT')

    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
        Edit Guardian
    </h3>

    <div class="grid gap-4 sm:grid-cols-1">

        {{-- Name --}}
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Name
            </label>
            <input type="text" 
                name="nama" 
                value="{{ old('nama', $guardian->nama) }}" 
                required
                class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
        </div>

        {{-- Job --}}
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Job
            </label>
            <input type="text" 
                name="job" 
                value="{{ old('job', $guardian->job) }}" 
                required
                class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
        </div>

        {{-- Phone --}}
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Phone
            </label>
            <input type="text" 
                name="phone" 
                value="{{ old('phone', $guardian->phone) }}" 
                required
                class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
        </div>

        {{-- Email --}}
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Email
            </label>
            <input type="email" 
                name="email" 
                value="{{ old('email', $guardian->email) }}" 
                required
                class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
        </div>

        {{-- Address --}}
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Address
            </label>
            <input type="text" 
                name="address" 
                value="{{ old('address', $guardian->address) }}" 
                required
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
