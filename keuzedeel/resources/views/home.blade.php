<x-app-layout>



    <div class="bg-base  w-full pt-2 flex justify-center items-center">
        <div class="w-[85%] mx-auto h-[75%]">
            <div class="grid grid-cols-4 h-full w-full gap-3 ">
                <div class="bg-white rounded-xl">
                    <div class="px-6 py-6">
                        <div class="mx-auto w-fit">
                            <h2 class="font-bold text-3xl">Overzicht</h2>
                        </div>
                        @foreach($colomns as $colomn)
                        <div class="pb-4 pt-10 flex flex-col gap-2">
                            <div class="flex justify-between w-full grid grid-cols-2 place-items-end">
                                <p class="font-bold text-lg uppercase">{{ $colomn }}</p>
                                <label class="switch">
                                    <input type="checkbox" id="{{ $colomn }}">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>


                <div class="bg-green-500 grid grid-rows-2 gap-3 text-2xl">
                    <div class="bg-green-200 h-full w-full rounded-xl hidden" id="box-1">
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="bg-green-300 h-full w-full rounded-xl hidden" id="box-2">

                    </div>
                </div>
                <div class="bg-red-500 grid grid-rows-2 gap-3 text-2xl">
                    <div class="bg-red-200  h-full w-full rounded-xl hidden" id="box-3">

                    </div>
                    <div class="bg-red-300 -full w-full rounded-xl hidden" id="box-4">

                    </div>
                </div>
                <div class="bg-blue-500 grid grid-rows-2 gap-3 text-2xl">
                    <div class="bg-blue-200 h-full w-full rounded-xl hidden" id="box-5">

                    </div>
                    <div class="bg-blue-300 h-full w-full rounded-xl hidden" id="box-6">

                    </div>
                </div>
            </div>

        </div>
        <script src="/js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</x-app-layout>