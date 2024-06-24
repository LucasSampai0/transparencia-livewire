<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $client->name }} - {{ __('Sessões Públicas') }}
        </h2>
    </x-slot>
    @include('livewire.table-public-sessions', ['client' => $client, 'publicSessions' => $publicSessions])

</x-app-layout>
