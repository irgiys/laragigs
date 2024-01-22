<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'John',
            'email' => 'john@gmail.com'
        ]);
        \App\Models\Listing::factory(10)->create([
            'user_id' => $user->id,
        ]);
    }
}
