<?php

namespace App\Livewire;

use App\Models\Client;
use App\Models\PublicSession;
use Livewire\Component;

class TablePublicSession extends Component
{

    public $publicSessions;
    public $client;

    public function mount(Client $client)
    {
        $this->publicSessions = $client->publicSessions;
        $this->client = $client;
    }

    public function render()
    {
        return view('livewire.table-public-session');
    }
}
