<?php

namespace spec;

use FizzBuzz;
use PhpSpec\ObjectBehavior;

class FizzBuzzSpec extends ObjectBehavior
{
    public function it_returns_1_for_1()
    {
        $this->execute(1)->shouldReturn(1);
    }

    public function it_returns_2_for_2()
    {
        $this->execute(2)->shouldReturn(2);
    }

    public function it_returns_Fizz_for_3()
    {
        $this->execute(3)->shouldReturn('Fizz');
    }

    public function it_returns_4_for_4()
    {
        $this->execute(4)->shouldReturn(4);
    }

    public function it_returns_Buzz_for_5()
    {
        $this->execute(5)->shouldReturn('Buzz');
    }

    public function it_returns_Fizz_for_6()
    {
        $this->execute(6)->shouldReturn('Fizz');
    }

    public function it_returns_FizzBuzz_for_15()
    {
        $this->execute(15)->shouldReturn('FizzBuzz');
    }

    public function it_returns_Fizz_for_6000()
    {
        $this->execute(66666)->shouldReturn('Fizz');
    }

    public function it_returns_Buzz_for_500000()
    {
        $this->execute(50000)->shouldReturn('Buzz');
    }

    public function it_returns_FizzBuzz_for_150000000()
    {
        $this->execute(150000000)->shouldReturn('FizzBuzz');
    }
}
