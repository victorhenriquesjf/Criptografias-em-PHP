<?php
/**
 * Created by PhpStorm.
 * User: Rotciv
 * Date: 16/03/2018
 * Time: 01:04
 */

class ClasseMD5
{


    function  Gerarmd5($valorDigitado)
    {


        $codificada = md5($valorDigitado);

        return  $codificada;


    }



}

?>