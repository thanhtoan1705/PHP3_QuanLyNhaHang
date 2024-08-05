<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Table;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Tables = [
            [
                'number' => 2,
                'seats' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'number' => 4,
                'seats' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'number' => 6,
                'seats' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'number' => 6,
                'seats' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'number' => 6,
                'seats' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'number' => 6,
                'seats' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Thêm các bản ghi khác tương tự ở đây
        ];

        // Sử dụng Eloquent để thêm từng bản ghi vào bảng tables
        foreach ($Tables as $tableData) {
            Table::create($tableData);
        }
    }
}
