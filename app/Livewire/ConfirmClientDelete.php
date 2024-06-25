<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;

class ConfirmClientDelete extends Component
{
    public $isOpen = false;
    public $cliendId;

    protected $listeners = [
        'confirmDelete' => 'open'
    ];

    public function open($cliendId)
    {
        $this->cliendId = $cliendId;
        $this->isOpen = true;
    }

    public function close()
    {
        $this->isOpen = false;
    }

    public function deleteClient()
    {
        $client = Client::find($this->cliendId);
        $client->means()->delete();
        $client->publicSessions()->delete();
        $client->delete();

        $this->emit('clientDeleted'); // Emit a clientDeleted event

        $this->close();
    }



    public function render()
    {
        return view('livewire.confirm-client-delete');
    }
}
