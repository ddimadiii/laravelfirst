<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <h1 class="text-3xl font-bold text-gray-100 mb-4">Classrooms</h1>
    <p class="text-gray-300 mb-6">A list of all classrooms available in the school.</p>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-gray-800 text-gray-300 rounded-lg shadow-md">
            <thead class="bg-gray-700 text-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left">No</th>
                    <th class="px-4 py-2 text-left">Class Name</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($classrooms as $i => $c)
                    <tr class="border-b border-gray-700 hover:bg-gray-700">
                        <td class="px-4 py-2">{{ $i + 1 }}</td>
                        <td class="px-4 py-2">{{ $c->class_name }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="text-center py-4 text-gray-400">
                            No classrooms found
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layout>