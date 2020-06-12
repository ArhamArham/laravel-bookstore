<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role=Role::create([
            'name'=>'Customer',
            'description'=> 'Customer Role',
        ]);
        $role=Role::create([
            'name'=>'admin',
            'description'=> 'Admin Role',
        ]);
        $user=User::create([
            'email'=>'admin@gmail.com',
            'name'=>'admin',
            'password'=>bcrypt('arham110'),
            'role_id'=>$role->id,
        ]);
        $user=User::create([
            'email'=>'arhamroshan444@gmail.com',
            'name'=>'arham',
            'password'=>bcrypt('arham110'),
            'role_id'=>$role->id,
        ]);
    }
}
