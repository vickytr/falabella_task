<?php

namespace Falabella\Responsibility\Multiple;

use Falabella\Exception\NotMultipleException;
use Falabella\Math\Multiply;
use Falabella\Responsibility\Handler;

/**
 * Class MultipleOf5
 * @package Falabella\Responsibility\Multiple
 */
class MultipleOf5 implements Handler
{
    /**
     *
     */
    const DIVISOR = 5;
    /**
     *
     */
    const TEXT = 'IT';

    /**
     * @var
     */
    private $successor;

    /**
     * @param $number
     * @return string
     */
    public function handler($number)
    {
        try {
            $multiply = new Multiply();
            $multiply->isMultiple($number, self::DIVISOR);
            return self::TEXT;
        } catch (NotMultipleException $notMultipleException) {
            unset($notMultipleException);
            return $this->successor->handler($number);
        }
    }

    /**
     * @param Handler $successor
     */
    public function successor(Handler $successor) : void
    {
        $this->successor = $successor;
    }
}
