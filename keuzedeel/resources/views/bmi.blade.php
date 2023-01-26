<x-app-layout>
    <div class="md:max-w-6xl mx-auto ">
        <div class="flex flex-col gap-2 md:items-start items-center mb-10">
            <h1 class="md:text-5xl text-4xl mt-7 font-bold w-fit ">Reken jouw BMI uit!</h1>
            <p class="text-xl text-grey-400 font-light w-fit">Body Mass Index</p>
        </div>
        <div class=" md:grid grid-cols-7 flex gap-12">
            <div class="col-span-3 shadow-lg rounded-xl bg-white px-7 py-7 flex flex-col gap-6 h-fit">
                <form action="" method="POST" class="flex flex-col gap-8 justify-between" id="metric">
                    @csrf
                    <div>
                        <fieldset class="">
                            <legend class="sr-only">Gender</legend>
                            <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                <div class="flex items-center gap-2">
                                    <span class="text-gray-700 font-bold">Jongen</span>
                                    <label for="boy" class="switch">
                                        <input id="boy" name="gender" type="radio">
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                                <div class="flex items-center gap-2">
                                    <span class="text-gray-700 font-bold">Meisje</span>
                                    <label for="girl" class="switch">
                                        <input id="girl" name="gender" type="radio">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="flex justify-between flex-wrap gap-2 gap-y-8">
                        <div class="relative text-sm md:w-fit w-full">
                            <label for="age" class="absolute bg-white -top-2 left-6 px-1 text-gray-600">Leeftijd</label>
                            <input autocomplete="off" required type="number" id="age" class="border-[1px] rounded-xl md:rounded-xl border-gray-400 py-3 px-3 md:max-w-[11.5rem] w-full">
                        </div>
                        <div class="relative text-sm md:w-fit w-full">
                            <label for="length" class="absolute bg-white -top-2 left-6 px-1 text-gray-600">Lengte</label>
                            <input autocomplete="off" required type="number" name="height" id="height" class="border-[1px] rounded-xl md:rounded-xl border-gray-400 py-3 px-3 md:max-w-[11.5rem] w-full">
                        </div>
                        <div class="relative text-sm md:w-fit w-full">
                            <label for="weight" class="absolute bg-white -top-2 left-6 px-1 text-gray-600">Gewicht</label>
                            <input autocomplete="off" required type="number" name="weight" id="weight" class="border-[1px] rounded-xl md:rounded-xl border-gray-400 py-3 px-3 md:max-w-[11.5rem] w-full">
                        </div>
                    </div>
                    <div class="w-full flex justify-end">
                        <input type="submit" value="Bereken jouw BMI" class="w-fit border-[3px]  border-[#E2539F] px-4 py-1 rounded-lg font-semibold">
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
    {{-- <img src="{{asset('cirkels.png')}}" alt="cirkels" class="md:w-full absolute-z-10 md:bottom-4 md:h-fit h-36 object-cover"> --}}
</x-app-layout>