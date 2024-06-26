<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;

class TableSupplier extends Component
{

    public $suppliers;
    public $client;

    public function mount(Client $client)
    {
        $this->suppliers = $client->suppliers;
        $this->client = $client;
    }

    public function render()
    {
        return view('livewire.table-suppliers');
    }
}
