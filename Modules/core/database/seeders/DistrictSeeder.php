<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TM\Core\Models\District;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = [
            [
                "id" => "1",
                "name_fa" => "آذر",
                "city_id" => "16",
            ],
            [
                "id" => "2",
                "name_fa" => "آزادگان",
                "city_id" => "16",
            ],
            [
                "id" => "3",
                "name_fa" => "امام",
                "city_id" => "16",
            ],
            [
                "id" => "4",
                "name_fa" => "امامزاده ابراهیم",
                "city_id" => "16",
            ],
            [
                "id" => "5",
                "name_fa" => "انسجام",
                "city_id" => "16",
            ],
            [
                "id" => "6",
                "name_fa" => "انصارالحسین",
                "city_id" => "16",
            ],
            [
                "id" => "7",
                "name_fa" => "انقلاب(جهارمردان)",
                "city_id" => "16",
            ],
            [
                "id" => "8",
                "name_fa" => "باجک(19 دی)",
                "city_id" => "16",
            ],
            [
                "id" => "9",
                "name_fa" => "بلوارامین",
                "city_id" => "16",
            ],
            [
                "id" => "10",
                "name_fa" => "بلوار کاشانی",
                "city_id" => "16",
            ],
            [
                "id" => "11",
                "name_fa" => "بلوار 15 خرداد",
                "city_id" => "16",
            ],
            [
                "id" => "12",
                "name_fa" => "بنیاد",
                "city_id" => "16",
            ],
            [
                "id" => "13",
                "name_fa" => "توحید (نیروگاه)",
                "city_id" => "16",
            ],
            [
                "id" => "14",
                "name_fa" => "جمهوری",
                "city_id" => "16",
            ],
            [
                "id" => "15",
                "name_fa" => "حرم",
                "city_id" => "16",
            ],
            [
                "id" => "16",
                "name_fa" => "دانیال",
                "city_id" => "16",
            ],
            [
                "id" => "17",
                "name_fa" => "دورشهر",
                "city_id" => "16",
            ],
            [
                "id" => "18",
                "name_fa" => "زنیبل آباد(شهید صدوقی)",
                "city_id" => "16",
            ],
            [
                "id" => "19",
                "name_fa" => "سالاریه",
                "city_id" => "16",
            ],
            [
                "id" => "20",
                "name_fa" => "سمیه",
                "city_id" => "16",
            ],
            [
                "id" => "21",
                "name_fa" => "شهرک قدس",
                "city_id" => "16",
            ],
            [
                "id" => "22",
                "name_fa" => "شهید بهشتی",
                "city_id" => "16",
            ],
            [
                "id" => "23",
                "name_fa" => "صفائیه",
                "city_id" => "16",
            ],
            [
                "id" => "24",
                "name_fa" => "صفاشهر",
                "city_id" => "16",
            ],
            [
                "id" => "25",
                "name_fa" => "عطاران",
                "city_id" => "16",
            ],
            [
                "id" => "26",
                "name_fa" => "عماریاسر",
                "city_id" => "16",
            ],
            [
                "id" => "27",
                "name_fa" => "مدرس",
                "city_id" => "16",
            ],
            [
                "id" => "28",
                "name_fa" => "هفت تیر",
                "city_id" => "16",
            ],
            [
                "id" => "29",
                "name_fa" => "هنرستان",
                "city_id" => "16",
            ],
            [
                "id" => "30",
                "name_fa" => "پردیسان",
                "city_id" => "16",
            ],
            [
                "id" => "31",
                "name_fa" => "پلیس",
                "city_id" => "16",
            ],
            [
                "id" => "32",
                "name_fa" => "پیام نور",
                "city_id" => "16",
            ],
            [
                "id" => "33",
                "name_fa" => "کلهری",
                "city_id" => "16",
            ],
            [
                "id" => "34",
                "name_fa" => "کیوانفر",
                "city_id" => "16",
            ],
            [
                "id" => "35",
                "name_fa" => "گلزار",
                "city_id" => "16",
            ],
            [
                "id" => "36",
                "name_fa" => "یزدان شهر",
                "city_id" => "16",
            ],

        ];

        foreach ($districts as $district)
        {
            District::query()->create($district);
        }
    }
}
