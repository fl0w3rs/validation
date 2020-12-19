<?php

namespace Rakit\Validation\Rules;

use Rakit\Validation\Rule;

class Lowercase extends Rule
{

    /** @var string */
    protected $message = "Поле :attribute может содержать буквы только нижнего регистра";

    /**
     * Check the $value is valid
     *
     * @param mixed $value
     * @return bool
     */
    public function check($value): bool
    {
        return mb_strtolower($value, mb_detect_encoding($value)) === $value;
    }
}
