<x-app-layout>

    <div class="md:max-w-6xl mx-auto ">
        <h1 class="md:text-5xl text-4xl mt-7 font-bold w-fit ">Test jouw kennis over gewicht</h1>
        <div class=" grid grid-cols-1 md:flex md:justify-between">
            <div class="p-8 mr-12 w-full md:w-2/3">
                <div class="bg-white rounded-md shadow-lg">
                    <form action="" method="post" class="p-4 grid grid-cols-1 gap-3">
                        @csrf
                        <div>
                            <label for="question-one" class="text-gray-900 text-sm font-semibold">Beweging heeft geen invloed op je gewicht</label>
                            <div class="w-2/3 mt-2 relative">
                                <div class="flex items-center">
                                    <input id="true" name="question-one" value="true" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="true" class="ml-3 block text-sm font-medium text-gray-700">Waar</label>
                                </div>

                                <div class="flex items-center">
                                    <input id="false" name="question-one" value="false" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="false" class="ml-3 block text-sm font-medium text-gray-700">Niet waar</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="question-two" class="text-gray-900 text-sm font-semibold">Het gezonde gewicht voor lange mensen is hoger dan bij kleinere mensen</label>
                            <div class="w-2/3 mt-2 relative">
                                <div class="flex items-center">
                                    <input id="true" name="question-two" value="true" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="true" class="ml-3 block text-sm font-medium text-gray-700">Waar</label>
                                </div>

                                <div class="flex items-center">
                                    <input id="false" name="question-two" value="false" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="false" class="ml-3 block text-sm font-medium text-gray-700">Niet waar</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="question-three" class="text-gray-900 text-sm font-semibold">Een persoon valt af wanneer ze meer energie verbranden dan dat ze binnen krijgen</label>
                            <div class="w-2/3 mt-2 relative">
                                <div class="flex items-center">
                                    <input id="true" name="question-three" value="true" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="true" class="ml-3 block text-sm font-medium text-gray-700">Waar</label>
                                </div>

                                <div class="flex items-center">
                                    <input id="false" name="question-three" value="false" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="false" class="ml-3 block text-sm font-medium text-gray-700">Niet waar</label>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Controleer score" class="w-fit border-[3px]  border-[#E2539F] px-6 py-1 rounded-lg ">
                    </form>

                </div>
            </div>

            <div class="w-full md:w-2/3 p-8 pt-4 md:pt-8 ">
                <h2 class="text-3xl font-semibold">Jouw resultaat</h2>
                @if(isset($score))
                <p class="text-2xl mt-8">{{ $score }}%</p>
                @endif
            </div>
        </div>
        <img src="{{asset('cirkels.png')}}" alt="cirkels" class="md:w-full absolute-z-10 md:bottom-4 md:h-fit h-36 object-cover">

</x-app-layout>