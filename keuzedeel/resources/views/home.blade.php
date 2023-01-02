<x-app-layout>



    <div class="bg-base h-screen w-screen flex justify-center items-center">
        <div class=" w-[85%] mx-auto h-[75%]">
            <div class="grid grid-cols-4 h-full w-full gap-3 ">
                <div class="bg-white rounded-xl">
                    <div class="px-6 py-6">
                        <div class="mx-auto w-fit">
                            <h2 class="font-bold text-3xl">Overzicht</h2>
                        </div>
                        <div class="pb-4 pt-10 flex flex-col gap-2">
                            <div class="flex justify-between w-full grid grid-cols-2 place-items-end">
                                <p class="font-bold text-lg">LEEFTIJD</p>
                                <label class="switch">
                                    <input type="checkbox" id="leeftijd">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="flex justify-between w-full grid grid-cols-2 place-items-end ">
                                <p class="font-bold text-lg text-end">BMI</p>
                                <label class="switch">
                                    <input type="checkbox" id="bmi">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="flex justify-between w-full grid grid-cols-2 place-items-end">
                                <p class="font-bold text-lg">BUIKOMTREK</p>
                                <label class="switch">
                                    <input type="checkbox" id="buikomtrek">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="flex justify-between w-full grid grid-cols-2 place-items-end">
                                <p class="font-bold text-lg">LENGTE</p>
                                <label class="switch">
                                    <input type="checkbox" id="lengte">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="flex justify-between w-full grid grid-cols-2 place-items-end">
                                <p class="font-bold text-lg">GEWICHT</p>
                                <label class="switch">
                                    <input type="checkbox" id="gewicht">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="flex justify-between w-full grid grid-cols-2 place-items-end">
                                <p class="font-bold text-lg">VEGATARIER</p>
                                <label class="switch">
                                    <input type="checkbox" id="vegatarier">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="flex justify-between w-full grid grid-cols-2 place-items-end">
                                <p class="font-bold text-lg">GEZOND.</p>
                                <label class="switch">
                                    <input type="checkbox" id="gezondA">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="flex justify-between w-full grid grid-cols-2 place-items-end">
                                <p class="font-bold text-lg">GEZOND.</p>
                                <label class="switch">
                                    <input type="checkbox" id="gezondB">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="flex justify-between w-full grid grid-cols-2 place-items-end">
                                <p class="font-bold text-lg">STRESS</p>
                                <label class="switch">
                                    <input type="checkbox" id="stress">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="flex justify-between w-full grid grid-cols-2 place-items-end">
                                <p class="font-bold text-lg">DEPRESSIE</p>
                                <label class="switch">
                                    <input type="checkbox" id="depressie">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <canvas id="myChart"></canvas>
                <canvas id="myChart1"></canvas>

                <div class="bg-green-500 grid grid-rows-2 gap-3 text-2xl">
                    <div class="bg-pink h-full w-full rounded-xl hidden" id="box-1">
                    </div>
                    <div class="bg-blue h-full w-full rounded-xl hidden" id="box-2">

                    </div>
                </div>
                <div class="bg-green-500 grid grid-rows-2 gap-3 text-2xl">
                    <div class="bg-blue h-full w-full rounded-xl hidden" id="box-3">

                    </div>
                    <div class="bg-pink h-full w-full rounded-xl hidden" id="box-4">

                    </div>
                </div>
                <div class="bg-green-500 grid grid-rows-2 gap-3 text-2xl">
                    <div class="bg-yellow h-full w-full rounded-xl hidden" id="box-5">

                    </div>
                    <div class="bg-yellow h-full w-full rounded-xl hidden" id="box-6">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</x-app-layout>