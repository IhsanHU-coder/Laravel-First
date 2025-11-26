<form action="{{ route('teachers.store') }}" method="POST" class="space-y-4">
    @csrf
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
        Add Teacher
    </h3>

    <div class="grid gap-4 sm:grid-cols-1">

        <div>
            <label class="block mb-2 text-sm font-medium dark:text-white">Name</label>
            <input type="text" name="nama" class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white" required>
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium dark:text-white">Subject</label>
            <select name="subject_id" class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white" required>
                <option value="">-- Select Subject --</option>
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium dark:text-white">Phone</label>
            <input type="text" name="phone" class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white" required>
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium dark:text-white">Address</label>
            <input type="text" name="address" class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
        </div>

    </div>

    <div class="flex justify-end">
        <button type="submit"
                class="px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800">
            Save
        </button>
    </div>
</form>
