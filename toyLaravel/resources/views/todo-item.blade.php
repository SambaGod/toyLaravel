<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todo Item: ').$todo->slug }}
        </h2>
    </x-slot>
    <div class="bg-white mt-5 p-5 container mx-auto">
            <h1 class="text-2xl">
                <strong>Heading:</strong>
                {{ $todo->heading }}
            </h1>
            <p class="text-lg">
                <strong>Content:</strong>
                <br>
                {{ $todo->content }}
            </p>
    </div>
</x-app-layout>