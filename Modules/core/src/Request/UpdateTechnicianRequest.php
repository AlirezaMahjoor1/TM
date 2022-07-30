<?php


namespace TM\Core\Request;

use Illuminate\Foundation\Http\FormRequest;
use TM\Core\Rules\RegisterRule;


class UpdateTechnicianRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:100',
            'sex' => 'required|string',
            'father_name' => 'required|string',
            'password' =>'required|min:6',
            'store'=>'required|string',
            'address'=>'required|string',
            'technical_degree'=>'required|string',
            'degree_file'=>'required|mimes:jpeg,jpg,bmp,png',
            'about'=>'nullable|string',
            'city_id'=>'required|integer',
            'district_id'=>'required|integer',
            'skill_id'=>'required|array',
            'skill_id.*'=>'integer'
        ];
    }
}