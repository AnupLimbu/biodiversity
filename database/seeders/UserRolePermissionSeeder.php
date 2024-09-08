<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            $roles_permission=['role-view', 'role-create','role-edit','role-delete'];
            $user_permission=['user-view', 'user-create','user-edit','user-delete'];
            $permission_permission=['permission-view', 'permission-create','permission-edit','permission-delete'];
            $blog_permission=['product-view', 'product-create','product-edit','product-delete'];
            $category_permission=['contact-view', 'contact-create','contact-edit','contact-delete'];
            $news_and_events_permission=['contact-view', 'contact-create','contact-edit','contact-delete'];
            $allPermissions= array_merge($roles_permission, $user_permission, $permission_permission,$blog_permission,$category_permission,$news_and_events_permission);
            foreach ($allPermissions as $role) {
                if(!DB::table('permissions')->where('name', $role)->exists()) {
                    Permission::create(['name' => $role]);
                }
            }
            $superAdminRole = Role::findOrCreate('super-admin','web');
            $adminRole = Role::findOrCreate('admin','web');
            $staffRole = Role::findOrCreate('staff','web');
            $userRole = Role::findOrCreate('user','web');

            $allPermissionNames = Permission::pluck('name')->toArray();
            $superAdminRole->givePermissionTo($allPermissionNames);

            // giving admin roles
            $adminRole->givePermissionTo(['role-view', 'role-create', 'role-edit','role-delete']);
            $adminRole->givePermissionTo(['permission-view', 'permission-create', 'permission-edit','permission-delete']);
            $adminRole->givePermissionTo(['user-view', 'user-create', 'user-edit','user-delete']);

            $superAdminUser = User::firstOrCreate([
                'email' => 'biodiversity@gmail.com',
            ], [
                'name' => 'Super Admin',
                'email' => 'biodiversity@gmail.com',
                'password' => Hash::make ('password'),
            ]);
            $superAdminUser->assignRole($superAdminRole);
            $adminUser = User::firstOrCreate([
                'email' => 'admin@gmail.com'
            ], [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make ('12345678'),
            ]);

            $adminUser->assignRole($adminRole);

        }catch (\Exception $exception){
            dd($exception);
        }

//        $staffUser = User::firstOrCreate([
//            'email' => 'staff@gmail.com',
//        ], [
//            'name' => 'Staff',
//            'email' => 'staff@gmail.com',
//            'password' => Hash::make('12345678'),
//        ]);
//        $staffUser->assignRole($staffRole);
    }
}
