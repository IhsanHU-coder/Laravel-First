<aside id="logo-sidebar" 
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform 
    -translate-x-full border-r border-gray-200 sm:translate-x-0 bg-white dark:bg-gray-800 dark:border-gray-700" 
    aria-label="Sidebar">

  <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
    <ul class="space-y-2 font-medium">

      {{-- Dashboard --}}
      <x-admin.components.sidelink href="/components/admin/dashboard" :active="request()->is('/components/admin/dashboard')">
        <x-slot name="icon">
          <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 
              group-hover:text-gray-900 dark:group-hover:text-white" 
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" 
              viewBox="0 0 22 21">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM8.5 15v-4H5v4Zm8-3.5v3.5H9v-3.5Zm-6-4V7h6v.5Zm8.5 6.5h1.5V9.5H17ZM9 5h8V3H9Z"/>
          </svg>
        </x-slot>
        Dashboard
      </x-admin.components.sidelink>

      <button type="button"
                            class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                            <svg aria-hidden="true"
                                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Pages</span>
                            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
<ul id="dropdown-pages" class="hidden py-2 space-y-1">
      
    <li>

      <button type="button"
                            class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="dropdown-pages-student" data-collapse-toggle="dropdown-pages-student">
                            <svg aria-hidden="true"
                                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Student Data</span>
                            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                      
<ul id="dropdown-pages-student" class="hidden py-2 space-y-1">
      
    <li>
      {{-- class_rooms --}}
      <x-admin.components.sidelink href="/admin/classrooms" :active="request()->is('admin/classrooms')">
        <x-slot name="icon">
          <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 
              group-hover:text-gray-900 dark:group-hover:text-white" 
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" 
              viewBox="0 0 20 20">
            <path d="M4 3h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Zm1 2v10h10V5H5Z"/>
          </svg>
        </x-slot>
        class_rooms
      </x-admin.components.sidelink>
    </li>

    <li>
      {{-- Students --}}
      <x-admin.components.sidelink href="/admin/student" :active="request()->is('admin/student')">
        <x-slot name="icon">
          <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 
              group-hover:text-gray-900 dark:group-hover:text-white" 
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" 
              viewBox="0 0 20 20">
            <path d="M10 2a5 5 0 1 1-5 5 5.006 5.006 0 0 1 5-5Zm0 8a7 7 0 0 0-7 7 1 1 0 0 0 1 1h12a1 1 0 0 0 1-1 7 7 0 0 0-7-7Z"/>
          </svg>
        </x-slot>
        Students
      </x-admin.components.sidelink>
    </li>
  </ul>
  </li>

  <li>

      <button type="button"
                            class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="dropdown-pages-teacher" data-collapse-toggle="dropdown-pages-teacher">
                            <svg aria-hidden="true"
                                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Teacher Data</span>
                            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                      
<ul id="dropdown-pages-teacher" class="hidden py-2 space-y-1">

    <li>
      {{-- Subjects --}}
      <x-admin.components.sidelink href="/subject" :active="request()->is('subject')">
        <x-slot name="icon">
          <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 
              group-hover:text-gray-900 dark:group-hover:text-white" 
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" 
              viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 1 0 8 8 8.009 8.009 0 0 0-8-8Zm0 14a6 6 0 1 1 6-6 6.006 6.006 0 0 1-6 6Z"/>
          </svg>
        </x-slot>
        Subjects
      </x-admin.components.sidelink>
    </li>

    <li>
    {{-- Teachers --}}
      <x-admin.components.sidelink href="/teacher" :active="request()->is('teacher')">
        <x-slot name="icon">
          <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 
              group-hover:text-gray-900 dark:group-hover:text-white" 
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" 
              viewBox="0 0 20 20">
            <path d="M10 2a5 5 0 1 1-5 5 5.006 5.006 0 0 1 5-5Zm0 8a7 7 0 0 0-7 7 1 1 0 0 0 1 1h12a1 1 0 0 0 1-1 7 7 0 0 0-7-7Z"/>
          </svg>
        </x-slot>
        Teachers
      </x-admin.components.sidelink>
    </li>
  </ul>
</li>

    <li>
      {{-- Guardian --}}
      <x-admin.components.sidelink href="/subject" :active="request()->is('subject')">
        <x-slot name="icon">
          <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 
              group-hover:text-gray-900 dark:group-hover:text-white" 
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" 
              viewBox="0 0 20 20">
            <path d="M10 2a8 8 0 1 0 8 8 8.009 8.009 0 0 0-8-8Zm0 14a6 6 0 1 1 6-6 6.006 6.006 0 0 1-6 6Z"/>
          </svg>
        </x-slot>
        Guardians
      </x-admin.components.sidelink>
    </li>
  </ul>

      {{-- Logout --}}
      <x-admin.components.sidelink href="/" :active="request()->is('/')">
        <x-slot name="icon">
          <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 
              group-hover:text-gray-900 dark:group-hover:text-white" 
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" 
              viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M3 3a1 1 0 0 1 1-1h9a1 1 0 0 1 1 1v3h-2V4H5v12h7v-2h2v3a1 1 0 0 1-1 1H4a1 
            1 0 0 1-1-1V3Zm11.707 6.293a1 1 0 0 1 1.414 1.414L14.414 12H9v-2h5.414l.293-.293Z" 
            clip-rule="evenodd"/>
          </svg>
        </x-slot>
        Logout
      </x-admin.components.sidelink>

    </ul>
  </div>
</aside>
