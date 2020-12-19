<?php

namespace Rakit\Validation\Rules;

use Rakit\Validation\Rule;

class Different extends Rule
{

    /** @var string */
    protected $message = "Поля :attribute и :field должны различаться";

    /** @var array */
    protected $fillableParams = ['field'];

    /**
     * Check the $value is valid
     *
     * @param mixed $value
     * @return bool
     */
    public function check($value): bool
    {
        $this->requireParameters($this->fillableParams);

        $field = $this->parameter('field');
        $anotherValue = $this->validation->getValue($field);

        return $value != $anotherValue;
    }
}
