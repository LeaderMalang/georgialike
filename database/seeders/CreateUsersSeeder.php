<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\UserRole;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
                'name'=>'TestAdmin',
                'email'=>'admin@georgialike.com',
                'password'=> Hash::make('123456'),
                ];
        
        $user = [
            'name'=>'TestUser',
            'email'=>'user@georgialike.com',
            'password'=> Hash::make('123456'),
            ];
  
        $admin_created = User::create($admin);
        Role::create([
            'role_name' => 'admin',
        ]);
        UserRole::create([
            'user_id' => '1',
            'role_id' => '1',
        ]);

        $user_created = User::create($user);
        Role::create([
            'role_name' => 'user',
        ]);
        UserRole::create([
            'user_id' => '2',
            'role_id' => '2',
        ]);
    }
}
