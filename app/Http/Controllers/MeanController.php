<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMeanRequest;
use App\Http\Requests\UpdateMeanRequest;
use App\Models\Client;
use App\Models\Mean;

class MeanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Client $client)
    {
        return view('means.index', [
            'means' => $client->means,
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
    public function store(StoreMeanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mean $mean)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mean $mean)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMeanRequest $request, Mean $mean)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mean $mean)
    {
        //
    }
}
