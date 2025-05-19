<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\RolePermissionSeeder;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (User::count() == 0) {
            // Ensure roles exist
            Role::firstOrCreate(['name' => 'super_admin']);
            Role::firstOrCreate(['name' => 'karyawan']);
            $superAdmin = User::factory()->create([
                'name' => 'Super Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
            ]);
            $superAdmin->assignRole('super_admin');

            $karyawan = \App\Models\User::factory()->create([
                'name' => 'Karyawan',
                'email' => 'karyawan@karyawan.com',
                'password' => bcrypt('password'),
            ]);
            $karyawan->assignRole('karyawan');
        }

        $this->call([
            RolePermissionSeeder::class,
            MakananSeeder::class,
            PelangganSeeder::class,
            KunjunganSeeder::class,
        ]);
    }

}
