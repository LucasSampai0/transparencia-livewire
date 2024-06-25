<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $client->name }} - {{ __('Fornecedores') }}
        </h2>
    </x-slot>
    <livewire:table-supplier :client="$client" :supplier="$suppliers" />
</x-app-layout>
