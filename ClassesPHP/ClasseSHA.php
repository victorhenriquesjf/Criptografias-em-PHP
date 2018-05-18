<?php
/**
 * Created by PhpStorm.
 * User: Rotciv
 * Date: 16/03/2018
 * Time: 02:14
 */

class ClasseSHA
{


    function  GerarSHA($CriptografiaEscolhida,$valorDigitado)
    {

        if($CriptografiaEscolhida =="sha1"){

            $codificada = sha1($valorDigitado);
            return $codificada;

        }

        if($CriptografiaEscolhida =="sha256"){

            $codificada = hash('sha256', $valorDigitado);

            return $codificada;

        }

        if($CriptografiaEscolhida =="sha384"){

            $codificada = hash('sha384', $valorDigitado);

            return $codificada;

        }

        if($CriptografiaEscolhida =="sha512"){

            $codificada = hash('sha512', $valorDigitado);

            return $codificada;

        }


        }


}