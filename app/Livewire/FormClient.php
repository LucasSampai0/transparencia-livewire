<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormClient extends Component
{

    use WithFileUploads;

    public $client;
    public $logo;
    public $name;
    public $cnpj;
    public $address;
    public $slug;

    public function mount(Client $client)
    {
        $this->client = $client;
        $this->name = $client->name;
        $this->cnpj = $client->cnpj;
        $this->address = $client->address;
        $this->slug = $client->slug;
    }

    public function submit()
    {

        $this->validate([
            'logo' => 'required|image', // 1MB Max
            'name' => 'required|string',
            'cnpj' => 'required|string',
            'address' => 'required|string',
            'slug' => 'required|string|max:255'
        ]);

        $logoPath = $this->logo->store('logos', 'public');

        $this->client->update([
            'logo' => $logoPath,
            'name' => $this->name,
            'cnpj' => $this->cnpj,
            'address' => $this->address,
            'slug' => $this->slug,
        ]);

        return redirect()->route('clients.index')->with([
            'flash.bannerStyle' => 'success',
            'flash.banner' => 'Cliente atualizado com sucesso!'
        ]);
    }

    public function render()
    {
        return view('livewire.form-client');
    }
}
