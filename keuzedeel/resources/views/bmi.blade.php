<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-[#F2F2F2]">
    <main class="md:max-w-6xl mx-auto">
        <div class="flex flex-col gap-2 md:items-start items-center">
            <h1 class="md:text-5xl text-4xl mt-14 font-bold w-fit ">Reken jouw BMI uit!</h1>
            <p class="text-xl text-grey-400 font-light w-fit">body mass index</p>
        </div>
        <div class="md:grid md:grid-cols-7 md:gap-24 gap-10 md:py-14 py-10 flex flex-col md:px-0 px-4">
            <div class="col-span-3 shadow-lg rounded-xl bg-white px-7 py-7 flex flex-col gap-6">
                <div class="flex justify-between pb-6">
                    <div class="flex gap-4">
                        <p class="font-bold text-lg">JONGEN</p>
                        <label class="switch">
                            <input type="checkbox" id="Gender" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="flex gap-4">
                        <p class="font-bold text-lg">MEISJE</p>
                        <label class="switch">
                            <input type="checkbox" id="Gender">
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div class="flex justify-between flex-wrap gap-y-8">
                    <div class="relative text-sm md:w-fit w-full">
                        <label for="age" class="absolute bg-white -top-2 left-6 px-1 text-gray-600">Leeftijd</label>
                        <input type="text" id="age" class="border-[1px] rounded-xl md:rounded-2xl border-gray-400 py-3 px-3 md:max-w-[11.5rem] w-full">
                    </div>
                    <div class="relative text-sm md:w-fit w-full">
                        <label for="length" class="absolute bg-white -top-2 left-6 px-1 text-gray-600">Lengte</label>
                        <input type="text" id="length" class="border-[1px] rounded-xl md:rounded-2xl border-gray-400 py-3 px-3 md:max-w-[11.5rem] w-full">
                    </div>
                    <div class="relative text-sm md:w-fit w-full">
                        <label for="weight" class="absolute bg-white -top-2 left-6 px-1 text-gray-600">Gewicht</label>
                        <input type="text" id="weight" class="border-[1px] rounded-xl md:rounded-2xl border-gray-400 py-3 px-3 md:max-w-[11.5rem] w-full">
                    </div>
                </div>

                <div class="w-full flex justify-end">
                    <a href="#" class="w-fit border-[3px] font-bold  border-[#E2539F] px-6 py-1 rounded-lg">Bereken</a>
                </div>

            </div>
            <div class="col-span-4 flex flex-col gap-4">
                <h1 class="text-4xl">Jouw resultaten</h1>
                <p class="text-[#1F1F1F] md:w-11/12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed 
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>
        </div>
    </main>
    <img src="{{asset('cirkels.png')}}" alt="cirkels" class="md:w-full absolute -z-10 md:bottom-4 md:h-fit h-36 object-cover">
</body>

</html>