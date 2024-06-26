<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 gap-3">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
            <x-button class="bg-blue-500 text-white mt-4" x-data x-on:click="$dispatch('open-client-modal', {name:'modal3'})>Open Modal3</x-button>
        </div>
    </div>
    <x-client-modal name="modal3" title="Titulo3">
        <x-slot:body>
            <div class="p-3">
                <p>Teste3</p>
            </div>
        </x-slot:body>
    </x-client-modal>

</x-app-layout>
