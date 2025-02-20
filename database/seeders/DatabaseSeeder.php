<?php

namespace Database\Seeders;

use App\Models\Item; 
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1000)->create();

        // Item DB
        Item::create([
            'name' => 'Item A', // Change to item name
            'quantity' => 10,   // Change to item quantity
            'description' => 'Description for Item A', // Optional description
        ]);
        Item::create([
            'name' => 'Item B', // Change to item name
            'quantity' => 15,   // Change to item quantity
            'description' => 'Description for Item B', // Optional description
        ]);
    }
}
