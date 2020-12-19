<?php

namespace Rakit\Validation\Rules;

use Rakit\Validation\Rule;

class Email extends Rule
{

    /** @var string */
    protected $message = "Поле :attribute должно быть действительным электронным адресом";

    /**
     * Check $value is valid
     *
     * @param mixed $value
     * @return bool
     */
    public function check($value): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }
}
