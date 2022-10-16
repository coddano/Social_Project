<x-app-layout>
    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <br>
          <x-primary-button>  
            <div class="block mb-8">
                <a href="{{route('users.create')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded btn">Ajouter un utilisateur</a>
            </div>
          </x-primary-button> 
          <br> 
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <thead>
                                <tr>
                                    <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nom
                                    </th>

                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Email
                                    </th>

                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Rôles
                                    </th>

                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Action
                                    </th>

                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($users as $user)
                                    
                                
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{$user->id}}

                                        </td>


                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{$user->name}}
                                            
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{$user->email}}
                                            
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{implode(',', $user->roles()->get()->pluck('name')->toArray())}}
                                            
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            @can('edit-users')
                                        <x-primary-button class="ml-4">
                                            <a href="{{route('users.edit', $user->id)}}">Éditer</a>
                                        </x-primary-button>

                                        <x-primary-button class="ml-4">
                                            <a href="{{route('users.show', $user->id)}}">Voir</a>
                                        </x-primary-button>
                                        <br>
                                        <br>
                                        
                                            @endcan
                                            @can('delete-users')
                                            <form action="{{route('users.destroy', $user->id)}}" method="POST" class="inline-block">
                                             @csrf
                                             @method('DELETE')
                                             <x-primary-button type="submit" class="btn btn-warning">Supprimer</x-primary-button>
                                                
                                            </form>
                                            @endcan
                                        </td>
                                    </tr>
                                    @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
