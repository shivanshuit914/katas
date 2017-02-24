<?php

namespace spec;

use RomanNumerals;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralsSpec extends ObjectBehavior
{
    function it_returns_I_for_number_1()
    {
        $this->convert(1)->shouldReturn('I');
    }

    function it_returns_II_for_number_2()
    {
        $this->convert(2)->shouldReturn('II');
    }

    function it_returns_III_for_number_3()
    {
        $this->convert(3)->shouldReturn('III');
    }

    function it_returns_IV_for_number_4()
    {
        $this->convert(4)->shouldReturn('IV');
    }

    function it_returns_V_for_number_5()
    {
        $this->convert(5)->shouldReturn('V');
    }

    function it_returns_VIII_for_number_8()
    {
        $this->convert(8)->shouldReturn('VIII');
    }

    function it_returns_IX_for_number_9()
    {
        $this->convert(9)->shouldReturn('IX');
    }

    function it_returns_X_for_number_10()
    {
        $this->convert(10)->shouldReturn('X');
    }

    function it_returns_X_for_number_50()
    {
        $this->convert(50)->shouldReturn('L');
    }

    function it_returns_XC_for_number_90()
    {
        $this->convert(90)->shouldReturn('XC');
    }

    function it_returns_MDCC_for_number_1700()
    {
        $this->convert(1700)->shouldReturn('MDCC');
    }
}
