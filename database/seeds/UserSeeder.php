<?php

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
        User::create([
            'first_name' => 'Иван',
            'last_name' => 'Иванов',
            'type' => 2,
            'email' => 'teacher@test.com',
            'password' => Hash::make('password'),
        ]);

        factory(User::class, 10)->create();
    }
}
