<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('roles')->delete();
        
        

        // Create Admin role
        $admin = new Role();
        $admin->name = "admin";
        $admin->display_name = "Administrator";
        $admin->save();

          // Create Moderator role
          $mod = new Role();
          $mod->name = "mod";
          $mod->display_name = "Moderator";
          $mod->save();

          //Attach the roles

          //Admin
          $user = User::find(1);
          $user->detachRole($admin);
          $user->attachRole($admin);

          //Moderator
          $user = User::find(2);
          $user->detachRole($mod);
          $user->attachRole($mod);
    }
}
