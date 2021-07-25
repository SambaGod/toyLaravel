<x-app-layout>
    @section('title', 'Home Page')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    
    <h1 class="text-5xl text-center font-bold mt-5">Welcome back {{ $user->name ?? 'Random Developer' }}!</h1>
</x-app-layout>