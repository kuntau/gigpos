<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Kuntau',
            'email' => 'kuntau@kuntau.org',
            'password' => Hash::make('kun')
        ]);

        User::factory(5)->create();
        Product::factory(50)->create();
    }
}
