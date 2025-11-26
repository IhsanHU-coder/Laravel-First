<x-admin.components.layout title="Dashboard">

    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">
            Selamat Datang, Admin 👋
        </h1>
        <p class="text-gray-500 dark:text-gray-300 mt-1">
            Ini adalah ringkasan statistik dan aktivitas sistem.
        </p>
    </div>

    {{-- STAT CARDS --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

        <div class="bg-white dark:bg-gray-800 p-5 rounded-xl shadow-md hover:shadow-lg transition">
            <p class="text-sm text-gray-500 dark:text-gray-400">Total Siswa</p>
            <h2 class="text-3xl font-bold mt-2 text-gray-900 dark:text-white">120</h2>
        </div>

        <div class="bg-white dark:bg-gray-800 p-5 rounded-xl shadow-md hover:shadow-lg transition">
            <p class="text-sm text-gray-500 dark:text-gray-400">Total Guru</p>
            <h2 class="text-3xl font-bold mt-2 text-gray-900 dark:text-white">24</h2>
        </div>

        <div class="bg-white dark:bg-gray-800 p-5 rounded-xl shadow-md hover:shadow-lg transition">
            <p class="text-sm text-gray-500 dark:text-gray-400">Total Kelas</p>
            <h2 class="text-3xl font-bold mt-2 text-gray-900 dark:text-white">8</h2>
        </div>

        <div class="bg-white dark:bg-gray-800 p-5 rounded-xl shadow-md hover:shadow-lg transition">
            <p class="text-sm text-gray-500 dark:text-gray-400">Aktivitas Hari Ini</p>
            <h2 class="text-3xl font-bold mt-2 text-gray-900 dark:text-white">14</h2>
        </div>

    </div>

    {{-- CONTENT BLOCK --}}
    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">
            Ringkasan Sistem
        </h3>
        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
            Ini adalah tampilan dashboard. Kamu bisa menambahkan grafik, tabel,
            log aktivitas, atau menu lainnya di sini sesuai kebutuhan aplikasi.
        </p>
    </div>

</x-admin.components.layout>
