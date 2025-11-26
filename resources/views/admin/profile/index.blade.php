<x-admin.components.layout title="Profil">

    <div class="max-w-3xl mx-auto mt-6">

        {{-- Header --}}
        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white p-6 rounded-2xl shadow-lg flex items-center gap-4">
            <img 
                src="https://ui-avatars.com/api/?name={{ $nama }}&background=ffffff&color=000000" 
                class="w-20 h-20 rounded-full shadow-md"
            >
            <div>
                <h1 class="text-3xl font-bold">{{ $nama }}</h1>
                <p class="text-sm opacity-90">Profil Pengguna</p>
            </div>
        </div>

        {{-- Content --}}
        <div class="bg-white dark:bg-gray-800 mt-6 p-6 rounded-2xl shadow">

            <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-4">
                Informasi Pribadi
            </h2>

            <div class="space-y-4">

                <div class="flex justify-between border-b pb-2">
                    <span class="text-gray-500">Nama</span>
                    <span class="font-semibold dark:text-white">{{ $nama }}</span>
                </div>

                <div class="flex justify-between border-b pb-2">
                    <span class="text-gray-500">Kelas</span>
                    <span class="font-semibold dark:text-white">{{ $kelas }}</span>
                </div>

                <div class="flex justify-between border-b pb-2">
                    <span class="text-gray-500">Sekolah</span>
                    <span class="font-semibold dark:text-white">{{ $sekolah }}</span>
                </div>

            </div>

            {{-- <div class="mt-6 text-right">
                <button class="px-4 py-2 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition">
                    Edit Profil
                </button>
            </div> --}}

        </div>

    </div>

</x-admin.components.layout>
