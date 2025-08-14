<!DOCTYPE html>
<html lang="pt">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<head>
    <meta charset="utf-8">

    <title>Página de validação_Newsletter</title>

    <!-- Font Montserrat = google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <style>
        
        /* Código para retirar a marca de água 000webhost = tem de estar dentro de <head></head> e depois dentro da parte <still></still> */
        
        img[alt="www.000webhost.com"]{display:none;}
        
        
        
        /* Font Brandon Grotesque Light que se encontra na pasta do site */

        @font-face {
            src: url(fonts/brandon-grotesque-light-58a8a4b38001d.ttf);
            font-family: brandongrotesquelight;
        }

        /* imagem esticada no fundo */

        body {
            background-image: url(imagens/fundoazul.jpg);
            background-size: cover;
            background-attachment: fixed;
        }

        /* CARACTERÍSTICAS DOS BOTÕES */

        .btn {
            color: white;
            padding: 20px 50px;
            font-size: 20px;
            margin: 4px;
            opacity: 0.7;
            transition: 0.3s;
            background-color: #592978;
            border: none;
        }

        /*FADE EFFECT = grau de opacidade do botão quando se faz hover*/

        .btn:hover {
            opacity: 1;
            border: none;
        }

        /* Para retirar o efeito de link e mudar a cor da font */

        a {
            color: white;
            text-decoration: none;
        }

        .h5 {
            font-size: 25px;
            font-family: Brandon Grotesque;
            color: white;
        }

    </style>


</head>


<body>


    <div class="container">
        <div class="row">
            <div class="col-12">


                <div class="w3-container">


                    <div class="background;" style="width: 100%;">

                        <div class="w3-container w3-center">
                            <img src="imagens/certobranco.svg" alt="Avatar" style="width:50%">
                            <div class="h5"><b>BEM-VINDO!<br>SUBSCRIÇÃO CONFIRMADA!</b>
                                <p>Obrigada!</p>
                                </div>


                                <div class="w3-section">
                                    <button class="btn"><a href="inicioPT.html">OK</a></button>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>


</body>

</html>
