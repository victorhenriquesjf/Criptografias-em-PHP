<?php
/**
 * Created by PhpStorm.
 * User: Rotciv
 * Date: 16/03/2018
 * Time: 02:43
 */

class ClasseSha512
{

    function  GerarSHA512($valorDigitado)
    {


        $codificada = hash('sha512', $valorDigitado);

        return $codificada;


    }


}