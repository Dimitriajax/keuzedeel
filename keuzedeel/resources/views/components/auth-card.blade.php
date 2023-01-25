<div class="min-h-screen flex flex-col md:flex-row   sm:pt-0 bg-gray-100">
    <div class="w-full p-6 flex justify-between items-center flex-col  shadow-md md:w-1/2 ">
        <div class="flex flex-col">
            {{ $slot }}
        </div>

        <img src="{{asset('cirkels.png')}}" alt="cirkels" class="md:w-full absolute-z-10 object-bottom md:bottom-1 md:h-fit h-36 object-cover">
    </div>
    <div class="h-screen w-full md:w-1/2">
        <img src="{{asset('healthy.jpeg')}}" alt="cirkels" class="w-full h-fit md:h-full object-cover">
    </div>
</div>