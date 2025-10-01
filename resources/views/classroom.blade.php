<x-layout>
  <x-slot:judul>Classroom</x-slot:judul>

  <h1 class="text-2xl font-bold mb-4">Daftar Classroom</h1>
  <table class="table-auto border-collapse border border-gray-500 w-full text-left">
    <thead>
      <tr class="bg-gray-200">
        <th class="border border-gray-500 px-4 py-2">No</th>
        <th class="border border-gray-500 px-4 py-2">Name</th>
        <th class="border border-gray-500 px-4 py-2">Student List</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($classrooms as $classroom)
      <tr class = "odd:bg-white even:bg-gray-50 hover:bg-gray-100 transition">
        <td class="border px-4 py-2">{{ $loop->iteration }}</td>
        <td class="border px-4 py-2">{{ $classroom["name"] }}</td>
        <td class="border px-4 py-2">
            @foreach ($classroom->students as $student)
            {{ $student->nama }} </br>
            @endforeach
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</x-layout>
