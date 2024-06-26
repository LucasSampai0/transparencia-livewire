<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Client;
use App\Models\Mean;
use App\Models\MeanAttachment;
use App\Models\PublicSession;
use App\Models\SpendingMean;
use App\Models\SpendingSupplier;
use App\Models\Supplier;
use App\Models\SupplierAttachment;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\SpendingSupplierFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Client::factory(10)->create();

        Category::factory(10)->create();

        Client::all()->each(function ($client) {
            PublicSession::factory(5)->create(['client_id' => $client->id]);
            Mean::factory(5)->create(['client_id' => $client->id]);
            Supplier::factory(5)->create(['client_id' => $client->id]);
        });

        Mean::all()->each(function ($mean) {
            MeanAttachment::factory(5)->create(['mean_id' => $mean->id]);
        });

        Supplier::all()->each(function ($supplier) {
            SupplierAttachment::factory(5)->create(['supplier_id' => $supplier->id]);
        });

        SpendingMean::factory(30)->create();
        SpendingSupplier::factory(30)->create();

    }
}
