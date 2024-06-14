<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar') }} - {{ $client->name }}
        </h2>
    </x-slot>

    <livewire:form-client />
</x-app-layout>
