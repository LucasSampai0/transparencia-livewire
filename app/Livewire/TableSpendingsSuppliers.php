<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;

class TableSpendingsSuppliers extends Component
{

    public $spendingsSuppliers;
    public $client;

    public function mount(Client $client)
    {
        $this->spendingsSuppliers = $client->spendingsSuppliers;
        $this->client = $client;
    }

    public function render()
    {
        return view('livewire.table-spendings-suppliers');
    }
}
