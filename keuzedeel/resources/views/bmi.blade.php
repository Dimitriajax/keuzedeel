<x-app-layout>
    <div class="md:max-w-6xl mx-auto ">
        <div class="flex flex-col gap-2 md:items-start items-center mb-4">
            <h1 class="md:text-5xl text-4xl mt-7 font-bold w-fit ">Reken jouw BMI uit!</h1>
            <p class="text-xl text-grey-400 font-light w-fit">Body Mass Index</p>
        </div>
        <div class=" flex gap-12">
            <div class="col-span-3 shadow-lg rounded-xl bg-white px-7 py-7 flex flex-col gap-6">
                <form action="" method="POST" class="" id="metric">
                    @csrf
                    <div class="my-4">
                        <fieldset class="mt-4">
                            <legend class="sr-only">Gender</legend>
                            <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                <div class="flex items-center">
                                    <input id="boy" name="gender" type="radio" checked class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="boy" class="ml-3 block text-sm font-medium text-gray-700">Jongen</label>
                                </div>

                                <div class="flex items-center">
                                    <input id="girl" name="gender" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="girl" class="ml-3 block text-sm font-medium text-gray-700">Meisje</label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="flex justify-between flex-wrap gap-2 w-2/3">
                        <div class="relative text-sm md:w-fit w-full">
                            <label for="age" class="absolute bg-white -top-2 left-6 px-1 text-gray-600">Leeftijd</label>
                            <input autocomplete="off" required type="number" id="age" class="border-[1px] rounded-xl md:rounded-2xl border-gray-400 py-3 px-3 md:max-w-[11.5rem] w-full">
                        </div>
                        <div class="relative text-sm md:w-fit w-full">
                            <label for="length" class="absolute bg-white -top-2 left-6 px-1 text-gray-600">Lengte</label>
                            <input autocomplete="off" required type="number" name="height" id="height" class="border-[1px] rounded-xl md:rounded-2xl border-gray-400 py-3 px-3 md:max-w-[11.5rem] w-full">
                        </div>
                        <div class="relative text-sm md:w-fit w-full">
                            <label for="weight" class="absolute bg-white -top-2 left-6 px-1 text-gray-600">Gewicht</label>
                            <input autocomplete="off" required type="number" name="weight" id="weight" class="border-[1px] rounded-xl md:rounded-2xl border-gray-400 py-3 px-3 md:max-w-[11.5rem] w-full">
                        </div>
                    </div>
                    <div class="w-full flex justify-end">
                        <input type="submit" value="Bereken jouw BMI" class="w-fit border-[3px]  border-[#E2539F] px-6 py-1 rounded-lg">
                    </div>
                </form>
            </div>
            @if(isset($bmi))
            <div class="col-span-4 flex flex-col gap-4">
                <h1 class="text-4xl">Jouw resultaten</h1>
                <p class="text-[#1F1F1F] md:w-11/12">
                    Jouw BMI score is: {{ $bmi }}
                </p>
            </div>
        </div>
        @endif
    </div>
    <img src="{{asset('cirkels.png')}}" alt="cirkels" class="md:w-full absolute-z-10 md:bottom-4 md:h-fit h-36 object-cover">
</x-app-layout>