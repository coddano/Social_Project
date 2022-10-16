<x-app-layout>
    <br>
    <div>
        <div class=" w:full max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('users.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <x-input-label for="name" class="block font-medium text-sm text-gray-700">Name</x-input-label>
                            <x-text-input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name', '') }}" />
                            @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <x-input-label for="email" class="block font-medium text-sm text-gray-700">Email</x-input-label>
                            <x-text-input type="email" name="email" id="email" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('email', '') }}" />
                            @error('email')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <x-input-label for="password" class="block font-medium text-sm text-gray-700">Password</x-input-label>
                            <x-text-input type="password" name="password" id="password" class="form-input rounded-md shadow-sm mt-1 block w-full" />
                            @error('password')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <x-input-label for="roles" class="block font-medium text-sm text-gray-700">Roles</x-input-label>
                        
                                @foreach($roles as $role)
                                    <input type="checkbox" class="form-check-input" name="roles[]" value="{{ $role->id }}" id="{{ $role->id }}" @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                    <x-input-label for="{{ $role->id }}" class="form-check-x-input-label">{{ $role->name }}</x-input-label>
                                @endforeach
                                
                            @error('roles')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <x-primary-button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        Créer
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>