<x-app-layout>
    <x-slot name="header">
        <h2 class="font-base text-xl text-gray-800 leading-tight">
            {{ $ad->title }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    @if($ad->exchange)
                        <p class="inline-block h-full bg-green-100 capitalize text-xs w-max p-1 rounded text-green-700">
                            Exchange</p>
                    @elseif($ad->exchange === 0)
                        <p class="bg-red-100 capitalize text-xs w-max p-1 rounded text-red-700">Exchange</p>
                    @endif
                    <p class="text-sm"><span>Due date : </span>{{ $ad->due_date }}</p>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $ad->title }}</h2>
                <p class="mb-5 font-light text-gray-500">{{ $ad->description }}</p>
                @if($file)
                    <img class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" src="{{ asset($file) }}" alt="image description">
                @endif
                <div class="flex gap-2.5 my-5">
                    @if($ad->category_name)
                        <p class="inline-block h-full bg-purple-100 capitalize text-xs w-max p-1 rounded text-purple-700">{{$ad->category_name}}</p>
                    @endif
                    @if($ad->state_name)
                        <p class="inline-block h-full bg-blue-100 capitalize text-xs w-max p-1 rounded text-blue-700">{{$ad->state_name}}</p>
                    @endif
                    @if($ad->delivery_name)
                        <p class="inline-block h-full bg-yellow-100 capitalize text-xs w-max p-1 rounded text-yellow-700">{{$ad->delivery_name}}</p>
                    @endif
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <img class="w-7 h-7 rounded-full"
                             src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                             alt="{{ $user->name }} avatar"/>
                        <span class="font-medium">{{ $user->name }}</span>
                    </div>
                    <x-nav-link :href="route('ads.edit', $ad->id)" :active="request()->routeIs('ads.edit')">
                        <i class="fa-solid fa-pen"></i>
                    </x-nav-link>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
