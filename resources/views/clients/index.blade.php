<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>
    <div class="container mx-auto max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

    <livewire:table-client />

        <a href="{{ route('clients.create') }}">
            <x-button class="mt-4">
                {{ __('Adicionar Cliente') }}
            </x-button>
        </a>
    </div>
</x-app-layout>
