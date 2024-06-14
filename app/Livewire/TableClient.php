<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;

class TableClient extends Component
{

    public $clients;

    public function mount()
    {
        $this->clients = Client::all();
    }

    public function render()
    {
        return view('livewire.table-client');
    }
}
