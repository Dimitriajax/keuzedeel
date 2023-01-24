<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jouw verdiende badges') }}
        </h2>
    </x-slot>
    <div class="h-screen ">

        <div class="m-4 bg-white p-4 rounded-xl shadow-lg grid grid-cols-1 gap-3">
            @foreach($badges as $badge)
            <div class="flex p-4">
                <div class="h-20 w-20 ">
                    <img class="object-cover" src=" {{ $badge->badge_url }}" alt="">
                </div>

                <div class="flex flex-col justify-between pl-4">
                    <div>
                        <p class="text-xl font-semibold">{{ $badge->title }}</p>
                        <p class="text-md">{{ $badge->description}}</p>
                    </div>
                    <p class="text-sm italic">Gehaald op: {{ $badge->created_at->format('F j, Y') }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</x-app-layout>