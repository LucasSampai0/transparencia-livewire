<div class="container mx-auto max-w-7xl mx-auto">
    <div class="relative shadow-md sm:rounded-lg">
        <table class="w-full overflow-x-auto text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    {{ __('ID')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ __('Data')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ __('Fornecedor')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ __('Total')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ __('Categoria')}}
                </th>
                <th scope="col" class="px-6 py-3">
                </th>
            </tr>
            </thead>
            <tbody>
            @if ($spendingsSuppliers->isEmpty())
                <tr>
                    <td colspan="6" class="text-center py-4">
                        Nenhum registro encontrado
                    </td>
                </tr>
            @endif
            @foreach($spendingsSuppliers as $spendingSupplier)
                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$spendingSupplier->id}}
                    </th>
                    <td class="px-6 py-4">
                        {{$spendingSupplier->date}}
                    </td>
                    <td class="px-6 py-4">
                        {{$spendingSupplier->supplier->name}}
                    </td>
                    <td class="px-6 py-4">
                        R$ {{$spendingSupplier->total}}
                    </td>
                    <td class="px-6 py-4">
                        {{$spendingSupplier->category->name}}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button class="text-white px-4 py-2 dark:text-gray-300 dark:hover:text-gray-100 bg-blue-500 hover:bg-blue-600 rounded-md">
                                    Opções
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link href="{{ route('clients.spending-supplier.edit', ['client' => $client->slug, 'spendingSupplier' => $spendingSupplier->id]) }}" class="inline-flex">

                                    <svg class="w-[18px] h-[18px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/></svg>
                                    {{ __('Editar') }}
                                </x-dropdown-link>
                                <x-dropdown-link class="inline-flex">
                                    <form action="{{ route('clients.spending-supplier.destroy', ['client' => $client->slug, 'spendingSupplier' => $spendingSupplier->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex">
                                            <svg class="w-[18px] h-[18px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                            </svg>
                                            {{ __('Excluir') }}
                                        </button>
                                    </form>
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
