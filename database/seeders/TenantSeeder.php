<?php

namespace Database\Seeders;

use Database\Seeders\Tenants\SettingSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\Tenants\UserSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            //UserSeeder::class,
            SettingSeeder::class
        ]);
    }
}
