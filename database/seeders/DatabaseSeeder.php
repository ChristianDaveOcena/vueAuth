<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

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
            DB::table('users')->insert([
            'name' => 'admin1',
            'email' => 'admin1'.'@gmail.com',
            'password' => Hash::make('admin1'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'admin2',
            'email' => 'admin2'.'@gmail.com',
            'password' => Hash::make('admin2'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


    }
}
