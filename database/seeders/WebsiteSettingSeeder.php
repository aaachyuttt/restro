<?php

namespace Database\Seeders;

use App\Models\WebsiteSetting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WebsiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            'company_name',
            'address',
            'contact_no',
            'short_about',
            'contact_email',
            'from_email',
            'logo1',
            'logo2',
            'opening_time',
            'closing_time',
            'facebook',
            'instagram',
            'youtube',
        ];

        foreach ($settings as $setting) {
            WebsiteSetting::firstOrCreate(['name' => $setting]);
        }
    }
}
