<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'superuser@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('12345678'),
            'phone' => '089089089089',
        ]);

        //seeder profile_clinics manual
        \App\Models\ProfileClinic::factory()->create([
            'name' => 'Klinik Hasahi',
            'address' => 'Kp. Cijambe RT 03 RW 07 Cinunuk Cileunyi Bandung',
            'phone' => '089089089089',
            'email' => 'admin@klinikhasahi.com',
            'doctor_name' => 'Dr. Hikmat',
            'unique_code' => '123456',
        ]);

        //call
        $this->call(DoctorSeeder::class);
    }
}
