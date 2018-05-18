<?php
/**
 * Created by PhpStorm.
 * User: Rotciv
 * Date: 16/03/2018
 * Time: 02:45
 */

class ClasseWhirlpool
{


    function  GerarWhirlpool($valorDigitado)
    {


        $codificada = hash('Whirlpool', $valorDigitado);

        return $codificada;


    }
}