<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- <script src="js/script.js" defer></script> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-base h-screen w-screen flex justify-center items-center">
    <main class="w-[85%] mx-auto md:h-[75%]">
        <div class="flex flex-col md:grid md:grid-cols-4 h-full w-full gap-3 ">
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
                                <input type="checkbox">
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
                            <p class="font-bold text-lg">ROOKT</p>
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
            <div class="bg-green-500 grid grid-rows-2 gap-3 text-2xl">
                <div class="bg-green-200 h-full w-full rounded-xl " id="box-1">
                    <div>
                        <canvas class=" max-h-64" id="age"></canvas>
                    </div>
                    <script>
                    function showAge() {
                        fetch('http://localhost:8000/api/data/gender/count')
                            .then((response) => response.json())
                            .then((data) => {
                                const ctx = document.getElementById('age');
                                console.log(data);
                                new Chart(ctx, {
                                    type: 'doughnut',
                                    data: {
                                        labels: ['Man', 'Vrouw'],
                                        datasets: [{
                                            label: '%',
                                            data: [data.men, data.women],
                                            borderWidth: 1
                                        }]
                                    },
                                });
                            });
                    }

                    showAge();
                    </script>
                </div>
                <div class="bg-green-200 h-full w-full rounded-xl ">

                    <div>
                        <canvas class=" max-h-64" id="bmi"></canvas>
                    </div>
                    <script>
                    function showBmi() {
                        fetch('http://localhost:8000/api/data/bmi/count')
                            .then((response) => response.json())
                            .then((data) => {
                                const ctx = document.getElementById('bmi');
                                console.log(ctx);
                                console.log(data);
                                new Chart(ctx, {
                                    type: 'doughnut',
                                    data: {
                                        labels: ['Ondergewicht', 'Gezond', 'Overgewicht', 'Zwaar overgewicht'],
                                        datasets: [{
                                            label: '',
                                            data: [data.underweight, data.healthy, data.overweight, data.obese],
                                            borderWidth: 1
                                        }]
                                    },
                                });
                            });
                    }
                    showBmi();
                    </script>
                </div>
            </div>
            <div class="bg-green-500 grid grid-rows-2 gap-3 text-2xl">
                <div class="bg-blue h-full w-full rounded-xl" id="box-3">

                    <div>
                        <canvas class=" max-h-64" id="weight"></canvas>
                    </div>
                    <script>
                    function showWeight() {
                        fetch('http://localhost:8000/api/data/weight/count')
                            .then((response) => response.json())
                            .then((data) => {
                                const ctx = document.getElementById('weight');
                                console.log(ctx);
                                console.log(data);
                                new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ['Man', 'Vrouw'],
                                        datasets: [{
                                            label: 'kg',
                                            data: [data.men, data.women],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        plugins: {
                                            title: {
                                                display: true,
                                                text: 'Gemiddelde gewicht'
                                            }
                                        }
                                    }
                                });
                            });
                    }
                    showWeight();
                    </script>

                </div>
                <div class="bg-pink h-full w-full rounded-xl " id="box-4">

                    <div>
                        <canvas class="" id="height"></canvas>
                    </div>
                    <script>
                    function showHeight() {
                        fetch('http://localhost:8000/api/data/height/count')
                            .then((response) => response.json())
                            .then((data) => {
                                const ctx = document.getElementById('height');
                                console.log(ctx);
                                console.log(data);
                                new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ['Man', 'Vrouw'],
                                        datasets: [{
                                            label: 'cm',
                                            data: [data.men, data.women],

                                        }]
                                    },
                                    options: {
                                        plugins: {
                                            title: {
                                                display: true,
                                                text: 'Gemiddelde lengte'
                                            }
                                        }
                                    }
                                });
                            });
                    }
                    showHeight();
                    </script>

                </div>
            </div>
            <div class="bg-green-500 grid grid-rows-2 gap-3 text-2xl">
                <div class="bg-yellow h-full w-full rounded-xl hidden" id="box-5">

                </div>
                <div class="bg-yellow h-full w-full rounded-xl hidden" id="box-6">

                </div>
            </div>
        </div>
    </main>
</body>

</html>