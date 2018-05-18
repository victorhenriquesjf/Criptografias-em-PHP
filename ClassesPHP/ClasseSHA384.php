<?php
/**
 * Created by PhpStorm.
 * User: Rotciv
 * Date: 17/03/2018
 * Time: 01:30
 */

class ClasseSHA384
{

    function  GerarSHA384($valorDigitado)
    {


        $codificada = hash('sha384', $valorDigitado);

        return $codificada;


    }


}