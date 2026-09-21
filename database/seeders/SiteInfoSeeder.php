<?php

namespace Database\Seeders;

use App\Models\SiteInfo;
use Illuminate\Database\Seeder;

class SiteInfoSeeder extends Seeder
{
    public function run(): void
    {
        SiteInfo::updateOrCreate(
            ['id' => 1],
            [
                'mobile_1' => '+91 81128 25288',
                'mobile_2' => '+91 63071 80489',
                'email_1' => 'info@anshivya.com',
                'email_2' => 'hr@anshivya.com',
                'full_address' => 'Anshivya Group Corporate Headquarters, B-Block, Titanium Heights, Corporate Road, Prahlad Nagar, Ahmedabad, Gujarat 380015, India',
                'map_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.970188722248!2d72.50742137591632!3d23.024886916248384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84f5217b1897%3A0x7d0a204689b02a82!2sTitanium%20Heights%2C%20Corporate%20Rd%2C%20Prahlad%20Nagar%2C%20Ahmedabad%2C%20Gujarat%20380015!5e0!3m2!1sen!2sin!4v1710000000000!5m2!1sen!2sin',
            ]
        );
    }
}
