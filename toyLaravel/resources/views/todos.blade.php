<x-app-layout>
    @section('title', 'Todos List')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todos List') }}
        </h2>
    </x-slot>
    <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
        <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
            <div class="mb-4">
                <h1 class="text-grey-darkest font-bold">Todo List</h1>
                <p class="text-gray-500">Todos left: {{ $count ?? '' }}</p>
                <div class="flex mt-4">
                    <form method="POST" action="/add-todo">
                        @csrf
                        <input name="addTodo" class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" placeholder="Add Todo">
                        <button class="flex-no-shrink p-2 border-2 rounded text-teal border-teal hover:bg-teal">Add</button>
                    </form>
                </div>
            </div>
            @include('partials.todos')
        </div>
    </div>
</x-app-layout>