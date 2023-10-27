<x-app-layout>
    <x-slot name="header">
        <h2 class="font-base text-xl text-gray-800 leading-tight">
            {{ __('Editing space') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="mb-4 text-xl font-bold text-gray-900">Edit the ad</h2>
                    <form method="POST" action="{{route('ads.show', $ad->id)}}" enctype="multipart/form-data">
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
                        @method('PUT')
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Product
                                    Name</label>
                                <input name="title" type="text" id="title"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                       value="{{$ad->title}}" required>
                            </div>
                            <div class="w-full">
                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Brand</label>
                                <input type="text" name="brand" id="brand"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                       value="{{$ad->brand}}" required="">
                            </div>
                            <div>
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
                                <input name="price" type="number" step="0.01" id="price"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                       value="{{$ad->price}}" required>
                            </div>
                            <div>
                                <label for="year" class="block mb-2 text-sm font-medium text-gray-900">Year</label>
                                <input name="year" type="number" id="year"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                       value="{{$ad->year}}" required>
                            </div>
                            <div>
                                <label for="size" class="block mb-2 text-sm font-medium text-gray-900">Item Size
                                    (cm)</label>
                                <input name="size" type="number" step="0.01" id="size"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                       value="{{$ad->size}}" required>
                            </div>
                            <div>
                                <label for="due_date" class="block mb-2 text-sm font-medium text-gray-900">Due date</label>
                                <input name="due_date" type="date" id="due_date"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                       value="{{$ad->due_date}}" required>
                            </div>
                            <div>
                                <label for="category"
                                       class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                                <select name="category" type="selected" id="category"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required>
                                    @if($ad->category_name)
                                        <option value="{{$ad->category_name}}">{{$ad->category_name}}</option>
                                    @else
                                        <option value="">Add a category to your product</option>
                                    @endif
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="state" class="block mb-2 text-sm font-medium text-gray-900">State</label>
                                <select name="state" type="selected" id="state"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required>
                                    @if($ad->state_name)
                                        <option value="{{$ad->state_name}}">{{$ad->state_name}}</option>
                                    @else
                                        <option value="">Add a state status for your product</option>
                                    @endif
                                    @foreach($states as $state)
                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900" for="file">Modifier une image</label>
                                <input name="file" type="file" id="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" aria-describedby="file_help">
                                <p class="mt-1 text-sm text-gray-500" id="file_help">PNG or JPG.</p>
                            </div>

                            @if ($file)
                                <div class="mt-3">
                                    <p class="text-sm font-medium text-gray-900">Image actuelle :</p>
                                    <img src="{{ asset($file) }}" alt="Image actuelle" class="mt-1 max-w-md">
                                </div>
                            @endif
                            <div>
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                                <textarea name="description" type="text" id="description"
                                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                          required>{{$ad->description}}</textarea>
                            </div>
                            <div>
                                <label for="guarantee"
                                       class="block mb-2 text-sm font-medium text-gray-900">Guarantee</label>
                                <textarea name="guarantee" type="text" id="guarantee"
                                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                          required>{{$ad->guarantee}}</textarea>
                            </div>
                            <div>
                                <label for="delivery"
                                       class="block mb-2 text-sm font-medium text-gray-900">Delivery</label>
                                <select name="delivery" type="selected" id="delivery"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required>
                                    @if($ad->delivery_name)
                                        <option value="{{$ad->delivery_name}}">{{$ad->delivery_name}}</option>
                                    @else
                                        <option value="">Add a delivery method for your product</option>
                                    @endif
                                    @foreach($deliveries as $delivery)
                                        <option value="{{$delivery->id}}">{{$delivery->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex items-start mb-6">
                            <div class="flex items-center h-5">
                                <input name="exchange" type="checkbox" id="exchange"
                                       class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300"
                                       value="{{ old('exchange') ? 'checked' : '' }}"
                                >
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="exchange" class="text-gray-500">I am open to exchanges or
                                    negotiations</label>
                            </div>
                        </div>
                        <button type="submit"
                                class="text-blue-600 bg-primary-700 border border-blue-600 hover:text-white hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Update product
                        </button>
                    </form>
                    <div class="flex items-center mt-6">
                        <form method="POST" action="{{route('ads.destroy', $ad->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit"
                                   class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                   value="Delete">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
