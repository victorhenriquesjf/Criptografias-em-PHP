<?php
/**
 * Created by PhpStorm.
 * User: Rotciv
 * Date: 16/03/2018
 * Time: 00:59
 */

require_once "ClasseSHA.php";
require_once "ClasseBase64.php";

require_once "ClasseMinhaCriptografia.php";

require_once "ClasseAES.php";

class VerificaCriptografia
{


    function verificar($CriptografiaEscolhida, $valorDigitado,$METODO)
    {


        if ($CriptografiaEscolhida == "sha1" || $CriptografiaEscolhida == "sha256" || $CriptografiaEscolhida == "sha384"
            || $CriptografiaEscolhida == "sha512" && $valorDigitado != " ") {

            if($METODO=="Desencriptar"){return $Resultado = "Não é possivel realizar esta operação."; }
            $object = new ClasseSHA();

            $Resultado = $object->GerarSHA($CriptografiaEscolhida, $valorDigitado);

            return $Resultado;

        }


        if ($CriptografiaEscolhida == "Minha"  && $valorDigitado != " ") {

            $object = new ClasseMinhaCriptografia();

            if($METODO=="Encriptar")

                {
                    $Resultado = $object->GerarMinhaCriptografia($CriptografiaEscolhida,$valorDigitado,$METODO);

                    return $Resultado;

                }else{

                $Resultado = $object->GerarMinhaCriptografia($CriptografiaEscolhida,$valorDigitado,$METODO);

                return $Resultado;


            }


        }


        if ($CriptografiaEscolhida && $METODO == "Encriptar" ) {


            $object = new ClasseAES();

            $Resultado = $object->cryptAES($CriptografiaEscolhida,$valorDigitado);



            return $Resultado;

        }


        if ($METODO == "Desencriptar" && $CriptografiaEscolhida!= " " && $valorDigitado!= " ") {


            $object = new ClasseAES();



            $Resultado2 = $object->desCryptAES($CriptografiaEscolhida,$valorDigitado);

            return $Resultado2;

        }


    }




}


?>