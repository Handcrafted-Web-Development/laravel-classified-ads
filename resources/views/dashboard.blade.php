<x-app-layout>
    <x-slot name="header">
        <h2 class="font-base text-xl text-gray-800 leading-tight">
            {{ __('Management space') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="grid grid-rows-1 md:grid-rows-2 gap-6 lg:gap-8">
            <x-nav-link :href="route('ads.index')" :active="request()->routeIs('ads.index')"
                class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20
                flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2
                focus:outline-red-500"
            >
                <div>
                    <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                        <i class="fa-solid fa-book text-red-500 text-xl"></i>
                    </div>

                    <h2 class="mt-6 text-xl font-semibold text-gray-900">List of Classified Ads</h2>

                    <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                        In this area, you can find a list of all your ads. You can edit or delete them as needed.
                        The interface has been completely redesigned to provide you with the utmost simplicity in your interactions
                        with our 'Classified Ads' tool.
                    </p>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                </svg>
            </x-nav-link>
            <x-nav-link :href="route('ads.create')" :active="request()->routeIs('ads.create')"
                class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20
                flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2
                focus:outline-red-500"
            >
                <div>
                    <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                        <i class="fa-solid fa-book-medical text-red-500 text-xl"></i>
                    </div>

                    <h2 class="mt-6 text-xl font-semibold text-gray-900">Create a New Classified Ad</h2>

                    <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                        Find in this space the ability to create as many ads as you want. You can add plenty of details
                        to better describe the items you want to sell, in order to improve your chances of success. The
                        interface has been completely redesigned to provide you with the utmost simplicity in your interactions
                        with our 'Classified Ads' tool.
                    </p>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                </svg>
            </x-nav-link>
            <x-nav-link :href="route('ads')" :active="request()->routeIs('ads')"
                class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20
                flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2
                focus:outline-red-500"
            >
                <div>
                    <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                        <i class="fa-solid fa-heart text-red-500 text-xl"></i>
                    </div>

                    <h2 class="mt-6 text-xl font-semibold text-gray-900">My favorite Classified Ads</h2>

                    <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                        In this space, you'll find a list of all your favorite ads. You can view them and change your mind
                        if you wish. The interface has been completely redesigned to provide you with the utmost simplicity in
                        your interactions with our 'Classified Ads' tool.
                    </p>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                </svg>
            </x-nav-link>
        </div>
        <div class="flex justify-center mt-8 px-0 sm:items-center sm:justify-between">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         class="-mt-px mr-1 w-5 h-5 stroke-gray-400 group-hover:stroke-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                    </svg>
                    <span>Made with Love</span>
                </div>
            </div>

            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </div>
</x-app-layout>
