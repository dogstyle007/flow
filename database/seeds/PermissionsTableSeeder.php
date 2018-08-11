<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('permissions')->delete();

        //create new post
        $crudPost = new Permission();
        $crudPost->name = "crud-post";
        $crudPost->save();

        //add user
        $addUser = new Permission();
        $addUser->name = "add-new-user";
        $addUser->save();

        //view admin member index
        $memberIndex = new Permission();
        $memberIndex->name = "member-index";
        $memberIndex->save();

        //view admin post index
        $postIndex = new Permission();
        $postIndex->name = "post-index";
        $postIndex->save();

         //view admin post index
         $paymentIndex = new Permission();
         $paymentIndex->name = "payment-index";
         $paymentIndex->save();

        //delete users
        $deleteUser = new Permission();
        $deleteUser->name = "delete-user";
        $deleteUser->save();

        //attach roles permission

        $admin = Role::whereName('admin')->first();
        $mod = Role::whereName('mod')->first();

        $admin->detachPermissions([$crudPost, $addUser, $memberIndex, $paymentIndex, $postIndex, $deleteUser]);
        $admin->attachPermissions([$crudPost, $addUser, $memberIndex, $paymentIndex, $postIndex, $deleteUser]);

        $mod->detachPermissions([$crudPost, $addUser, $paymentIndex]);
        $mod->attachPermissions([$crudPost, $addUser, $paymentIndex]);
    } 
}
