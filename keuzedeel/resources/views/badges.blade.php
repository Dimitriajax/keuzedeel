<x-app-layout>
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
</x-app-layout>