<?php

namespace Falabella\Responsibility\Multiple;

use Falabella\Exception\NotMultipleException;
use Falabella\Math\Multiply;
use Falabella\Responsibility\Handler;

/**
 * Class MultipleOf3
 * @package Falabella\Responsibility\Multiple
 */
class MultipleOf3 implements Handler
{

    /**
     *
     */
    const DIVISOR = 3;
    /**
     *
     */
    const TEXT = 'Linio';

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
            return $number;
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
