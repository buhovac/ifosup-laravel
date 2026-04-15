<x-app-layout>
    <div class="container mx-auto py-8">
        <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-6">Modifier l'utilisateur : {{ $user->name }}</h1>

            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT') <div class="mb-4">
                    <label class="block text-sm font-bold mb-2">Nom</label>
                    <input type="text" name="name"
                           value="{{ old('name', $user->name) }}"
                           class="w-full border border-gray-300 px-3 py-2 rounded @error('name') border-red-500 @enderror">
                    @error('name')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2">Email</label>
                    <input type="email" name="email"
                           value="{{ old('email', $user->email) }}"
                           class="w-full border border-gray-300 px-3 py-2 rounded @error('email') border-red-500 @enderror">
                    @error('email')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2">Rôle</label>
                    <select name="role" class="w-full border border-gray-300 px-3 py-2 rounded @error('role') border-red-500 @enderror">
                        <option value="user" {{ old('role', $user->role) === 'user' ? 'selected' : '' }}>Utilisateur</option>
                        <option value="admin" {{ old('role', $user->role) === 'admin' ? 'selected' : '' }}>Administrateur</option>
                    </select>
                    @error('role')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex items-center gap-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">
                        Mettre à jour
                    </button>
                    <a href="{{ route('users.index') }}" class="text-gray-600 hover:underline">
                        Annuler
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
