<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Role: Karyawan (role_id = 2)
        $karyawanPermissions = Permission::whereIn('name', [
            // Karyawan bisa lihat & buat kunjungan
            'view_kunjungan',
            'view_any_kunjungan',
            'create_kunjungan',

            // Karyawan bisa lihat makanan & pelanggan
            'view_makanan',
            'view_any_makanan',
            'view_pelanggan',
            'view_any_pelanggan',

            // Akses aktivitas (log)
            'view_activity',
            'view_any_activity',

            // Akses widget dashboard
            'widget_OverlookWidget',
            'widget_LatestAccessLogs',
        ])->get();

        $karyawanRole = Role::find(2);
        $karyawanRole?->syncPermissions($karyawanPermissions);
    }
}
