<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <h1 class="text-3xl font-bold text-gray-100 mb-4">Subjects</h1>
    <p class="text-gray-300 mb-6">A list of all subjects including their description and assigned teacher.</p>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-gray-800 text-gray-300 rounded-lg shadow-md">
            <thead class="bg-gray-700 text-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left">No</th>
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Description</th>
                    <th class="px-4 py-2 text-left">Teacher</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($subjects as $i => $subject)
                    <tr class="border-b border-gray-700 hover:bg-gray-700">
                        <td class="px-4 py-2">{{ $i + 1 }}</td>
                        <td class="px-4 py-2">{{ $subject->name }}</td>
                        <td class="px-4 py-2">{{ $subject->description }}</td>
                        <td class="px-4 py-2">{{ $subject->teacher->name ?? '-' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-4 text-gray-400">
                            No subjects found
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layout>