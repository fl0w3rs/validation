<?php

namespace Rakit\Validation\Rules;

use Rakit\Validation\Rule;

class Alpha extends Rule
{

    /** @var string */
    protected $message = "Поле :attribute может содержать только буквы";

    /**
     * Check the $value is valid
     *
     * @param mixed $value
     * @return bool
     */
    public function check($value): bool
    {
        return is_string($value) && preg_match('/^[\pL\pM]+$/u', $value);
    }
}
