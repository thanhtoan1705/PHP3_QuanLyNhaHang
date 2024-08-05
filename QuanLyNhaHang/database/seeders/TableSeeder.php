<?php

namespace Database\Seeders;

use App\Models\Table;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Table::create([
            'number' => '1',
            'seats' => '2',
        ]);

        Table::create([
            'number' => '2',
            'seats' => '4',
        ]);

        Table::create([
            'number' => '3',
            'seats' => '6',
        ]);
    }
}
