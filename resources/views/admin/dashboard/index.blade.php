<x-admin.components.layout title="Dashboard">

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        {{-- Total Siswa --}}
        <div class="p-5 rounded-xl shadow bg-gradient-to-br from-blue-500 to-blue-700 text-white hover:scale-[1.03] transform transition cursor-pointer">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm opacity-80">Total Siswa</p>
                    <h2 class="text-4xl font-bold mt-1">{{ $totalStudents }}</h2>
                </div>
                <div class="bg-white/20 p-3 rounded-lg">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 20h5V4H2v16h5m3-6l3 3 3-3m-3 3V8" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- Total Guru --}}
        <div class="p-5 rounded-xl shadow bg-gradient-to-br from-purple-500 to-purple-700 text-white hover:scale-[1.03] transform transition cursor-pointer">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm opacity-80">Total Guru</p>
                    <h2 class="text-4xl font-bold mt-1">{{ $totalTeachers }}</h2>
                </div>
                <div class="bg-white/20 p-3 rounded-lg">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0v7" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- Total Kelas --}}
        <div class="p-5 rounded-xl shadow bg-gradient-to-br from-green-500 to-green-700 text-white hover:scale-[1.03] transform transition cursor-pointer">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm opacity-80">Total Kelas</p>
                    <h2 class="text-4xl font-bold mt-1">{{ $totalClasses }}</h2>
                </div>
                <div class="bg-white/20 p-3 rounded-lg">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 6h16M4 10h16M4 14h10M4 18h10" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- Total Mata Pelajaran --}}
        <div class="p-5 rounded-xl shadow bg-gradient-to-br from-amber-500 to-amber-700 text-white hover:scale-[1.03] transform transition cursor-pointer">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm opacity-80">Total Mata Pelajaran</p>
                    <h2 class="text-4xl font-bold mt-1">{{ $totalMapel }}</h2>
                </div>
                <div class="bg-white/20 p-3 rounded-lg">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v12m6-6H6" />
                    </svg>
                </div>
            </div>
        </div>

    </div>

</x-admin.components.layout>
