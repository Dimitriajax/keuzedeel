<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/chart.js" defer></script>
</head>

<body class="bg-[#F2F2F2] md:h-screen w-screen flex justify-center md:items-center ">
    <main class="md:w-[90%] md:mx-auto md:h-[75%] md:pt-0 w-full">
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
            <div id="container-block" class="flex md:flex-wrap gap-2 h-full md:w-3/4 items-start md:flex-row flex-col md:pt-0 pt-96">

            </div>
        </div>
    </main>
</body>

</html>