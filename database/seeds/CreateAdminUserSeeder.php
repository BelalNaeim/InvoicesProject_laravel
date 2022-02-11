<?php
use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $user = User::create([
        'name' => 'samirgamal',
        'email' => 'samir.gamal77@yahoo.com',
        'password' => bcrypt('123456'),
        'roles_name' => ["owner"],
        'Status' => 'مفعل',
        ]);
  
        $role = Role::create(['name' => 'owner']);
   
        $permissions = Permission::pluck('id', 'id')->all();
  
        $role->syncPermissions($permissions);
   
        $user->assignRole([$role->id]);
        $user = User::create([
        'name' => 'belalNaeim',
        'email' => 'belal.naeim@yahoo.com',
        'password' => bcrypt('123456'),
        'roles_name' => ["owner"],
        'Status' => 'مفعل',
        ]);
  
        $role = Role::create(['name' => 'owner']);
   
        $permissions = Permission::pluck('id', 'id')->all();
  
        $role->syncPermissions($permissions);
   
        $user->assignRole([$role->id]);


        
        $user->assignRole([$role->id]);
        $user = User::create([
        'name' => 'samirgamal',
        'email' => 'samir.gamal77@yahoo.com',
        'password' => bcrypt('123456'),
        'roles_name' => ["user"],
        'Status' => 'مفعل',
        ]);
  
        $role = Role::create(['name' => 'user']);
   
        $permissions = Permission::pluck('id', 'id')->all();
  
        $role->syncPermissions($permissions);
   
        $user->assignRole([$role->id]);
    }
}
