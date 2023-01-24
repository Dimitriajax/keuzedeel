<x-app-layout>
    <div class="md:max-w-6xl mx-auto ">
        <h1 class="md:text-5xl text-4xl mt-7 font-bold w-fit "">Test jouw kennis over het menselijk lichaam</h1>
        <div class=" grid grid-cols-1 md:flex md:justify-between">
            <div class="p-8 mr-12 w-full md:w-2/3">
                <div class="bg-white rounded-md shadow-lg">
                    <form action="" method="post" class="p-4 grid grid-cols-1 gap-3">
                        @csrf
                        <div>
                            <label for="question-one" class="text-gray-900 text-sm font-semibold">Wat is de afkorting van "Body Mass Index"</label>
                            <div class="w-2/3 mt-2 relative rounded-md border border-gray-500 px-3 py-2 shadow-sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600">
                                <label for="name" class="absolute -top-2 left-2 -mt-px inline-block bg-white px-1 text-xs font-medium text-gray-900">Vraag 1</label>
                                <input type="text" name="question-one" id="question-one" autocomplete="off" class="outline-none block w-full  p-0 text-gray-900 placeholder-gray-500  sm:text-sm">
                            </div>
                        </div>
                        <div>
                            <label for="question-two" class="text-gray-900 text-sm font-semibold">Hoeveel calorien heeft een gemiddeld mens nodig?</label>
                            <div class="w-2/3 mt-2 relative rounded-md border border-gray-500 px-3 py-2 shadow-sm focus-within:border-indigo-600 focus-within:ring-1 focus-within:ring-indigo-600">
                                <label for="name" class="absolute -top-2 left-2 -mt-px inline-block bg-white px-1 text-xs font-medium text-gray-900">Vraag 2</label>
                                <input type="number" name="question-two" id="question-two" autocomplete="off" class="outline-none block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm">
                            </div>
                        </div>
                        <div>
                            <label for="question-three" class="text-gray-900 text-sm font-semibold">'S ochtens ben je langer dan 's avonds</label>
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
                        <input type="submit" value="Controleer score" class="p-2 border-2 border-[#E2539F] ">
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
    </div>
    <img src="{{asset('cirkels.png')}}" alt="cirkels" class="md:w-full absolute-z-10 md:bottom-4 md:h-fit h-36 object-cover">

</x-app-layout>