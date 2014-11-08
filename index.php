<?php
/**
 * Created by PhpStorm.
 * User: gilsonanselmodearaujo
 * Date: 07/11/14
 * Time: 00:25
 */

 echo "Olá School of Net";

$num1 = 10;
$num2 = 30;



try{
    $result = ($num1 + $num2) / 2;
    echo "Resultado = ".$result;
}catch (Exception $e){
    echo "Número inválido! Num1= ".$num1." Num2= ".$num2;

}

