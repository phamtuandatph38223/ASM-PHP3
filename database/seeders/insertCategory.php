<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insertCategory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['ten_the_loai' => 'Chính Trị'],
            ['ten_the_loai' => 'Bóng Đá'],
            ['ten_the_loai' => 'Game'],
        ]);
    }
}
