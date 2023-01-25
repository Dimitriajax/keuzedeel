<x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/chart.js" defer></script>

    <div class="min-h-fit pb-12  ">
        <div class="h-screen ">
            <div class="absolute  right-96 md:block hidden">
                <x-fruit-bord />
            </div>
            <div class="absolute -z-1 left-0 top-20 flex gap-8 h-82 w-fit">
                <x-gezond-bord />
                <div class="h-full flex flex-col gap-4 w-96 mt-14">
                    <h2 class="text-4xl font-bold">'Gezond'</h2>
                    <p class="pl-4 text-sm md:block hidden">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="absolute -z-10 top-72 right-0 flex gap-8 h-82 flex-row-reverse">
                <x-vitaal-bord />
                <div class="h-full flex flex-col gap-4 w-96 mt-14 text-right">
                    <h2 class="text-4xl font-bold">'Vitaal'</h2>
                    <p class="pr-4 text-sm md:block hidden">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="md:block hidden">
                <div class="w-0 h-0 absolute bottom-0 left-0
                border-b-[350px] border-b-white
                border-r-[350px] border-r-transparent">
                </div>
                <a href="#dashboard">
                    <img src="{{asset('Pijl.png')}}" alt="Arrows" class="h-32 absolute top-[38rem] left-20">
                </a>
            </div>
        </div>
        <div class="">
            <section class="md:h-[48rem] h-fit relative">
                <div class="md:max-w-6xl mx-auto flex items-center flex-col pb-10 relative h-full md:px-0 px-4">
                    <h2 class="text-5xl font-bold w-fit pb-14 ">ONTDEK</h2>
                    <div class="relative w-full flex md:flex-row flex-col md:items-start items-center justify-between md:h-[42rem] md:gap-0 gap-6">
                        <div class="h-72 w-72 border-pink border-8 bg-pink bg-opacity-20 rounded-xl left-0">
                            <a href="{{ route('quiz')}}">
                                <div class="flex px-4 py-4 flex-col gap-3">
                                    <h3 class="text-2xl font-bold pt-8">Test je kennis</h3>
                                    <span class="text-5xl">📝</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                </div>
                            </a>
                        </div>
                        <div class="md:flex absolute hidden h-40 w-40 bg-[#FFEB50] rounded-xl left-40 bottom-14">
                        </div>
                        <div class="h-72 w-72 border-blue border-8 bg-blue bg-opacity-20 rounded-xl md:absolute top-24 left-0 right-0 ml-auto mr-auto">
                            <a href="{{ route('bereken', 'bmi') }}">
                                <div class="flex px-4 py-4 flex-col gap-3 h-full relative items-center">
                                    <h3 class="text-2xl font-bold pt-6">Reken jouw BMI uit!</h3>
                                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <span class="text-6xl absolute bottom-0 right-10">⚖️</span>
                                </div>
                            </a>
                        </div>
                        <div class="md:flex hidden h-32 w-32 bg-green rounded-xl right-52 top-0 absolute flex items-center flex-col justify-center">
                            <div class="px-4 py-4 h-full w-full flex justify-center">
                                <div class="h-12 w-12 bg-white rounded-full"></div>
                                <div class="h-8 w-8 bg-gray-300 rounded-full self-end"></div>
                            </div>
                        </div>
                        <div class="h-72 w-72 border-yellow border-8 bg-yellow bg-opacity-20 rounded-xl md:absolute top-48 right-0">
                            <div class="flex px-4 py-4 flex-col gap-3 h-full relative md:items-right">
                                <h3 class="text-2xl font-bold pt-16 text-right">Verdien badges</h3>
                                <p class="text-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <span class="text-6xl absolute top-0 left-4">🎖️</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="w-0 h-0 absolute bottom-0 right-0 md:block hidden
                border-b-[200px] border-b-white
                border-l-[200px] border-l-transparent">
                </div>
            </section>

            <section class="bg-white md:h-80 h-fit md:py-0 py-4 flex items-center">
                <div class="max-w-6xl mx-auto flex items-center justify-between md:px-0 px-4">
                    <div class="flex flex-col gap-4">
                        <h2 class="text-4xl font-bold w-fit md:pb-0 pb-4">Lorem ipsum dolor</h2>
                        <div class="md:block flex flex-col gap-10">
                            <p class="md:float-left md:w-5/12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Sem fringilla
                                ut morbi tincidunt augue interdum velit euismod. Porttitor leo a diam
                                sollicitudin tempor.</p>
                            <p class="md:float-right md:w-5/12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Sem fringilla
                                ut morbi tincidunt augue interdum velit euismod. Porttitor leo a diam
                                sollicitudin tempor.</p>
                        </div>
                    </div>
                </div>
            </section>


            <div id="dashboard" class=" flex justify-center w-full  mt-12">

                <h2 class="text-5xl font-bold w-fit">DASHBOARD</h2>
            </div>
            <section class="md:h-fit w-screen flex justify-center md:items-center">
                <div class="md:max-w-7xl md:mx-auto h-full w-full md:py-20">
                    <div class="flex h-full w-full flex gap-2 md:flex-row flex-col">
                        <div class="bg-white rounded-xl md:w-1/4 h-fit md:static fixed w-full">
                            <div class="px-4 py-6">
                                <div class="mx-auto md:w-fit w-full">
                                    <h2 class="font-bold text-3xl">Overzicht</h2>
                                </div>
                                <div class="pb-4 pt-10 flex flex-col gap-3">
                                    <div class="flex justify-between w-full grid grid-cols-2 place-items-center">
                                        <p class="font-bold text-lg">GESLACHT</p>
                                        <label class="switch">
                                            <input type="checkbox" id="Gender">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="flex justify-between w-full grid grid-cols-2 place-items-center">
                                        <p class="font-bold text-lg">LENGTE</p>
                                        <label class="switch">
                                            <input type="checkbox" id="Height">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="flex justify-between w-full grid grid-cols-2 place-items-center">
                                        <p class="font-bold text-lg">GEWICHT</p>
                                        <label class="switch">
                                            <input type="checkbox" id="Weight">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="flex justify-between w-full grid grid-cols-2 place-items-center">
                                        <p class="font-bold text-lg">BLOEDDRUK</p>
                                        <label class="switch">
                                            <input type="checkbox" id="DBP">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="flex justify-between w-full grid grid-cols-2 place-items-center">
                                        <p class="font-bold text-lg">KCAL</p>
                                        <label class="switch">
                                            <input type="checkbox" id="KCAL">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="flex justify-between w-full grid grid-cols-2 place-items-center ">
                                        <p class="font-bold text-lg text-end">BMI</p>
                                        <label class="switch">
                                            <input type="checkbox" id="BMI">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="container-block" class="flex md:flex-wrap gap-2 md:h-screen md:w-3/4 items-start md:flex-row flex-col md:pt-0 pt-96">

                        </div>
                    </div>
                </div>
            </section>
            <div class="max-w-6xl mx-auto my-10">
                <section>
                    <h1 class="mb-8 text-5xl font-bold md:mx-0 mx-auto w-fit">Jouw badges</h1>
                    <div class="flex flex-wrap gap-x-10 gap-y-14 justify-between md:flex-row flex-col md:items-start items-center">
                        @foreach ($badges as $badge)
                        <div class="h-64 bg-white shadow-lg w-56 rounded-lg px-4 py-4 flex items-center flex-col justify-between border-b-[5px] border-b-pink-400">
                            <div class="flex items-center flex-col">
                                <img src="{{ asset($badge->badge_url) }}" alt="badge {{$badge->title}}" class="h-36">
                                <p class="text-2xl font-bold">{{ $badge->title }}</p>
                            </div>
                            <span class="text-gray-500">{{ $badge->created_at->format('F j, Y')}}</span>
                        </div>
                        @endforeach
                    </div>
                    <hr class="my-10 border-2 border-gray-200">
                </section>
                <section>
                    <h2 class="text-3xl font-bold mb-8 md:mx-0 mx-auto w-fit">Nog te behalen</h2>
                    <div class="flex flex-wrap gap-y-6 md:gap-x-10 md:gap-y-14  justify-between md:items-start items-center md:flex-row flex-col">
                        @foreach ($lockedBadges as $badge)
                        <div class="h-64 bg-white shadow-lg w-56 rounded-lg px-4 py-4 flex items-center flex-col justify-between border-b-[5px] border-b-[#40EEEE]">
                            <div class="flex items-center flex-col">
                                <img src="{{ asset($badge->badge_url) }}" alt="badge {{$badge->title}}" class="h-36 grayscale">
                                <p class="text-2xl font-bold">{{ $badge->title }}</p>
                            </div>
                            <span class="text-gray-500">{{ $badge->created_at->format('F j, Y')}}</span>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>

</x-app-layout>