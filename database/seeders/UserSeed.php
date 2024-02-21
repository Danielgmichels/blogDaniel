<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Joãozinho",
            "email" => "joaozinhomatadordedragao@gmail.com",
            "password" => bcrypt("dd250106"),
            "permission" => 0,
        ]);
    }
}
