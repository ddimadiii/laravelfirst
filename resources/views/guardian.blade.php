<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <h1 class="text-3xl font-bold text-gray-100 mb-4">Guardians</h1>
    <p class="text-gray-300 mb-6">A list of all guardians including their name, job, phone number, and email.</p>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-gray-800 text-gray-300 rounded-lg shadow-md">
            <thead class="bg-gray-700 text-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left">No</th>
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Job</th>
                    <th class="px-4 py-2 text-left">Phone</th>
                    <th class="px-4 py-2 text-left">Email</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($guardians as $i => $g)
                    <tr class="border-b border-gray-700 hover:bg-gray-700">
                        <td class="px-4 py-2">{{ $i + 1 }}</td>
                        <td class="px-4 py-2">{{ $g->name }}</td>
                        <td class="px-4 py-2">{{ $g->job }}</td>
                        <td class="px-4 py-2">{{ $g->phone }}</td>
                        <td class="px-4 py-2">{{ $g->email }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-gray-400">
                            No guardians found
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layout>