<?php

namespace Database\Seeders;

use App\Models\User;
/*use Illuminate\Database\Console\Seeds\WithoutModelEvents;*/
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::Truncate();
        User::create([
            'name' => 'Head Kitchen Padi Heritage Resort',
            'email' => 'adminheadkitchen@gmail.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
