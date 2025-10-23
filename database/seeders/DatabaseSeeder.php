<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            \Database\Seeders\ProductsTableSeeder::class,
            \Database\Seeders\InventoryTableSeeder::class,
            \Database\Seeders\TransactionsTableSeeder::class,
        ]);
    }
}
