<x-app-layout>
    <x-slot name="header">
        <h2 class="font-base text-xl text-gray-800 leading-tight">
            {{ __('Classified Ads space') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid gap-5 p-3 text-gray-900">
                    <div class="bg-white rounded">
                        @foreach($ads as $ad)
                            <div class="grid">
                                <div class="mb-2 p-3 rounded shadow-sm border-gray-100 border-2">
                                    <div class="flex justify-between">
                                        @if($ad->exchange)
                                            <p class="bg-green-100 capitalize text-xs w-max p-1 rounded text-green-700 mb-3">Exchange</p>
                                        @elseif($ad->exchange === 0)
                                            <p class="bg-red-100 capitalize text-xs w-max p-1 rounded text-red-700 mb-3">Exchange</p>
                                        @endif
                                        <div class="flex gap-1">
                                            <form method="POST" action="{{ route('ads.destroy', $ad->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-grey-900 text-black hover:text-red-300">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <h3 class="text-sm text-gray-700 mb-3">{{ $ad->title }}</h3>
                                    <p class="text-xs w-max text-gray-700 mb-3">{{ $ad->description }}</p>
                                    <p class="text-xs text-gray-500 mb-3">{{ $ad->due_date }}</p>
                                    @if ($files[$ad->id])
                                        <img class="mx-auto max-h-[500px] max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" src="{{ asset($files[$ad->id]) }}" alt="Image de la tâche">
                                    @endif
                                    <x-nav-link :href="route('ads.show', $ad->id)" :active="request()->routeIs('ads.show')">
                                        <i class="fa-solid fa-eye"></i>
                                    </x-nav-link>
                                </div>
                            </div>

                        @endforeach
                        <div class="grid text-gray-300">
                            <x-nav-link :href="route('ads.create')"
                                        :active="request()->routeIs('ads.create')">
                                <p class="rounded mr-2 text-2xl">+</p>
                                <p class="pt-1 rounded text-sm">New</p>
                            </x-nav-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
