<?php

namespace Database\Seeders;

use App\Models\District;
use Faker\Generator;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    public function run(Generator $faker): void
    {
        $districts = array(
            array("name" => "Comilla", "division_id" => "1", "is_active" => "1", "name_bn" => "কুমিল্লা"),
            array("name" => "Feni", "division_id" => "1", "is_active" => "1", "name_bn" => "ফেনী"),
            array("name" => "Brahmanbaria", "division_id" => "1", "is_active" => "1", "name_bn" => "ব্রাহ্মণবাড়িয়া"),
            array("name" => "Rangamati", "division_id" => "1", "is_active" => "1", "name_bn" => "রাঙ্গামাটি"),
            array("name" => "Noakhali", "division_id" => "1", "is_active" => "1", "name_bn" => "নোয়াখালী"),
            array("name" => "Chandpur", "division_id" => "1", "is_active" => "1", "name_bn" => "চাঁদপুর"),
            array("name" => "Lakshmipur", "division_id" => "1", "is_active" => "1", "name_bn" => "লক্ষ্মীপুর"),
            array("name" => "Chattogram", "division_id" => "1", "is_active" => "1", "name_bn" => "চট্টগ্রাম"),
            array("name" => "Coxsbazar", "division_id" => "1", "is_active" => "1", "name_bn" => "কক্সবাজার"),
            array("name" => "Khagrachhari", "division_id" => "1", "is_active" => "1", "name_bn" => "খাগড়াছড়ি"),
            array("name" => "Bandarban", "division_id" => "1", "is_active" => "1", "name_bn" => "বান্দরবান"),
            array("name" => "Sirajganj", "division_id" => "2", "is_active" => "1", "name_bn" => "সিরাজগঞ্জ"),
            array("name" => "Pabna", "division_id" => "2", "is_active" => "1", "name_bn" => "পাবনা"),
            array("name" => "Bogura", "division_id" => "2", "is_active" => "1", "name_bn" => "বগুড়া"),
            array("name" => "Rajshahi", "division_id" => "2", "is_active" => "1", "name_bn" => "রাজশাহী"),
            array("name" => "Natore", "division_id" => "2", "is_active" => "1", "name_bn" => "নাটোর"),
            array("name" => "Joypurhat", "division_id" => "2", "is_active" => "1", "name_bn" => "জয়পুরহাট"),
            array("name" => "Chapainawabganj", "division_id" => "2", "is_active" => "1", "name_bn" => "চাঁপাইনবাবগঞ্জ"),
            array("name" => "Naogaon", "division_id" => "2", "is_active" => "1", "name_bn" => "নওগাঁ"),
            array("name" => "Jashore", "division_id" => "3", "is_active" => "1", "name_bn" => "যশোর"),
            array("name" => "Satkhira", "division_id" => "3", "is_active" => "1", "name_bn" => "সাতক্ষীরা"),
            array("name" => "Meherpur", "division_id" => "3", "is_active" => "1", "name_bn" => "মেহেরপুর"),
            array("name" => "Narail", "division_id" => "3", "is_active" => "1", "name_bn" => "নড়াইল"),
            array("name" => "Chuadanga", "division_id" => "3", "is_active" => "1", "name_bn" => "চুয়াডাঙ্গা"),
            array("name" => "Kushtia", "division_id" => "3", "is_active" => "1", "name_bn" => "কুষ্টিয়া"),
            array("name" => "Magura", "division_id" => "3", "is_active" => "1", "name_bn" => "মাগুরা"),
            array("name" => "Khulna", "division_id" => "3", "is_active" => "1", "name_bn" => "খুলনা"),
            array("name" => "Bagerhat", "division_id" => "3", "is_active" => "1", "name_bn" => "বাগেরহাট"),
            array("name" => "Jhenaidah", "division_id" => "3", "is_active" => "1", "name_bn" => "ঝিনাইদহ"),
            array("name" => "Jhalakathi", "division_id" => "4", "is_active" => "1", "name_bn" => "ঝালকাঠি"),
            array("name" => "Patuakhali", "division_id" => "4", "is_active" => "1", "name_bn" => "পটুয়াখালী"),
            array("name" => "Pirojpur", "division_id" => "4", "is_active" => "1", "name_bn" => "পিরোজপুর"),
            array("name" => "Barisal", "division_id" => "4", "is_active" => "1", "name_bn" => "বরিশাল"),
            array("name" => "Bhola", "division_id" => "4", "is_active" => "1", "name_bn" => "ভোলা"),
            array("name" => "Barguna", "division_id" => "4", "is_active" => "1", "name_bn" => "বরগুনা"),
            array("name" => "Sylhet", "division_id" => "5", "is_active" => "1", "name_bn" => "সিলেট"),
            array("name" => "Moulvibazar", "division_id" => "5", "is_active" => "1", "name_bn" => "মৌলভীবাজার"),
            array("name" => "Habiganj", "division_id" => "5", "is_active" => "1", "name_bn" => "হবিগঞ্জ"),
            array("name" => "Sunamganj", "division_id" => "5", "is_active" => "1", "name_bn" => "সুনামগঞ্জ"),
            array("name" => "Narsingdi", "division_id" => "6", "is_active" => "1", "name_bn" => "নরসিংদী"),
            array("name" => "Gazipur", "division_id" => "6", "is_active" => "1", "name_bn" => "গাজীপুর"),
            array("name" => "Shariatpur", "division_id" => "6", "is_active" => "1", "name_bn" => "শরীয়তপুর"),
            array("name" => "Narayanganj", "division_id" => "6", "is_active" => "1", "name_bn" => "নারায়ণগঞ্জ"),
            array("name" => "Tangail", "division_id" => "6", "is_active" => "1", "name_bn" => "টাঙ্গাইল"),
            array("name" => "Kishoreganj", "division_id" => "6", "is_active" => "1", "name_bn" => "কিশোরগঞ্জ"),
            array("name" => "Manikganj", "division_id" => "6", "is_active" => "1", "name_bn" => "মানিকগঞ্জ"),
            array("name" => "Dhaka", "division_id" => "6", "is_active" => "1", "name_bn" => "ঢাকা"),
            array("name" => "Munshiganj", "division_id" => "6", "is_active" => "1", "name_bn" => "মুন্সিগঞ্জ"),
            array("name" => "Rajbari", "division_id" => "6", "is_active" => "1", "name_bn" => "রাজবাড়ী"),
            array("name" => "Madaripur", "division_id" => "6", "is_active" => "1", "name_bn" => "মাদারীপুর"),
            array("name" => "Gopalganj", "division_id" => "6", "is_active" => "1", "name_bn" => "গোপালগঞ্জ"),
            array("name" => "Faridpur", "division_id" => "6", "is_active" => "1", "name_bn" => "ফরিদপুর"),
            array("name" => "Panchagarh", "division_id" => "7", "is_active" => "1", "name_bn" => "পঞ্চগড়"),
            array("name" => "Dinajpur", "division_id" => "7", "is_active" => "1", "name_bn" => "দিনাজপুর"),
            array("name" => "Lalmonirhat", "division_id" => "7", "is_active" => "1", "name_bn" => "লালমনিরহাট"),
            array("name" => "Nilphamari", "division_id" => "7", "is_active" => "1", "name_bn" => "নীলফামারী"),
            array("name" => "Gaibandha", "division_id" => "7", "is_active" => "1", "name_bn" => "গাইবান্ধা"),
            array("name" => "Thakurgaon", "division_id" => "7", "is_active" => "1", "name_bn" => "ঠাকুরগাঁও"),
            array("name" => "Rangpur", "division_id" => "7", "is_active" => "1", "name_bn" => "রংপুর"),
            array("name" => "Kurigram", "division_id" => "7", "is_active" => "1", "name_bn" => "কুড়িগ্রাম"),
            array("name" => "Sherpur", "division_id" => "8", "is_active" => "1", "name_bn" => "শেরপুর"),
            array("name" => "Mymensingh", "division_id" => "8", "is_active" => "1", "name_bn" => "ময়মনসিংহ"),
            array("name" => "Jamalpur", "division_id" => "8", "is_active" => "1", "name_bn" => "জামালপুর"),
            array("name" => "Netrokona", "division_id" => "8", "is_active" => "1", "name_bn" => "নেত্রকোণা")
        );

        foreach ($districts as $district) {
            District::create([
                'name' => $district['name'],
                'division_id' => $district['division_id'],
                'is_active' => $district['is_active'],
                'name_bn' => $district['name_bn']
            ]);
        }
    }
}
