<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ownerRole = Role::create([
            'name' => 'owner',
        ]);

        $studentRole = Role::create([
            'name' => 'student',
        ]);

        $teacherRole = Role::create([
            'name' => 'teacher',
        ]);

        //membuat akun supe admin untuk testing atau untuk membuat login awal
        //untuk menambahkan data lain misal category, course, dll bisa lewat fitur yang ada di web
        $userOwner = User::create([
            'name' => 'feri adiansah',
            'occupation' => 'Mahasiswa',
            'avatar' => 'images/default-avatar.png',
            'email' => 'feriadiansah@example.com',
            'password' => bcrypt('123123123'),
        ]);

        $userOwner->assignRole($ownerRole);


    }
}
