<?php
/**
 * Created by PhpStorm.
 * User: Rotciv
 * Date: 16/03/2018
 * Time: 02:53
 */

class ClasseMinhaCriptografia
{


    function  GerarMinhaCriptografia($CriptografiaEscolhida,$valorDigitado,$METODO)
    {

        if($METODO=="Encriptar"){

            if(is_string($valorDigitado)){


                $codificada = base64_encode($valorDigitado);

                $codificada;
                return $codificada;

            }

            $encripitado = ($valorDigitado * 3.14)/55;

            return $encripitado;

        }


        if($METODO=="Desencriptar"){

            if(is_string($valorDigitado)){

                $result= $valorDigitado;
                $codificada = base64_decode($result);


                return $codificada;

            }

            $desencriptado = ($valorDigitado/3.14)*55 ;


            return $desencriptado;

        }



    }



}