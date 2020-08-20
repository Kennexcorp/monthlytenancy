<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@atp.com',
            'password' => Hash::make('atpadmin12345'),
            'is_admin' => 1
        ]);

        $user->profile()->create([
            'phone_number' => '08169311714'
        ]);

        $user->assignRole('super-admin');
    }
}
