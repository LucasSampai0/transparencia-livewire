<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;

class FormClient extends Component
{

    public $client;

    public function mount(Client $client)
    {
        $this->client = $client;
    }

    public function render()
    {
        return view('livewire.form-client');
    }
}
