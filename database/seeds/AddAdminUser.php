<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AddAdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email' ,'admin@newcities.com')->get();
        if (!$user) {
            User::create([
                'name'      => 'Admin user',
                'email'     => 'admin@newcities.com',
                'password'  => Hash::make('secret555'),
            ]);
        }
        
    }
}
