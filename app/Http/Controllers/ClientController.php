<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use Livewire\WithFileUploads;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Client $client)
    {
        return view('clients.index', [
            'clients' => Client::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $client = Client::where('slug', $slug)->firstOrFail();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('clients.edit', [
            'client' => $client,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->means()->delete();

        $client->publicSessions()->delete();

        $client->suppliers()->delete();

        $client->delete();
        return redirect()->route('clients.index')->with([
            'flash.bannerStyle' => 'success',
            'flash.banner' => 'Cliente deletado com sucesso!'
        ]);
    }
}
