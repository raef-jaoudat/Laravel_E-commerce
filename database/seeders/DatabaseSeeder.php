<?php


namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        User::factory()->create([
            'fname' => 'raef',
            'lname' => 'jaoudat',
            'email' => 'jtraef@gmail.com',
            'password' => bcrypt('password'),
            'is_admin'=> 1
        ]);
        User::factory()->create([
            'fname' => 'admin',
            'lname' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'is_admin'=> 1
        ]);
    }
}

