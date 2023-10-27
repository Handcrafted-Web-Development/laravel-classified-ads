<x-app-layout>
    <x-slot name="header">
        <h2 class="font-base text-xl text-gray-800 leading-tight">
            {{ __('Creation space') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="mb-4 text-xl font-bold text-gray-900">Create a new ad</h2>
                    <form method="POST" action="{{route('ads.store')}}" enctype="multipart/form-data">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Product Name</label>
                                <input name="title" type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Please provide the title of your task" required>
                            </div>
                            <div class="w-full">
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Brand</label>
                                <input type="text" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Product brand" required="">
                            </div>
                            <div>
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
                                <input name="price" type="number" step="0.01" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="$299.99" required>
                            </div>
                            <div>
                                <label for="year" class="block mb-2 text-sm font-medium text-gray-900">Year</label>
                                <input name="year" type="number" id="year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="2001" required>
                            </div>
                            <div>
                                <label for="size" class="block mb-2 text-sm font-medium text-gray-900">Item Size (cm)</label>
                                <input name="size" type="number" step="0.01" id="size" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Ex. 17.29" required>
                            </div>
                            <div>
                                <label for="due_date" class="block mb-2 text-sm font-medium text-gray-900">Due Date</label>
                                <input name="due_date" type="date" id="due_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            </div>
                            <div>
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                                <select name="category" type="selected" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                    <option value="">Add a category to your product</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="state" class="block mb-2 text-sm font-medium text-gray-900">State</label>
                                <select name="state" type="selected" id="state" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                    <option value="">Add a state status for your product</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900" for="file">Ajouter une image</label>
                                <input name="file" type="file" id="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none p-2.5" aria-describedby="file_help">
                                <p class="mt-1 text-sm text-gray-500" id="file_help">PNG or JPG.</p>
                            </div>
                            <div>
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                                <textarea name="description" type="text" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Please specify the objective of this task" required></textarea>
                            </div>
                            <div>
                                <label for="guarantee" class="block mb-2 text-sm font-medium text-gray-900">Guarantee</label>
                                <textarea name="guarantee" type="text" id="guarantee" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Please specify the details of any warranty provided with the product" required></textarea>
                            </div>
                            <div>
                                <label for="delivery" class="block mb-2 text-sm font-medium text-gray-900">Delivery</label>
                                <select name="delivery" type="selected" id="delivery" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                    <option value="">Add a delivery method for your product</option>
                                    @foreach($deliveries as $delivery)
                                        <option value="{{$delivery->id}}">{{$delivery->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex items-start">
{{--                            <div class="flex items-center h-5">--}}
{{--                                <input name="exchange" type="hidden" id="exchange" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300"--}}
{{--                                       value="true}}">--}}
{{--                            </div>--}}
{{--                            <div class="ml-3 text-sm">--}}
{{--                                <label for="exchange" class="text-gray-500">I am open to exchanges or negotiations</label>--}}
{{--                            </div>--}}
                        </div>
                        <button type="submit" class="mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
