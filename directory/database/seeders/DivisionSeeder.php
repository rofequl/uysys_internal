<?php

namespace Database\Seeders;

use App\Models\Division;
use Faker\Generator;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    public function run(Generator $faker): void
    {
        $divisions = array(
            array('name' => 'Chattagram', 'is_active' => '1', 'name_bn' => 'চট্টগ্রাম'),
            array('name' => 'Rajshahi', 'is_active' => '1', 'name_bn' => 'রাজশাহী'),
            array('name' => 'Khulna', 'is_active' => '1', 'name_bn' => 'খুলনা'),
            array('name' => 'Barisal', 'is_active' => '1', 'name_bn' => 'বরিশাল'),
            array('name' => 'Sylhet', 'is_active' => '1', 'name_bn' => 'সিলেট'),
            array('name' => 'Dhaka', 'is_active' => '1', 'name_bn' => 'ঢাকা'),
            array('name' => 'Rangpur', 'is_active' => '1', 'name_bn' => 'রংপুর'),
            array('name' => 'Mymensingh', 'is_active' => '1', 'name_bn' => 'ময়মনসিংহ')
        );

        foreach ($divisions as $division) {
            Division::create([
                'name' => $division['name'],
                'is_active' => 1,
                'name_bn' => $division['name_bn']
            ]);
        }
    }
}
