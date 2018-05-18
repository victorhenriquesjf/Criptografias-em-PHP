<?php
/**
 * Created by PhpStorm.
 * User: Rotciv
 * Date: 16/03/2018
 * Time: 02:20
 */

class ClasseBase64
{

    function  CodificarBase64($valorDigitado)
    {


        $codificada = base64_encode($valorDigitado);

          return $codificada;


    }

    function  DecodificarBase64($valorDigitado)
    {


        $codificada = base64_decode($valorDigitado);

        return $codificada;


    }

}