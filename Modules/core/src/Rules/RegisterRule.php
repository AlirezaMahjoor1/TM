<?php

namespace TM\Core\Rules;

use Illuminate\Contracts\Validation\Rule;
use TM\Core\Models\User;

class RegisterRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $verified = User::query()->where('cell_number',$value)->where('verified',1)->exists();
        if($verified)
        {
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('core::message.client_exists');
    }
}
