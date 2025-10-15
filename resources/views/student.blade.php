dd($students);

<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <h1 class="text-3xl font-bold text-gray-100 mb-4">Students</h1>
    <p class="text-gray-300 mb-6">A list of all students including their name, birthday, grade, email, and address.</p>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-gray-800 text-gray-300 rounded-lg shadow-md">
            <thead class="bg-gray-700 text-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left">No</th>
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Birthdate</th>
                    <th class="px-4 py-2 text-left">Email</th>
                    <th class="px-4 py-2 text-left">Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="border-b border-gray-700 hover:bg-gray-700">
                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2">{{ $student->nama }}</td>
                        <td class="px-4 py-2">{{ $student->birthday }}</td>
                        <td class="px-4 py-2">{{ $student->email }}</td>
                        <td class="px-4 py-2">{{ $student->address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>