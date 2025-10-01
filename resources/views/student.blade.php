<x-layout>
  <x-slot:judul>Student</x-slot:judul>

  <h1 class="text-2xl font-bold mb-4">Daftar Student</h1>
  <table class="table-auto border-collapse border border-gray-500 w-full text-left">
    <thead>
      <tr class="bg-gray-200">
        <th class="border border-gray-500 px-4 py-2">No</th>
        <th class="border border-gray-500 px-4 py-2">Name</th>
        <th class="border border-gray-500 px-4 py-2">Birthday</th>
        <th class="border border-gray-500 px-4 py-2">Grade</th>
        <th class="border border-gray-500 px-4 py-2">Email</th>
        <th class="border border-gray-500 px-4 py-2">Address</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
      <!-- <tr>
        <td class="border px-4 py-2">{{$loop->iteration}}</td>
        <td class="border px-4 py-2">{{$student["nama"]}}</td>
        <td class="border px-4 py-2">{{$student["birthday"]}}</td>
        <td class="border px-4 py-2">{{$student["grade"]}}</td>
        <td class="border px-4 py-2">{{$student["email"]}}</td>
        <td class="border px-4 py-2">{{$student["address"]}}</td>
      </tr> -->
      <tr>
        <td class="border px-4 py-2">{{ $loop->iteration }}</td>
        <td class="border px-4 py-2">{{ $student->nama }}</td>
        <td class="border px-4 py-2">{{ $student->birthday }}</td>
        <td class="border px-4 py-2">{{ $student->classroom->name }}</td>
        <td class="border px-4 py-2">{{ $student->email }}</td>
        <td class="border px-4 py-2">{{ $student->address }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</x-layout>
