<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // ============ CREATE PERMISSIONS ============
        
        // Permission untuk User Management
        Permission::create(['name' => 'view users', 'guard_name' => 'web']);
        Permission::create(['name' => 'create users', 'guard_name' => 'web']);
        Permission::create(['name' => 'edit users', 'guard_name' => 'web']);
        Permission::create(['name' => 'delete users', 'guard_name' => 'web']);

        // Permission untuk Member Management
        Permission::create(['name' => 'view members', 'guard_name' => 'web']);
        Permission::create(['name' => 'create members', 'guard_name' => 'web']);
        Permission::create(['name' => 'edit members', 'guard_name' => 'web']);
        Permission::create(['name' => 'delete members', 'guard_name' => 'web']);

        // Permission untuk Division Management
        Permission::create(['name' => 'view divisions', 'guard_name' => 'web']);
        Permission::create(['name' => 'create divisions', 'guard_name' => 'web']);
        Permission::create(['name' => 'edit divisions', 'guard_name' => 'web']);
        Permission::create(['name' => 'delete divisions', 'guard_name' => 'web']);

        // Permission untuk Program Management
        Permission::create(['name' => 'view programs', 'guard_name' => 'web']);
        Permission::create(['name' => 'create programs', 'guard_name' => 'web']);
        Permission::create(['name' => 'edit programs', 'guard_name' => 'web']);
        Permission::create(['name' => 'delete programs', 'guard_name' => 'web']);

        // Permission untuk Activity Management
        Permission::create(['name' => 'view activities', 'guard_name' => 'web']);
        Permission::create(['name' => 'create activities', 'guard_name' => 'web']);
        Permission::create(['name' => 'edit activities', 'guard_name' => 'web']);
        Permission::create(['name' => 'delete activities', 'guard_name' => 'web']);

        // Permission untuk Blog Management
        Permission::create(['name' => 'view blogs', 'guard_name' => 'web']);
        Permission::create(['name' => 'create blogs', 'guard_name' => 'web']);
        Permission::create(['name' => 'edit blogs', 'guard_name' => 'web']);
        Permission::create(['name' => 'delete blogs', 'guard_name' => 'web']);

        // Permission untuk Gallery Management
        Permission::create(['name' => 'view galleries', 'guard_name' => 'web']);
        Permission::create(['name' => 'create galleries', 'guard_name' => 'web']);
        Permission::create(['name' => 'edit galleries', 'guard_name' => 'web']);
        Permission::create(['name' => 'delete galleries', 'guard_name' => 'web']);

        // Permission untuk Campus Management
        Permission::create(['name' => 'view campuses', 'guard_name' => 'web']);
        Permission::create(['name' => 'create campuses', 'guard_name' => 'web']);
        Permission::create(['name' => 'edit campuses', 'guard_name' => 'web']);
        Permission::create(['name' => 'delete campuses', 'guard_name' => 'web']);

        // Permission untuk Period Management
        Permission::create(['name' => 'view periods', 'guard_name' => 'web']);
        Permission::create(['name' => 'create periods', 'guard_name' => 'web']);
        Permission::create(['name' => 'edit periods', 'guard_name' => 'web']);
        Permission::create(['name' => 'delete periods', 'guard_name' => 'web']);

        // Permission untuk Position Management
        Permission::create(['name' => 'view positions', 'guard_name' => 'web']);
        Permission::create(['name' => 'create positions', 'guard_name' => 'web']);
        Permission::create(['name' => 'edit positions', 'guard_name' => 'web']);
        Permission::create(['name' => 'delete positions', 'guard_name' => 'web']);

        // ============ CREATE ROLES ============
        
        // Role: Admin (Super Admin)
        $adminRole = Role::create(['name' => 'admin', 'guard_name' => 'web']);
        $adminRole->givePermissionTo(Permission::all());

        // Role: Anggota IT (Developer)
        $itRole = Role::create(['name' => 'anggota-it', 'guard_name' => 'web']);
        $itRole->givePermissionTo([
            'view users', 'create users', 'edit users', 'delete users',
            'view members', 'create members', 'edit members', 'delete members',
            'view divisions', 'create divisions', 'edit divisions', 'delete divisions',
            'view programs', 'create programs', 'edit programs', 'delete programs',
            'view activities', 'create activities', 'edit activities', 'delete activities',
            'view blogs', 'create blogs', 'edit blogs', 'delete blogs',
            'view galleries', 'create galleries', 'edit galleries', 'delete galleries',
            'view campuses', 'create campuses', 'edit campuses', 'delete campuses',
            'view periods', 'create periods', 'edit periods', 'delete periods',
            'view positions', 'create positions', 'edit positions', 'delete positions',
        ]);

        // Role: Ketua
        $ketuaRole = Role::create(['name' => 'ketua', 'guard_name' => 'web']);
        $ketuaRole->givePermissionTo([
            'view members', 'create members', 'edit members', 'delete members',
            'view divisions', 'create divisions', 'edit divisions', 'delete divisions',
            'view programs', 'create programs', 'edit programs', 'delete programs',
            'view activities', 'create activities', 'edit activities', 'delete activities',
            'view blogs', 'create blogs', 'edit blogs', 'delete blogs',
            'view galleries', 'create galleries', 'edit galleries', 'delete galleries',
            'view campuses', 'create campuses', 'edit campuses',
            'view periods', 'create periods', 'edit periods',
            'view positions', 'create positions', 'edit positions',
        ]);

        // Role: Wakil Ketua
        $wakilRole = Role::create(['name' => 'wakil-ketua', 'guard_name' => 'web']);
        $wakilRole->givePermissionTo([
            'view members', 'create members', 'edit members',
            'view divisions', 'edit divisions',
            'view programs', 'create programs', 'edit programs',
            'view activities', 'create activities', 'edit activities',
            'view blogs', 'create blogs', 'edit blogs',
            'view galleries', 'create galleries', 'edit galleries',
            'view campuses',
            'view periods',
            'view positions',
        ]);

        // Role: Kepala Divisi
        $kadivRole = Role::create(['name' => 'kepala-divisi', 'guard_name' => 'web']);
        $kadivRole->givePermissionTo([
            'view members',
            'view divisions',
            'view programs', 'create programs', 'edit programs',
            'view activities', 'create activities', 'edit activities',
            'view blogs', 'create blogs', 'edit blogs',
            'view galleries', 'create galleries', 'edit galleries',
            'view campuses',
            'view periods',
            'view positions',
        ]);

        // ============ ASSIGN ROLE TO USER ============
        $adminUser = User::where('email', 'imaarosbayaa@gmail.com')->first();
        
        if (!$adminUser) {
            $adminUser = User::create([
                'username' => 'Adminimaganteng',
                'email' => 'imaarosbayaa@gmail.com',
                'password' => Hash::make('12345'),
            ]);
        }
        
        // Assign role admin ke user
        $adminUser->assignRole('admin');
    }
}