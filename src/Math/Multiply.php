<?php

namespace Falabella\Math;

use Falabella\Exception\NotMultipleException;

/**
 * Class Multiply
 * @package Falabella\Math
 */
class Multiply implements Multiplicable
{

    /**
     * @param $divisor
     * @param $dividend
     * @return int
     * @throws NotMultipleException
     */
    public function isMultiple($divisor, $dividend) : int
    {
        if ($divisor % $dividend !== 0) {
            throw new NotMultipleException();
        }
        return $divisor;
    }
}
