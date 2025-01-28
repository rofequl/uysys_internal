<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $abilities = [
            'read',
            'write',
            'create',
        ];

        $permissions_by_role = [
            'administrator' => [
                'user management',
                'content management',
                'financial management',
                'reporting',
                'payroll',
                'disputes management',
                'api controls',
                'database management',
                'repository management',
            ],
            'developer' => [
                'api controls',
                'database management',
                'repository management',
            ],
            'analyst' => [
                'content management',
                'financial management',
                'reporting',
                'payroll',
            ],
            'support' => [
                'reporting',
            ],
            'trial' => [
            ],
        ];

        foreach ($permissions_by_role['administrator'] as $permission) {
            foreach ($abilities as $ability) {
                Permission::create(['name' => $ability . ' ' . $permission, 'guard_name' => 'admin']);
            }
        }

        foreach ($permissions_by_role as $role => $permissions) {
            $full_permissions_list = [];
            foreach ($abilities as $ability) {
                foreach ($permissions as $permission) {
                    $full_permissions_list[] = $ability . ' ' . $permission;
                }
            }
            Role::create(['name' => $role, 'guard_name' => 'admin'])->syncPermissions($full_permissions_list);
        }

        Admin::find(1)->assignRole('administrator');
        Admin::find(2)->assignRole('developer');
    }
}
