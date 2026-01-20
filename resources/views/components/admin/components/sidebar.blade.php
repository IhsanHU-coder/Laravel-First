@auth
<aside id="logo-sidebar" 
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform 
    -translate-x-full border-r border-gray-200 sm:translate-x-0 
    bg-white dark:bg-gray-800 dark:border-gray-700" 
    aria-label="Sidebar">

    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">

            {{-- ================= DASHBOARD ================= --}}
            <x-admin.components.sidelink 
                href="/admin/dashboard" 
                :active="request()->is('admin/dashboard')">

                <x-slot name="icon">
                    <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" fill="currentColor"
                        viewBox="0 0 22 21">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Z"/>
                    </svg>
                </x-slot>

                Dashboard
            </x-admin.components.sidelink>

            {{-- ================= PROFILE ================= --}}
            <x-admin.components.sidelink 
                href="/admin/profile" 
                :active="request()->is('admin/profile')">

                <x-slot name="icon">
                    <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path d="M10 2a5 5 0 1 1-5 5 5 5 0 0 1 5-5Z"/>
                    </svg>
                </x-slot>

                Profile
            </x-admin.components.sidelink>

            {{-- ================= KONTAK ================= --}}
            <x-admin.components.sidelink 
                href="/admin/kontak" 
                :active="request()->is('admin/kontak')">

                <x-slot name="icon">
                    <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path d="M2 5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10H2Z"/>
                    </svg>
                </x-slot>

                Kontak
            </x-admin.components.sidelink>

            {{-- ================= STUDENT DATA ================= --}}
            <button type="button"
                class="flex items-center p-2 w-full text-base font-medium 
                text-gray-900 rounded-lg hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                aria-controls="dropdown-student" data-collapse-toggle="dropdown-student">

                <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path d="M10 2a5 5 0 1 1-5 5 5 5 0 0 1 5-5Z"/>
                </svg>

                <span class="flex-1 ml-3 text-left">Student Data</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M5 8l5 5 5-5"/>
                </svg>
            </button>

            <ul id="dropdown-student" class="hidden py-2 space-y-1 pl-8">

                <x-admin.components.sidelink 
                    href="/admin/classrooms" 
                    :active="request()->is('admin/classrooms')">
                    class_rooms
                </x-admin.components.sidelink>

                <x-admin.components.sidelink 
                    href="/admin/student" 
                    :active="request()->is('admin/student')">
                    Students
                </x-admin.components.sidelink>

            </ul>

            {{-- ================= TEACHER DATA ================= --}}
            <button type="button"
                class="flex items-center p-2 w-full text-base font-medium 
                text-gray-900 rounded-lg hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                aria-controls="dropdown-teacher" data-collapse-toggle="dropdown-teacher">

                <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path d="M10 2a5 5 0 1 1-5 5 5 5 0 0 1 5-5Z"/>
                </svg>

                <span class="flex-1 ml-3 text-left">Teacher Data</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M5 8l5 5 5-5"/>
                </svg>
            </button>

            <ul id="dropdown-teacher" class="hidden py-2 space-y-1 pl-8">

                <x-admin.components.sidelink 
                    href="/admin/subject" 
                    :active="request()->is('admin/subject')">
                    Subjects
                </x-admin.components.sidelink>

                <x-admin.components.sidelink 
                    href="/admin/teacher" 
                    :active="request()->is('admin/teacher')">
                    Teachers
                </x-admin.components.sidelink>

            </ul>

            {{-- ================= GUARDIAN ================= --}}
            <x-admin.components.sidelink 
                href="/admin/guardian" 
                :active="request()->is('admin/guardian')">

                <x-slot name="icon">
                    <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path d="M10 2a8 8 0 1 1-8 8 8 8 0 0 1 8-8Z"/>
                    </svg>
                </x-slot>

                Guardians
            </x-admin.components.sidelink>

            {{-- ================= LOGOUT ================= --}}
            <li class="pt-4 border-t border-gray-200 dark:border-gray-700">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="flex items-center w-full p-2 text-base font-medium 
                        text-red-600 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        Logout
                    </button>
                </form>
            </li>

        </ul>
    </div>
</aside>
@endauth
