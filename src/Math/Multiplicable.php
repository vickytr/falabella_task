<?php

namespace Falabella\Math;

/**
 * Interface Multiplicable
 * @package Falabella\Math
 */
interface Multiplicable
{
    /**
     * @param $divisor
     * @param $dividend
     * @return int
     */
    public function isMultiple($divisor, $dividend) : int;
}
