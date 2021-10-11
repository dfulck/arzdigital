<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_id=Role::query()->create([
            'title'=>'Admin'
        ]);
        Role::query()->insert(
            [
                [
                    'title'=>'guest'
                ],
                [
                    'title'=>'writer'
                ],
            ]);


        User::query()->insert([
            'CollectionLink'=>"http://127.0.0.1:8000/users/create?id=cloberfan@gmail.com",
            'Role_id'=>$role_id->id,
            'name'=>'Erfan',
            'lastname'=>'Asgharzade',
            'username'=>'shah_crack',
            'job'=>'developer',
            'city'=>'urmia',
            'address'=>'Ahndost',
            'number'=>'09376602123',
            'age'=>'24',
            'email'=>'cloberfan@gmail.com',
            'password'=>bcrypt(126875)
        ]);

    }
}
