<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePublicSessionRequest;
use App\Http\Requests\UpdatePublicSessionRequest;
use App\Models\Client;
use App\Models\PublicSession;

class PublicSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Client $client)
    {
        return view('clients.public-sessions.index', [
            'publicSessions' => $client->publicSessions,
            'client' => $client,
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
    public function store(StorePublicSessionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PublicSession $publicSession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client, PublicSession $publicSession)
    {
        return view('clients.public-sessions.edit', [
            'publicSessions' => $publicSession,
            'client' => $client,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePublicSessionRequest $request, PublicSession $publicSession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PublicSession $publicSession)
    {
        //
    }
}
