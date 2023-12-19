<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class PermissionSeeder extends Seeder
{
    
    public function run(): void
    {
    
        // Start Role
        $role_admin = Role::updateOrCreate(
            [
                'name'=> 'admin'
            ],
            [
                'name'=> 'admin'
            ],
        );
        
        $role_pegawai_ho = Role::updateOrCreate(
            [
                'name'=> 'pegawai_ho'
            ],
            [
                'name'=> 'pegawai_ho'
            ],
        );
        
        $role_pegawai_klinik = Role::updateOrCreate(
            [
                'name'=> 'pegawai_klinik'
            ],
            [
                'name'=> 'pegawai_klinik'
            ],
        );
        
        $role_pegawai_rs = Role::updateOrCreate(
            [
                'name'=> 'pegawai_rs'
            ],
            [
                'name'=> 'pegawai_rs'
            ],
        );
        // End Role

        // Start Permission
        $permission_dashboard = Permission::updateOrCreate(
            [
                'name' => 'view_dashboard',
            ],
            [
                'name' => 'view_dashboard'
            ]
        );
        
        $permission_input_data = Permission::updateOrCreate(
            [
                'name' => 'view_input_data',
            ],
            [
                'name' => 'view_input_data'
            ]
        );
        $permission_reports_ho = Permission::updateOrCreate(
            [
                'name' => 'view_reports_ho',
            ],
            [
                'name' => 'view_reports_ho'
            ]
        );
        $permission_reports_klinik = Permission::updateOrCreate(
            [
                'name' => 'view_reports_klinik',
            ],
            [
                'name' => 'view_reports_klinik'
            ]
        );
        $permission_inventory = Permission::updateOrCreate(
            [
                'name' => 'view_inventory',
            ],
            [
                'name' => 'view_inventory'
            ]
        );
        // End Permissions

        // Start Role to Permissions
        $role_admin->givePermissionTo($permission_dashboard);
        $role_admin->givePermissionTo($permission_inventory);
        $role_admin->givePermissionTo($permission_reports_ho);
        $role_admin->givePermissionTo($permission_input_data);

        $role_pegawai_ho->givePermissionTo($permission_dashboard);
        $role_pegawai_ho->givePermissionTo($permission_reports_ho);
        $role_pegawai_ho->givePermissionTo($permission_input_data);

        $role_pegawai_klinik->givePermissionTo($permission_dashboard);
        $role_pegawai_klinik->givePermissionTo($permission_reports_klinik);
        $role_pegawai_klinik->givePermissionTo($permission_input_data);

        // Start Role to Permissions

        // Start User to Role
        $user = User::find(2);
        $user2 = User::find(4);
        $user3 = User::find(6);
        $user->assignRole(['admin']);
        $user2->assignRole(['pegawai_klinik']);
        $user3->assignRole(['pegawai_klinik']);
        // End User to Role

    }
}
