<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $client->name }} - {{ __('Veículos Midiáticos') }}
        </h2>
    </x-slot>
{{--    @include('livewire.table-means', ['client' => $client, 'means' => $means])--}}
        <livewire:table-mean :client="$client" :mean="$mean" />

</x-app-layout>
