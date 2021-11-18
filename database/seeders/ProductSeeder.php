<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('products')->insert([
            'name' => 'Hat',
            'category' => 'Tops',
            'description' => 'Good For Summer!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

            DB::table('products')->insert([
            'name' => 'Shirts',
            'category' => 'Tops',
            'description' => 'Good For Summer Outfit!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

            DB::table('products')->insert([
            'name' => 'Jersey Shorts',
            'category' => 'Shorts',
            'description' => 'Good For Summer Outfit!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
// add you code here

    }
}
