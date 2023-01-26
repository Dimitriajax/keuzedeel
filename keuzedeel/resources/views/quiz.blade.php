<x-app-layout>
    <div class="md:max-w-6xl mx-auto h-[64rem]">
        <h1 class="md:text-5xl text-3xl my-8 font-bold w-fit md:text-start text-center">Test jouw kennis over het menselijk lichaam!</h1>
        <div class="pt-8 flex md:flex-row flex-col gap-10 flex-wrap md:justify-start items-center">
            <a href="{{ route('quiz-show', 'bmi') }}" class="bg-white h-72 w-72 rounded-lg shadow-md px-6 py-6 flex flex-col border-b-[5px] border-b-green font-semibold text-2xl text-gray-600 justify-between">
                Test jouw kennis over BMI
                <img src="{{asset('bmi.png')}}" alt="" class="w-36 mx-auto grayscale">
            </a>
            <a href="{{ route('quiz-show', 'weight') }}" class="bg-white h-72 w-72 rounded-lg shadow-md  px-6 py-6 flex flex-col border-l-[5px] border-l-pink font-semibold text-2xl text-gray-600 justify-between">
                Test jouw kennis over gewicht
                <img src="{{asset('kg.png')}}" alt="" class="w-36 mx-auto grayscale">
            </a>
            <a href="{{ route('quiz-show', 'height') }}" class="bg-white h-72 w-72 rounded-lg shadow-md  px-6 py-6 flex flex-col border-t-[5px] border-t-blue font-semibold text-2xl text-gray-600 justify-between">
                Test jouw kennis over lengte
                <img src="{{asset('lengte.png')}}" alt="" class="w-36 mx-auto grayscale">
            </a>
            <a href="{{ route('quiz-show', 'gender') }}" class="bg-white h-72 w-72 rounded-lg shadow-md  px-6 py-6 flex flex-col  border-r-[5px] border-r-yellow font-semibold text-2xl text-gray-600 justify-between">
                Test jouw kennis over geslacht
                <img src="{{asset('geslacht.png')}}" alt="" class="w-36 mx-auto grayscale">
            </a>
            <a href="{{ route('quiz-show', 'kcal') }}" class="bg-white h-72 w-72 rounded-lg shadow-md  px-6 py-6 flex flex-col border-b-[5px] border-b-orange-500 font-semibold text-2xl text-gray-600 justify-between">
                Test jouw kennis over calorien
                <img src="{{asset('calorien.png')}}" alt="" class="w-36 mx-auto grayscale">
            </a>
            <a href="{{ route('quiz-show', 'bp') }}" class="bg-white h-72 w-72 rounded-lg shadow-md  px-6 py-6 flex flex-col border-r-[5px] border-r-pink font-semibold text-2xl text-gray-600 justify-between">
                Test jouw kennis over bloeddruk
                <img src="{{asset('bloeddruk.png')}}" alt="" class="w-36 mx-auto grayscale">
            </a>
        </div>
    </div>
</x-app-layout>