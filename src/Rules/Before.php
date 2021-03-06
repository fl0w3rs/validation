<?php

namespace Rakit\Validation\Rules;

use Rakit\Validation\Rule;

class Before extends Rule
{
    use Traits\DateUtilsTrait;

    /** @var string */
    protected $message = "В поле :attribute должна быть дата раньше :time";

    /** @var array */
    protected $fillableParams = ['time'];

    /**
     * Check the $value is valid
     *
     * @param mixed $value
     * @return bool
     * @throws \Exception
     */
    public function check($value): bool
    {
        $this->requireParameters($this->fillableParams);
        $time = $this->parameter('time');

        if (!$this->isValidDate($value)) {
            throw $this->throwException($value);
        }

        if (!$this->isValidDate($time)) {
            throw $this->throwException($time);
        }

        return $this->getTimeStamp($time) > $this->getTimeStamp($value);
    }
}
