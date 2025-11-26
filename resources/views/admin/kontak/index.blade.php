<x-admin.components.layout title="Kontak">

    <x-slot:judul>Kontak</x-slot:judul>

    <div class="max-w-3xl mx-auto mt-8">

        {{-- Header --}}
        <div class="bg-gradient-to-r from-purple-500 to-pink-500 text-white p-6 rounded-2xl shadow-lg">
            <h1 class="text-3xl font-bold">Kontak</h1>
            <p class="opacity-90 text-sm">Informasi kontak resmi</p>
        </div>

        {{-- Card Kontak --}}
        <div class="bg-white dark:bg-gray-800 mt-6 p-6 rounded-2xl shadow space-y-4">

            <div class="flex items-center gap-4 p-4 rounded-xl bg-gray-50 dark:bg-gray-700">
                <div class="bg-purple-500 text-white p-3 rounded-xl">
                    📧
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Email</p>
                    <p class="font-semibold dark:text-white">ihsanhilmi.u@gmail.com</p>
                </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-gray-50 dark:bg-gray-700">
                <div class="bg-pink-500 text-white p-3 rounded-xl">
                    📱
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Nomor HP</p>
                    <p class="font-semibold dark:text-white">0856-1414-316</p>
                </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-gray-50 dark:bg-gray-700">
                <div class="bg-indigo-500 text-white p-3 rounded-xl">
                    📍
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Lokasi</p>
                    <p class="font-semibold dark:text-white">Indonesia</p>
                </div>
            </div>

        </div>

    </div>

</x-admin.components.layout>
