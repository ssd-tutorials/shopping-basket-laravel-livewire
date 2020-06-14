<?php

if (!function_exists('int_to_decimal')) {
    function int_to_decimal(int $number)
    {
        return number_format(($number / 100), 2);
    }
}
