<x-app-layout>


    <div class="overflow-x-hidden bg-gray-100">

        <div class="px-4 py-4">
            <div class="container flex justify-between mx-auto">
                <div class="w-full lg:w-8/12">
                    <div class="flex items-center justify-between">
                        <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Publications</h1>
                        <div>
                            <select
                                class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option>Latest</option>
                                <option>Last Week</option>
                            </select>
                        </div>
                    </div>
                    <br>

                    <!-- component -->
                    <div
                        class="w-full  rounded overflow-hidden border w-full lg:w-6/12 md:w-6/12 bg-white mx-3 md:mx-0 lg:mx-0">
                        <div class="w-full p-3">
                            <div class="flex">
                                <div
                                    class="rounded-full h-8 w-8 bg-gray-500 flex items-center justify-center overflow-hidden">
                                    <img src="https://avatars0.githubusercontent.com/u/38799309?v=4" alt="profilepic">
                                </div>
                                <span class="pt-1 ml-2 font-bold text-sm">Admin</span>
                            </div>
                            <span class="px-2 hover:bg-gray-300 cursor-pointer rounded"><i
                                    class="fas fa-ellipsis-h pt-2 text-lg"></i></span>
                        </div>
                        <img class="w-full bg-cover"
                            src="https://3.bp.blogspot.com/-Chu20FDi9Ek/WoOD-ehQ29I/AAAAAAAAK7U/mc4CAiTYOY8VzOFzBKdR52aLRiyjqu0MwCLcBGAs/s1600/DSC04596%2B%25282%2529.JPG">
                        <div class="px-3 pb-2">
                            <div class="pt-2">
                                <i class="far fa-heart cursor-pointer"></i>
                                <span class="text-sm text-gray-400 font-medium">12 likes</span>
                            </div>
                            <div class="pt-1">
                                <div class="mb-2 text-sm">
                                    <span class="font-medium mr-2">braydoncoyer</span> Lord of the Rings is my favorite
                                    film-series. One day I'll make my way to New Zealand to visit the Hobbiton set!
                                </div>
                            </div>
                            <div class="text-sm mb-2 text-gray-400 cursor-pointer font-medium">View all 14 comments
                            </div>
                            <div class="mb-2">
                                <div class="mb-2 text-sm">
                                    <span class="font-medium mr-2">razzle_dazzle</span> Dude! How cool! I went to New
                                    Zealand last summer and had a blast taking the tour! So much to see! Make sure you
                                    bring a good camera when you go!
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <div class="w-full">
                            <a href="#"
                                class="px-3 py-2 mx-1 font-medium text-gray-500 bg-white rounded-md cursor-not-allowed">
                                previous
                            </a>

                            <a href="#"
                                class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                                1
                            </a>

                            <a href="#"
                                class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                                2
                            </a>

                            <a href="#"
                                class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                                3
                            </a>

                            <a href="#"
                                class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                                Next
                            </a>
                        </div>
                    </div>
                </div>
                @include('partials.modal')
            </div>
        </div>
        @include('partials.footer')
    </div>
</x-app-layout>