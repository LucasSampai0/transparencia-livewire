<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\SpendingSupplier;
use App\Http\Requests\StoreSpendingSupplierRequest;
use App\Http\Requests\UpdateSpendingSupplierRequest;
use App\Models\SpendingMean;
use App\Http\Requests\StoreSpendingMeanRequest;
use App\Http\Requests\UpdateSpendingMeanRequest;
use App\Models\Supplier;

class SpendingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Client $client, SpendingMean $spendingsMeans, SpendingSupplier $spendingsSuppliers)
    {
        return view('clients.spendings.index', [
            'client' => $client,
            'spendings' => $client->spendings,
            'spendingsMeans' => $spendingsMeans,
            'spendingsSuppliers' => $spendingsSuppliers,
        ]);
    }

    public function show(Client $client, $month)
    {
        // Convert the month number to a date string in the format 'mm/yyyy'
        $dateString = date('m/Y', mktime(0, 0, 0, $month, 1));

        // Fetch the investment data for the specified client and month
        $spendingData = $client->spendingsMeans()->where('date', 'like', $dateString . '%')->get();

        // Return the data as a JSON response
        return response()->json($spendingData);
    }

    public function createMeans()
    {
        return view('clients.spendings.create-means');
    }

    public function storeMeans()
    {
        //
    }

    public function editMeans()
    {

    }

    public function updateMeans()
    {

    }

    public function destroyMeans(Client $client, SpendingMean $spendingMean)
    {
        $spendingMean->delete();

        return redirect()->route('clients.spendings.index', $client)->with([
            'flash.bannerStyle' => 'success',
            'flash.banner' => 'Veículo excluído com sucesso!',
        ]);
    }

    public function createSuppliers()
    {

    }

    public function storeSuppliers()
    {

    }

    public function editSuppliers(Client $client, Supplier $supplier)
    {
        return view('clients.spendings.edit-suppliers', [
            'client' => $client,
            'supplier' => $supplier,
        ]);
    }


    public function updateSuppliers()
    {

    }

    public function destroySuppliers(Client $client, SpendingSupplier $spendingSupplier)
    {
        $spendingSupplier->delete();

        return redirect()->route('clients.spendings.index', $client)->with([
            'flash.bannerStyle' => 'success',
            'flash.banner' => 'Fornecedor excluído com sucesso!',
        ]);
    }

}
