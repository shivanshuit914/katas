<?php

namespace spec;

use PrimeFactor;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorSpec extends ObjectBehavior
{
    function it_returns_none_for_number_1()
    {
        $this->calculate(1)->shouldReturn([]);
    }
}
