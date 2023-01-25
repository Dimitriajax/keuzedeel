<x-app-layout>

    <div class="md:max-w-6xl mx-auto ">
        <h1 class="md:text-5xl text-4xl mt-7 font-bold w-fit ">Test jouw kennis over het menselijk lichaam</h1>

        <div class="pt-8 h-screen flex flex-col gap-3">

            <a href="{{ route('quiz-show', 'bmi') }}" class="">
                Test jouw kennis over BMI
            </a>
            <a href="{{ route('quiz-show', 'weight') }}" class="">
                Test jouw kennis over gewicht
            </a>
            <a href="{{ route('quiz-show', 'height') }}" class="">
                Test jouw kennis over lengte
            </a>
            <a href="{{ route('quiz-show', 'gender') }}" class="">
                Test jouw kennis over geslacht
            </a>
            <a href="{{ route('quiz-show', 'kcal') }}" class="">
                Test jouw kennis over calorien
            </a>
            <a href="{{ route('quiz-show', 'bp') }}" class="">
                Test jouw kennis over bloeddruk
            </a>
        </div>

    </div>

</x-app-layout>