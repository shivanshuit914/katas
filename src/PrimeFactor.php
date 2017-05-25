<?php

class PrimeFactor
{
    /**
     * @param int $number
     * @return int[]
     */
    public function calculate(int $number)
    {
        $primes = [];

        for ($i = 2; $number > 1; $i++) {
            for (; $number % $i == 0; $number /= $i)
            {
                $primes[] = $i;
            }
        }

       return $primes;
    }
}
