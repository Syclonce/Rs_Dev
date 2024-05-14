<?php

namespace Database\Seeders;

use App\Models\License;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        License::create([
            'key' => 'YOUR_LICENSE_KEY',
            'expiry_date' => now()->addYear(),
            'is_active' => true,
        ]);
    }
}
