<?php
/**
 * Created by PhpStorm.
 * User: Rotciv
 * Date: 16/03/2018
 * Time: 02:28
 */

class ClasseCrypt
{
    function  GerarCrypt($valorDigitado)
    {




        $codificada =  crypt($valorDigitado,null);

        return $codificada;


    }


}