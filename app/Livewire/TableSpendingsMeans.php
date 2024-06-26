<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;

class TableSpendingsMeans extends Component
{

    public $spendingsMeans;
    public $client;

    public function mount(Client $client)
    {
        $this->spendingsMeans = $client->spendingsMeans;
        $this->client = $client;
    }

    public function render()
    {
        return view('livewire.table-spendings-means');
    }
}
