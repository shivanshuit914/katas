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

    function it_returns_2_for_number_2()
    {
        $this->calculate(2)->shouldReturn([2]);
    }

    function it_returns_3_for_number_3()
    {
        $this->calculate(3)->shouldReturn([3]);
    }

    function it_returns_2_2_for_number_4()
    {
        $this->calculate(4)->shouldReturn([2, 2]);
    }

    function it_returns_2_2_2_for_number_8()
    {
        $this->calculate(8)->shouldReturn([2, 2, 2]);
    }

    function it_returns_11_for_number_11()
    {
        $this->calculate(11)->shouldReturn([11]);
    }

    function it_returns_2_2_2_5_5_5_for_number_1000()
    {
        $this->calculate(1000)->shouldReturn([2, 2, 2, 5, 5, 5]);
    }
}
