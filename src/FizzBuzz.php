<?php

class FizzBuzz
{
    /**
     * @param int $number
     *
     * @return int|string
     */
    public function execute(int $number)
    {
        if ($this->isFizz($number) && $this->isBuzz($number)) {
            return 'FizzBuzz';
        }

        if ($this->isFizz($number)) {
            return 'Fizz';
        }

        if ($this->isBuzz($number)) {
            return 'Buzz';
        }

        return $number;
    }

    /**
     * @param int $number
     *
     * @return bool
     */
    private function isFizz(int $number) : bool
    {
        return $number % 3 === 0;
    }

    /**
     * @param int $number
     *
     * @return bool
     */
    private function isBuzz(int $number) : bool
    {
        return $number % 5 === 0;
    }
}
