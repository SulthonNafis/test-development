<?php

namespace Database\Seeders;

use App\Models\Item;
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
        $items = [
            ['name' => 'Biskuit', 'price' => 6000],
            ['name' => 'Chips', 'price' => 8000],
            ['name' => 'Oreo', 'price' => 10000],
            ['name' => 'Tango', 'price' => 12000],
            ['name' => 'Cokelat', 'price' => 15000],
        ];

        foreach ($items as $item) {
            Item::create($item);
        }
    }
}
