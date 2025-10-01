<x-layout>
  <x-slot:judul>Guardian</x-slot:judul>

  <h1 class="text-2xl font-bold mb-4">Daftar Guardian</h1>
  <table class="table-auto border-collapse border border-gray-500 w-full text-left">
    <thead>
      <tr class="bg-gray-200">
        <th class="border border-gray-500 px-4 py-2">No</th>
        <th class="border border-gray-500 px-4 py-2">Name</th>
        <th class="border border-gray-500 px-4 py-2">job</th>
        <th class="border border-gray-500 px-4 py-2">phone</th>
        <th class="border border-gray-500 px-4 py-2">Email</th>
        <th class="border border-gray-500 px-4 py-2">Address</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($guardians as $guardian)
      <tr>
        <td class="border px-4 py-2">{{$loop->iteration}}</td>
        <td class="border px-4 py-2">{{$guardian["nama"]}}</td>
        <td class="border px-4 py-2">{{$guardian["job"]}}</td>
        <td class="border px-4 py-2">{{$guardian["phone"]}}</td>
        <td class="border px-4 py-2">{{$guardian["email"]}}</td>
        <td class="border px-4 py-2">{{$guardian["address"]}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</x-layout>
