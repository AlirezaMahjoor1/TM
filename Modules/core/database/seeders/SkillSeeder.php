<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use TM\Core\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run()
    {

        $skills = [
            [
                'name' => 'تعمیرات سامسونگ'
            ],
            [
                'name' => 'تعمیرات هواوی'
            ],
            [
                'name' => 'تعمیرات آیفون'
            ],
            [
                'name' => 'تعمیرات شیائومی'
            ],
            [
                'name' => 'تعمیرات نوکیا'
            ],
            [
                'name' => 'تعمیرات مدل های متفرقه'
            ],
            [
                'name' => 'تعمیرات هارد آیفون'
            ],
            [
                'name' => 'تعمیرات هارد آندروید'
            ],
            [
                'name' => 'تعویض گلس'
            ]

        ];
        foreach($skills as $skill){
            Skill::query()->create($skill);
        }

    }

}