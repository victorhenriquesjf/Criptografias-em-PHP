<?php
/**
 * Created by PhpStorm.
 * User: Rotciv
 * Date: 17/03/2018
 * Time: 01:58
 */

class ClasseAES
{


    function cryptAES ($method, $senha){

        if (in_array($method, openssl_get_cipher_methods()))
        {
            $iv = 'CryptoSenhaW.T.X';
            $ivlen = strlen($iv);
            $key = 12345;

            $senhaCrypto = openssl_encrypt($senha, $method, $key, $options=0, $iv);

            return $senhaCrypto;
        }

    }

    function desCryptAES ($method, $senhaCrypto){

        if (in_array($method, openssl_get_cipher_methods()))
        {
            $iv = 'CryptoSenhaW.T.X';
            $ivlen = strlen($iv);
            $key = 12345;

            $senhaOriginal = openssl_decrypt($senhaCrypto, $method, $key, $options=0, $iv);

            return $senhaOriginal;
        }

    }




}




