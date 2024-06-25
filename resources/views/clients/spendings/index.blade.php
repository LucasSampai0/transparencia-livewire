<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $client->name }} - {{ __('Investimentos') }}
        </h2>
    </x-slot>

    <div class="container mx-auto max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="border-b border-gray-200 dark:border-gray-700">
            <ul class="flex -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
                <li class="me-2 w-1/2" role="presentation">
                    <button class="w-full inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                        Veículos
                    </button>
                </li>
                <li class="me-2 w-1/2" role="presentation">
                    <button class="w-full inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">
                        Fornecedores
                    </button>
                </li>
            </ul>
        </div>
        <div id="default-styled-tab-content">
            <div class="hidden rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-profile" role="tabpanel" aria-labelledby="mean-tab">
                <livewire:table-spendings-means :client="$client" />
            </div>
            <div class="hidden rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <livewire:table-spendings-suppliers :client="$client" />
            </div>
        </div>
    </div>



</x-app-layout>
