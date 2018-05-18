<?php
/**
 * Created by PhpStorm.
 * User: Rotciv
 * Date: 17/03/2018
 * Time: 01:24
 */

class ClasseSHA256
{

    function  GerarSHA256($valorDigitado)
    {


        $codificada = hash('sha256', $valorDigitado);

        return $codificada;


    }



}