<?php
function intToRomawi($number)
{
    $hasil = '';
    while ($number >= 1000) {
        $hasil .= 'M';
        $number -= 1000;
    }
    if ($number >= 500) {
        if ($number > 500) {
            if ($number >= 900) {
                $hasil .= 'CM';
                $number -= 900;
            } else {
                $hasil .= 'D';
                $number -= 500;
            }
        }
    }
    while ($number >= 100) {
        if ($number >= 400) {
            $hasil .= 'CD';
            $number -= 400;
        } else {
            $hasil .= 'C';
            $number -= 100;
        }
    }
    if ($number >= 50) {
        if ($number >= 90) {
            $hasil .= 'XC';
            $number -= 90;
        } else {
            $hasil .= 'L';
            $number -= 50;
        }
    }
    while ($number >= 10) {
        if ($number >= 40) {
            $hasil .= 'XL';
            $number -= 40;
        } else {
            $hasil .= 'X';
            $number -= 10;
        }
    }
    if ($number >= 5) {
        if ($number == 9) {
            $hasil .= 'IX';
            $number -= 9;
        } else {
            $hasil .= 'V';
            $number -= 5;
        }
    }
    while ($number >= 1) {
        if ($number == 4) {
            $hasil .= 'IV';
            $number -= 4;
        } else {
            $hasil .= 'I';
            $number -= 1;
        }
    }
    return $hasil;
}
echo intToRomawi(2022);
