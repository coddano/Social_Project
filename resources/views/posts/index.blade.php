<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Liste des postulations
        </h2>
    </x-slot>

    <!-- component -->
    <div class="overflow-x-auto">
        <div class=" bg-gray-100 flex items-center justify-center bg-gray-100 ">
            <div class="w-full">
                <div class="bg-white shadow-md rounded my-6">
                    <table class=" w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">ID</th>
                                <th class="py-3 px-6 text-left">Nom</th>
                                <th class="py-3 px-6 text-center">Prénom</th>
                                <th class="py-3 px-6 text-center">Age</th>
                                <th class="py-3 px-6 text-center">N° Tél</th>
                                <th class="py-3 px-6 text-center">2 Derniers Diplômes</th>
                                <th class="py-3 px-6 text-center">2 Dernières expériences professionnelles</th>
                                <th class="py-3 px-6 text-center">Maitrises de l'outil informatique</th>
                                <th class="py-3 px-6 text-center">Critère de notation
                                    <th>Maitrises de l'outil informatique</th>
                                </th>

                            </tr>

                        </thead>
                        @foreach ($posts as $post)
                            
                        
                        <tbody class="text-gray-600 text-sm font-light">
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <span class="font-medium">{{$post->id}}</span>
                                </td>
                                <td class="py-3 px-6 text-left">
                                        <span>{{$post->name}}</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span>{{$post->prenom}}</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span
                                    <span>{{$post->age}}</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span>{{$post->number}}</span>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>