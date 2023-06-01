<?php

namespace Database\Seeders;

use App\Models\Vocher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VocherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vocher::create([
            'product_id' => 1,
            'code' => 'CODE1',
            'discount_percent' => 20,
        ]);
        Vocher::create([
            'product_id' => 2,
            'code' => 'CODE2',
            'discount_percent' => 30,
        ]);
        Vocher::create([
            'product_id' => 3,
            'code' => 'CODE3',
            'discount_percent' => 10,
        ]);
    }
}
