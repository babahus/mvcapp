<?php

include_once ROOT . '/models/Calc.php';

class CalcController
{
    public function actionIndex()
    {

        if (isset($_POST['submit'])) {
            $num1 = $_POST['number1'];
            $num2 = $_POST['number2'];
            $oper = $_POST['operation'];
            if(Calc::checkNumbers($num1,$num2)){
                $result = Calc::math($num1,$num2,$oper);
            }
        }
        require_once(ROOT . '/views/calc/index.php');
        return true;
    }

}