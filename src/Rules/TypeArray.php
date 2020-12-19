<?php

namespace Rakit\Validation\Rules;

use Rakit\Validation\Rule;

class TypeArray extends Rule
{

    /** @var string */
    protected $message = "Поле :attribute должно быть массивом";

    /**
     * Check the $value is valid
     *
     * @param mixed $value
     * @return bool
     */
    public function check($value): bool
    {
        return is_array($value);
    }
}
