<x-app-layout>
    <div class="container mx-auto py-8">
        <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b">
                <h1 class="text-2xl font-bold">Détails de l'utilisateur</h1>
            </div>

            <div class="p-6">
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Nom :</label>
                    <p class="text-gray-900">{{ $user->name }}</p>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Email :</label>
                    <p class="text-gray-900">{{ $user->email }}</p>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Rôle :</label>
                    <span class="px-3 py-1 rounded-full text-sm {{ $user->role === 'admin' ? 'bg-red-100 text-red-800' : 'bg-green-100 text-green-800' }}">
                        {{ ucfirst($user->role) }}
                    </span>
                </div>

                <div class="mt-6 flex gap-4">
                    <a href="{{ route('users.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                        Retour à la liste
                    </a>
                    <a href="{{ route('users.edit', $user->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                        Modifier
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
