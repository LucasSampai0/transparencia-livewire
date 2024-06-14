<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Client;
use App\Models\Mean;
use App\Models\PublicSession;
use App\Models\Supplier;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            PublicSession::factory(3)->create(['client_id' => $client->id]);
            Mean::factory(3)->create(['client_id' => $client->id]);
            Supplier::factory(3)->create(['client_id' => $client->id]);
        });
    }
}