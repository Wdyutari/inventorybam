<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::updateOrCreate([
        //     'nopeg' => 9823120373,
        //     'name' => 'Taufik Agung Santoso',
        //     'email' => 'taufikWe@gmail.com',
        //     'password' => Hash::make('taufik'),
        // ]);
        User::updateOrCreate([
            'nopeg' => 9721210209,
            'name' => 'WIDYA RESTU UTARI',
            'email' => 'widyautari@gmail.com',
            'password' => Hash::make('widyautari'),
        ]);
    }
}
