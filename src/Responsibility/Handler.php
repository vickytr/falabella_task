<?php

namespace Falabella\Responsibility;

/**
 * Interface Handler
 * @package Falabella\Responsibility
 */
interface Handler
{
    /**
     * @param $number
     * @return mixed
     */
    public function handler($number);

    /**
     * @param Handler $successor
     */
    public function successor(Handler $successor) : void;
}
