<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'tester',
            'email' => 'tester@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('tester'),
        ]);
    }
}
