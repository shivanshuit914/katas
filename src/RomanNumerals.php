<?php

class RomanNumerals
{
    /**
     * @var array
     */
    private static $numberLookup = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];

    /**
     * @param int $number
     *
     * @return string
     */
    public function convert(int $number) : string
    {
        $romanNumeral = '';

        foreach (static::$numberLookup as $numberLimit => $symbol) {
            while ($number >= $numberLimit) {
                $romanNumeral .= $symbol;
                $number -= $numberLimit;
            }
        }

        return $romanNumeral;
    }
}
