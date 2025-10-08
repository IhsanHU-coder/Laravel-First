<x-layout>
  <x-slot:judul>Teacher</x-slot:judul>

  <h1 class="text-2xl font-bold mb-4">min 5 Data Guru</h1>
  <table class="table-auto border-collapse border border-gray-500 w-full text-left">
    <thead>
      <tr class="bg-gray-200">
        <th class="border border-gray-500 px-4 py-2">No</th>
        <th class="border border-gray-500 px-4 py-2">Name</th>
        <th class="border border-gray-500 px-4 py-2">Subject Name</th>
        <th class="border border-gray-500 px-4 py-2">Phone</th>
        <th class="border border-gray-500 px-4 py-2">Address</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($teachers as $teacher)
      <!-- <tr>
        <td class="border px-4 py-2">{{$loop->iteration}}</td>
        <td class="border px-4 py-2">{{$teacher["nama"]}}</td>
        <td class="border px-4 py-2">{{$teacher["subject_id"]}}</td>
        <td class="border px-4 py-2">{{$teacher["phone"]}}</td>
        <td class="border px-4 py-2">{{$teacher["address"]}}</td>
      </tr> -->
      <tr>
        <td class="border px-4 py-2">{{ $loop->iteration }}</td>
        <td class="border px-4 py-2">{{ $teacher->nama}}</td>
        <td class="border px-4 py-2">{{ $teacher->subject->name}}</td>
        <td class="border px-4 py-2">{{ $teacher->phone }}</td>
        <td class="border px-4 py-2">{{ $teacher->address }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</x-layout>
