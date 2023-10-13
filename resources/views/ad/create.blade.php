<x-app-layout>
    <x-slot name="header">
        <h2 class="font-base text-xl text-gray-800 leading-tight">
            {{ __('Créer une nouvelle annonce') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{route('ads.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Titre</label>
                                <input name="title" type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Veuillez renseigner le titre de votre tâche" required>
                            </div>
                            <div>
                                <label for="due_date" class="block mb-2 text-sm font-medium text-gray-900">Date d'échéance</label>
                                <input name="due_date" type="date" id="due_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            </div>
                            <div>
                                <label for="status" class="block mb-2 text-sm font-medium text-gray-900">Statuts</label>
                                <select name="status" type="selected" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                    <option value="">Définissez le status de votre tâche</option>
                                    <option value="done">Fait</option>
                                    <option value="fail">Échec</option>
                                </select>
                            </div>
                            <div>
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                                <textarea name="description" type="text" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Veuillez préciser l'objectif de cette tâche" required></textarea>
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900" for="file">Ajouter une image</label>
                                <input name="file" type="file" id="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" aria-describedby="file_help" required>
                                <p class="mt-1 text-sm text-gray-500" id="file_help">PNG or JPG.</p>
                            </div>
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
