<?php
Class Calc
{
    public static function math($num1,$num2,$oper)
    {
        if ($oper === 'plus') {
            return $result = $num1 + $num2;
        }
        if ($oper === 'minus') {
            return $result = $num1 - $num2;
        }
        if ($oper === 'divide') {
            return $result = $num1 / $num2;
        }
        if ($oper === 'multiply') {
            return $result = $num1 * $num2;
        }
    }

    public static function checkNumbers($num1,$num2){
        if (is_numeric($num1) && is_numeric($num2)){
            return true;
        }
        return false;
    }
}