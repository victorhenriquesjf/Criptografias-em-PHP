<?php
/**
 * Created by PhpStorm.
 * User: Rotciv
 * Date: 16/03/2018
 * Time: 02:14
 */

class ClasseSHA1
{


    function  GerarSHA1($valorDigitado)
    {


        $codificada = sha1($valorDigitado);

        return $codificada;


    }



}