<?php

namespace Falabella;

use Falabella\Factory\Math\CountFactory;
use Falabella\Factory\Math\LengthFactory;

/**
 * Class Result
 * @package Falabella
 */
abstract class Result
{

    /**
     * @return Response
     */
    abstract public function getResult() : Response;

    /**
     * @return Math\Length
     */
    protected function getLength()
    {
        return LengthFactory::build(1, 100);
    }

    /**
     * @return Number
     */
    protected function getCount()
    {
        return CountFactory::build($this->getLength());
    }
}
