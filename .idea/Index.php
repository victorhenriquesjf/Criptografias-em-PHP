<?php


require_once "ClassesPHP/VerificaCriptografia.php";

if(isset($_POST["Criptografias"]) && isset($_POST["valor"])){


    $CriptografiaEscolhida = $_POST["Criptografias"];
    $valorDigitado = $_POST["valor"];

    $object = new VerificaCriptografia();
    $Resultado = $object->verificar($CriptografiaEscolhida,$valorDigitado);


}



?>



<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trabalho - Tássio</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/hero-slider-style.css">                                  <!-- Hero slider style -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->


</head>

<body>
<section class="cd-hero">
    <ul class="cd-hero-slider">

        <li class="selected">
            <div class="cd-full-width">
                <div class="tm-slide-content-div">


                    <form method="post">
                        <i class="fa fa-cogs tm-slide-icon"></i>
                        <h2 class="text-uppercase">Criptografia</h2>
                        <p class="m-b-mid">Trabalho feito por Victor Almeida.</p>
                        <div class="form-group">

                            <select id ="Criptografias" name="Criptografias" class="form-control center-block tm-max-w-400">
                                <option value=""></option>
                                <option value="SHA1">SHA1</option>
                                <option value="SHA256">SHA256</option>
                                <option value="SHA384">SHA384</option>
                                <option value="SHA 512">SHA 512</option>
                                <option value="AES ENCRIPTAR">AES CODIFICAR</option>
                                <option value="AES DESENCRIPTAR">AES DECODIFICAR</option>
                                <option value="MD5">MD5</option>
                                <option value="Codificar BASE64">Codificar BASE64</option>
                                <option value="Decodificar BASE64">Decodificar BASE64</option>
                                <option value="Crypt - Unix Standard DES-based">Crypt - Unix Standard DES-based</option>
                                <option value="Whirlpool">Whirlpool</option>
                                <option value="Minha Criptografia Encriptar">Minha Criptografia</option>
                                <option value="Minha Criptografia Desencriptar">Minha Criptografia Desencriptar</option>

                            </select>
                            <br>
                            <input name="valor" type="text" class="form-control center-block tm-max-w-400">
                        </div>
                        <button type="submit" class="cd-btn">OK</button><br>
                        <br>
                        <h1>Resultado :</h1>
                        <p><?php echo (isset($Resultado) && ($Resultado != null || $Resultado != "")) ? $Resultado : '';?></p>
                    </form>
                </div>
            </div>
        </li>


    </ul>

</body>
</html>



