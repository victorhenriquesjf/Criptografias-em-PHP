<?php


require_once "ClassesPHP/VerificaCriptografia.php";

if (isset($_POST["Criptografias"]) && isset($_POST["valor"])) {


    $CriptografiaEscolhida = $_POST["Criptografias"];
    $valorDigitado = $_POST["valor"];
    $METODO = $_POST["METODO"];
    $object = new VerificaCriptografia();
    $Resultado = $object->verificar($CriptografiaEscolhida, $valorDigitado,$METODO);


}


?>


<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trabalho - Tássio</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/hero-slider-style.css">
    <link rel="stylesheet" href="css/templatemo-style.css">


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


                            <select id="Criptografias" name="Criptografias"
                                    class="form-control center-block tm-max-w-400">
                                <option value=""></option>
                                <option value="sha1">SHA1</option>
                                <option value="sha256">SHA256</option>
                                <option value="sha384">SHA384</option>
                                <option value="sha512">SHA 512</option>
                                <option value="aes-128-cbc">AES-128-CBC</option>
                                <option value="aes-128-cfb">AES-128-CFB</option>
                                <option value="aes-128-cfb1">AES-128-CFB1</option>
                                <option value="aes-128-cfb8">AES-128-CFB8</option>
                                <option value="aes-128-ofb">AES-128-OFB</option>
                                <option value="aes-192-cbc">AES-192-CBC</option>
                                <option value="aes-192-cfb">AES-192-CFB</option>
                                <option value="aes-192-cfb1">AES-192-CFB1</option>
                                <option value="aes-192-cfb8">AES-192-CFB8</option>
                                <option value="aes-192-ofb">AES-192-OFB</option>
                                <option value="aes-256-cbc">AES-256-CBC</option>
                                <option value="aes-256-cfb">AES-256-CFB</option>
                                <option value="aes-256-cfb1">AES-256-CFB1</option>
                                <option value="aes-256-cfb8">AES-256-CFB8</option>
                                <option value="aes-256-ofb">AES-256-OFB</option>
                                <option value="Minha">Minha Criptografia</option>



                            </select>
                            <br>
                            <br>

                            <select name="METODO" id="METODO" class="form-control center-block tm-max-w-400">
                                <option value="Encriptar">Encriptar</option>
                                <option value="Desencriptar">Desencriptar</option>
                            </select>
                            <br>
                            <br>
                            <input name="valor" type="text" class="form-control center-block tm-max-w-400">


                        </div>

                        <button type="submit" class="cd-btn">OK</button>

                        <br>
                        <br>
                        <h1>Resultado :</h1>
                        <p><?php echo (isset($Resultado) && ($Resultado != null || $Resultado != "")) ? $Resultado : ''; ?></p>
                        <br>

                    </form>
                </div>
                <a href="criptografiaslide.pptx" download><button type="submit" class="cd-btn">Baixar Slide</button></a>

            </div>

        </li>
    </ul>


</body>
</html>



