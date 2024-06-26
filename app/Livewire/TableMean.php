<?php

namespace App\Livewire;

use App\Models\Client;
use App\Models\Mean;
use Livewire\Component;

class TableMean extends Component
{

    public $means;
    public $client;

    public function mount(Client $client)
    {
        $this->means = $client->means;
        $this->client = $client;

    }

    public function render()
    {
        return view('livewire.table-means');
    }
}
