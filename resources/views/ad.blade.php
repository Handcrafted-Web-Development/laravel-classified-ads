<x-guest-layout>
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 192.756 192.756">
                    <g fill-rule="evenodd" clip-rule="evenodd">
                        <path fill="none" d="M0 0h192.756v192.756H0V0z"/>
                        <path fill="#fff"
                              d="M96.228 61.394H77.871v45.592h16.1l.301-33.404 14.295 41.68v-8.426l26.031.15h1.646c1.004-3.311 1.514-6.879 1.514-10.684 0-20.914-14.596-34.908-41.53-34.908zm-18.357 48.452v16.852l-8.164-16.852H19.098L8.504 131.213h16.853l4.514-10.082h28.288l4.364 10.082h33.705c9.329 0 17.003-1.055 24.376-5.268 6.988-4.008 11.898-9.457 14.623-16.1h-24.855l.451 17.756L96.679 88.78l.452 21.066h-19.26zm-9.548-2.86L45.219 59.288h-1.053l-23.65 47.699h47.807v-.001zm90.349 11.737c6.02 0 9.48-3.01 9.48-6.771 0-.764-.111-1.459-.324-2.105h16.402c.014.344.021.697.021 1.053 0 13.092-9.479 22.721-25.279 22.721-5.416 0-11.586-1.203-18.508-3.311l-1.354-18.658c7.074 4.362 12.941 7.071 19.562 7.071zm7.307-11.737c-1.955-1.957-5.15-3.656-9.262-6.02L151.9 98.26c-9.178-5.117-13.391-11.587-13.391-20.013 0-10.834 8.877-19.109 22.721-19.109 5.115 0 10.984 1.204 17.605 3.461V79c-7.523-4.665-13.543-6.621-17.305-6.621-4.664 0-7.523 2.106-7.523 5.567 0 2.407 1.654 4.665 4.814 6.47l8.127 4.514c8.836 4.879 15.475 9.412 16.979 18.056h-17.948z"/>
                    </g>
                </svg>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <section class="p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        @if($ad->exchange)
                            <p class="inline-block h-full bg-green-100 capitalize text-xs w-max p-1 rounded text-green-700">
                                Exchange</p>
                        @elseif($ad->exchange === false)
                            <p class="bg-red-100 capitalize text-xs w-max p-1 rounded text-red-700">Exchange</p>
                        @endif
                        <p class="text-sm"><span>Due date : </span>{{ $ad->due_date }}</p>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $ad->title }}</h2>
                    <p class="mb-5 font-light text-gray-500">{{ $ad->description }}</p>
                    <div class="flex gap-2.5 mb-5">
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
                </section>
            </div>
            <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
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
    </div>
</x-guest-layout>
