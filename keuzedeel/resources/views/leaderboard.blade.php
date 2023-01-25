<x-app-layout>
    <body class="bg-base">
        <a class="space-y-2 left-8 top-6 absolute" href="#">
            <div class="w-9 h-1 bg-black"></div>
            <div class="w-9 h-1 bg-black"></div>
            <div class="w-9 h-1 bg-black"></div>
        </a>
        <section class="max-w-6xl mx-auto md:pt-0 pt-6">
            <h1 class="text-4xl font-bold w-fit mx-auto py-12">Leaderboard</h1>
            <div class="flex justify-between h-32 flex-wrap md:gap-0 gap-4 md:px-0 px-4">
                <div class="max-h-32 bg-pink md:w-32 w-24 rounded-xl flex items-center justify-center md:text-7xl text-4xl">
                    🤠
                </div>
                <div class="max-h-32 bg-blue md:w-32 w-24 rounded-xl flex items-center justify-center md:text-7xl text-4xl">
                    🫀
                </div>
                <div class="max-h-32 bg-green md:w-32 w-24 rounded-xl flex items-center justify-center md:text-7xl text-4xl">
                    🍇
                </div>
                <div class="max-h-32 bg-yellow md:w-32 w-24 rounded-xl flex items-center justify-center md:text-7xl text-4xl">
                    🏄🏽‍♀️
                </div>
                <div class="max-h-32 bg-pink md:w-32 w-24 rounded-xl flex items-center justify-center md:text-7xl text-4xl">
                    ⚖️
                </div>
                <div class="max-h-32 bg-yellow md:w-32 w-24 rounded-xl flex items-center justify-center md:text-7xl text-4xl">
                    ⚧️
                </div>
            </div>

            <div class="max-w-4xl mx-auto my-16 flex flex-col gap-8 md:px-0 px-6">
                <div class="bg-white py-4 px-6 rounded-xl font-bold text-2xl flex justify-between items-center relative">
                    <p><span class="text-pink">1. </span>Tessa</p>
                    <div class="flex gap-3 text-end md:text-4xl text-2xl">
                        <span>🤠</span>
                        <span>🫀</span>
                        <span>🍇</span>
                        <span>🏄🏽‍♀️</span>
                        <span>⚧️</span>
                    </div>
                    <div class="h-9 w-9 rounded-full border-2 border-black flex items-center justify-center text-xl 
                bg-white z-10 absolute -right-4 -top-4">
                        5
                    </div>
                </div>
                <div class="bg-white py-4 px-6 rounded-xl font-bold flex justify-between items-center relative">
                    <p class="text-2xl">2. Achmed</p>
                    <div class="flex gap-3 text-end md:text-4xl text-2xl">
                        <span>🤠</span>
                        <span>🫀</span>
                        <span>🍇</span>
                        <span>⚧️</span>
                    </div>
                    <div class="h-9 w-9 rounded-full border-2 border-black flex items-center justify-center text-xl 
                bg-white z-10 absolute -right-4 -top-4">
                        4
                    </div>
                </div>
                <div class="bg-white py-4 px-6 rounded-xl font-bold text-2xl flex justify-between items-center relative">
                    <p>3. Matthijs</p>
                    <div class="flex gap-3 text-end md:text-4xl text-2xl">
                        <span>🤠</span>
                        <span>🍇</span>
                        <span>⚖️</span>
                    </div>
                    <div class="h-9 w-9 rounded-full border-2 border-black flex items-center justify-center text-xl 
                bg-white z-10 absolute -right-4 -top-4">
                        3
                    </div>
                </div>
                <div class="bg-white py-4 px-6 rounded-xl font-bold text-2xl flex justify-between items-center relative">
                    <p>4. Joep</p>
                    <div class="flex gap-3 text-end md:text-4xl text-2xl">
                        <span>🫀</span>
                        <span>🍇</span>
                        <span>🏄🏽‍♀️</span>
                    </div>
                    <div class="h-9 w-9 rounded-full border-2 border-black flex items-center justify-center text-xl 
                bg-white z-10 absolute -right-4 -top-4">
                        3
                    </div>
                </div>
                <div class="bg-white py-4 px-6 rounded-xl font-bold text-2xl flex justify-between items-center relative">
                    <p>5. Nathima</p>
                    <div class="flex gap-3 text-end md:text-4xl text-2xl">
                        <span>🤠</span>
                    </div>
                    <div class="h-9 w-9 rounded-full border-2 border-black flex items-center justify-center text-xl 
                bg-white z-10 absolute -right-4 -top-4">
                        1
                    </div>
                </div>
            </div>
</x-app-layout>