<?php

namespace Falabella\Math;

/**
 * Interface Countable
 * @package Falabella\Math
 */
interface Countable
{
    /**
     * @param Length $length
     * @return Number
     */
    public function count(Length $length) :  Number;
}
