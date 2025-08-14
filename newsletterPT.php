<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">

    <title>Newsletter</title>
    
    <!-- Font Montserrat = google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Meta Name Tag = texto identificativo do site que aparece no google = fundamental para identificar o site -->
    <meta name="description" content="Website onde pode encontrar os trabalhos da artista Susana Carvalho.">
    <meta name="keywords" content="arte, desenho, pintura, técnica mista, gravura, instalação, fotografia, design, freelancer">


    <!-- Função de validação do Formulário -->

    <script>
        function validateForm() {
            var x = document.forms["myForm"]["fname"].value;
            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
        }

    </script>

    <style>
        
        /* Código para retirar a marca de água 000webhost = tem de estar dentro de <head></head> e depois dentro da parte <still></still> */
        
        img[alt="www.000webhost.com"]{display:none;}
        
        
        
        /* Font Brandon Grotesque Light que se encontra na pasta do site */
        
        @font-face{
            src:url(fonts/brandon-grotesque-light-58a8a4b38001d.ttf);
            font-family:brandongrotesquelight;   
        }
        
        /* PARA TIRAR O SUBLINHADO RAIZ DOS LINKS NAVBAR - MENU */

        a:link {
            color: #6666ff;
            background-color: transparent;
            text-decoration: none;
        }

        /* SUBLINHADO LINKS NAVBAR - MENU */
        /* "white-space: nowrap"= para links com 2 palavras ficarem na mesma linha, como por ex. o link SUSANA CARVALHO */

        .navbar {
            font-family: sans-serif;
            background-color: white;
            white-space: nowrap;
        }

        .navbar span {
            display: inline-block;
            margin: 10px 2% 10px 2%;
        }

        .navbar span::after {
            display: block;
            position: relative;
            top: 3px;
            content: '';
            border-bottom: solid 3px #66ccff;
            transform: scaleX(0);
            transition: transform .25s ease-in-out;
        }

        .navbar span:hover::after {
            transform: scaleX(1);
        }

        /*MARGEM  = grau de opacidade do botão quando se faz hover*/

        .h1 {
            margin-top: 25px;
            margin-bottom: 25px;
        }

        /* CARACTERÍSTICAS DOS BOTÕES */

        .btn {
            color: white;
            padding: 13px 32px;
            text-align: center;
            font-size: 16px;
            margin: 4px 2px;
            opacity: 0.7;
            transition: 0.3s;
        }

        /*FADE EFFECT = grau de opacidade do botão quando se faz hover*/

        .btn:hover {
            opacity: 1
        }

        /* LINHA FOOTER = cor da linha */

        .linha {
            background-color: white;
        }

        /* CARACTERÍSTICAS DO BOTÃO QUE VAI AO TOPO */

        .btn-topo {
            display: inline-block;
            padding: 3px 12px;
            background: black;
            color: gray;
            border: 2px solid gray;
            text-decoration: none;
            position: absolute;
            right: 20px;
            bottom: 40px;
            font-size: 18px;
        }

        /* EFEITO SCROLL SMOOTH DO BOTÃO QUE VAI AO TOPO  */

        html {
            scroll-behavior: smooth;
        }

        /* REGRA PARA O WEBSITE FICAR TODO DENTRO DE CONTAINER-FLUID E NÃO TER AS MARGENS BRANCAS PRÓPRIAS DO BOOTSTRAP */

        .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }

        /* COR DAS DOS ICONS DAS REDES SOCIAIS DO FOOTER */

        /* INSTAGRAM */

        .fa-instagram {
            color: white;
        }

        /* FACEBOOK */

        .fa-facebook-f {
            color: white;
        }

        /* PINTEREST */

        .fa-pinterest-p {
            color: white;
        }

        /* LINKEDIN */

        .fa-linkedin-in {
            color: white;
        }
        
        /* CONTACTO */

        .far fa-envelope {
        }

        /* ICON INGLÊS + ICON SEARCH - POSICIONAMENTO NA MESMA LINHA - MENU SECUNDÁRIO */

        .iconingles {
           position: absolute; 
           margin-top:1%;
           margin-left:90%;  
        }
       
        /* ICON INGLÊS = mudança de cor com Hover */
        
        .iconingles:hover {
            background-image: url('imagens/ENfundoroxo.png');
        }
        /* SEARCH BOX QUE OCUPA PARTE DA PÁGINA */

        * {
            box-sizing: border-box;
        }

        .openBtn {
            background: white;
            border: none;
            padding: 10px 15px;
            font-size: 20px;
            cursor: pointer;
            float: right;
        }

        .openBtn:hover {
            background: white;
        }

        .overlay {
            height: 30%;
            width: 100%;
            display: none;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
        }

        .overlay-content {
            position: relative;
            top: 46%;
            width: 80%;
            text-align: center;
            margin-top: 30px;
            margin: auto;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
            cursor: pointer;
            color: white;
        }

        .overlay .closebtn:hover {
            color: #ccc;
        }

        .overlay input[type=text] {
            padding: 15px;
            font-size: 17px;
            border: none;
            float: left;
            width: 80%;
            background: white;
        }

        .overlay input[type=text]:hover {
            background: #f1f1f1;
        }

        .overlay button {
            float: left;
            width: 20%;
            padding: 15px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .overlay button:hover {
            background: #bbb;
        }

        /* MENU HAMBURGUER + CLOSE ICON ANIMADOS  */

        .container {
            cursor: pointer;
        }

        .bar1,
        .bar2,
        .bar3 {
            width: 30px;
            height: 5px;
            background-color: #663265;
            margin: 6px 0;
            transition: 0.4s;
        }

        .change .bar1 {
            -webkit-transform: rotate(-45deg) translate(-9px, 6px);
            transform: rotate(-45deg) translate(-9px, 6px);
        }

        .change .bar2 {
            opacity: 0;
        }

        .change .bar3 {
            -webkit-transform: rotate(45deg) translate(-8px, -8px);
            transform: rotate(45deg) translate(-8px, -8px);
        }
        
        
        
        /* Para tirar o border às cards */
        
        .card {
            border:none;     
        }  

    </style>

</head>


<body>

    <div class="container-fluid">

      <!-- MENU 1 -->

        <div class="container">
            <div class="row">
                <div class="col-sm">

                    <!-- ICON SEARCH + MENU SEARCH 25% DA PÁGINA + FUNCIONAMENTO OK DE MENU SEARCH ATRAVÉS DE ALGUMAS PALAVRAS  -->
                      <!--   search contruído através de condições parecido ao "ex. quantos queres" -->
                        <!--   "word.toUpperCase()" = para ser permitida a busca em maiúsculas também -->

                    <div id="myOverlay" class="overlay">
                        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                        <div class="overlay-content">
                            <form>
                                <input type="text" placeholder="Insira o termo de pesquisa" name="word" id="word">
                                <button type="button" onclick="search(document.getElementById('word').value);"><i class="fa fa-search"></i></button>
                                <script>        
                                    function search(word) {
                                        word = word.toUpperCase();
                                        if(word=="DESENHO"){
                                            window.location="projetosDesenhoPT.html";
                                        }else if(word=="PINTURA"){
                                            window.location="projetosPinturaPT.html";
                                        }
                                        else if(word=="TÉCNICA MISTA" || word=="TECNICA MISTA"){
                                            window.location="projetosTécnicaMistaPT.html";
                                        }
                                        else if(word=="GRAVURA"){
                                            window.location="projetosGravuraPT.html";
                                        }
                                        else if(word=="INSTALAÇÃO" || word=="INSTALAÇAO"){
                                            window.location="projetosInstalaçãoPT.html";
                                        }
                                        else if(word=="FOTOGRAFIA"){
                                            window.location="projetosFotografiaPT.html";
                                        }  
                                        else if(word=="DRAWING"){
                                            window.location="projectsDrawingEN.html";
                                        } 
                                        else if(word=="PAINTING"){
                                            window.location="projectsPaintingEN.html";
                                        } 
                                        else if(word=="MIXED MEDIA"){
                                            window.location="projectsMixedMediaEN.html";
                                        } 
                                        else if(word=="PRINTMAKING"){
                                            window.location="projectsPrintmakingEN.html";
                                        } 
                                        else if(word=="INSTALLATION"){
                                            window.location="projectsInstallationEN.html";
                                        } 
                                        else if(word=="PHOTOGRAPHY"){
                                            window.location="projectsPhotographyEN.html";
                                        } 
                                        
                                        else{
                                            alert ("Não encontramos resultados para a sua pesquisa. Por favor, tente com outra palavra.");
                                        }
                                    }    
                               </script>
                            </form>
                        </div>
                    </div>

       <div class="container">
            <div class="row">
                <div class="col-sm">          
                    
                    <!-- ICON SEARCH = para abrir janela search -->
                    
                    <button class="openBtn" onclick="openSearch()"><i class="fas fa-search" style="color:#592979; background-color:none;"></i></button>

                    <!-- ICON INGLÊS = para mudar idiomas -->

                    <div class="iconingles">
                        <a href="newsletterEN.php"><img src="imagens/EN.png"></a>
                    </div>
                    
                </div>
             </div>
         </div> 

                    <!-- MENU PRINCIPAL -->

                    <nav class="navbar navbar-expand-lg navbar-light bg-black">
                        <a class="navbar-brand" href="inicioPT.html"><img src="https://res.cloudinary.com/dwe9vcxln/image/upload/v1754954442/logotipo_lbdcm4.png" class="d-block w-50"></a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border: none">

                            <!-- problema do sublinhado por baixo do menu hamburguer resolvido = mudar nome "span" para "div" onde se encontram as bars (barras do menu hamburguer)e assim esse elemento não é afetado = mesmo procedimento para os links da barra de menus para não aparecerem 2 barras por baixo do link selecionado -->
                            
                            <div class="container" onclick="myFunction(this)">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                            </div>

                        </button>

                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto" style="font-family:Brandon Grotesque">
                                <li class="nav-item fixed">
                                    <span class="nav-link"><a href="index.html" style="color:#592978">INÍCIO</a></span>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link"><a href="novidadesPT.html" style="color:#592978">NOVIDADES</a></span>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link"><a href="projetosDesenhoPT.html" style="color:#592978">PROJETOS</a></span>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link"><a href="susanacarvalhoPT.html" style="color:#592978">SUSANA CARVALHO</a></span>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link"><a href="contactoPT.php" style="color:#592978">CONTACTO</a></span>
                                </li>
                            </ul>
                        </div>
                    </nav>

                </div>
            </div>
        </div>

        <!-- FORMULÁRIO DE NEWSLETTER-->

        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                          <!-- Título "Newsletter" -->

        
     <div class="h1">Newsletter</div>
        
                       <form action="newsletterPT.php" method="post">      
                            
                            
     <!-- Campo primeiro nome -->

               <!-- "required" = campo de prenchimento obrigatório -->
        
        
               <div class="row">
                   <div class="col">
                      <div class="form-group">
                          <label for="name"><b>Nome</b></label>
                          <input type="text" id="name" name="visitor_name" placeholder="Introduza o seu primeiro nome" class="form-control rounded-0" pattern=[A-Z\sa-z]{3,20} required>
                       </div>
                    </div>
   
                         
               <!-- Campo último nome -->
            
               <!-- "required" = campo de prenchimento obrigatório -->
                   

                 <div class="col">
                     <div class="form-group">
                        <label for="fname"><b>Apelido</b></label>
                        <input type="text" id="fname" name="visitor_fname" placeholder="Introduza o seu último nome" class="form-control rounded-0" pattern=[A-Z\sa-z]{3,20} required>
                     </div>
                 </div>
               </div>
                  
   
         <!-- Campo email -->

                <!-- "required" = campo de prenchimento obrigatório -->
                          
                          <!-- Ao escrever "input type="email" o sistema começa a pedir obrigatoriamente o "@" -->
         
        
                 <div class="row">
                     <div class="col">
                        <div class="form-group">
                           <label for="email"><b>Email</b></label>
                           <input type="email" id="email" name="visitor_email" placeholder="Introduza o seu email" class="form-control rounded-0" required>
                        </div>
                     </div>
                  </div>        
                          
                          
            <!-- Campo check -->

                <!-- "required" = campo de prenchimento obrigatório -->
                          
                          <!-- Ao escrever "input type="checkbox" o sistema pede ao utilizador para confirmar os campos de acordo com a política de privacidade -->       
                          
                          
                     <div class="row">
                        <div class="col">    
                            <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" name="visitor_check" class="form-control rounded-0" required>
                                <label class="form-check-label" for="gridCheck"> Li e aceito a Política de <u>Privacidade e Cookies</u> e declaro ter mais de 16 anos. </label>
                            </div>
                            </div>
                        </div>
                     </div>
        
                  
                          
              <!-- Campo botão de envio -->
                   
                            
                              <button type="submit" class="btn btn-outline-white text-white btn rounded-0" style="background-color:#663366"><b>Subscrever</b></button>

                        <br>
                        <br>

                        <p>Todos os campos são de preenchimento obrigatório.</p>

                      </form>


        
  </div>
      

                       <!-- IMAGEM DO FORMULÁRIO -->

                <div class="col-sm-6">

                   <img src="https://res.cloudinary.com/dwe9vcxln/image/upload/v1754953980/0_zdf5p1.jpg" alt="Avatar" class="d-block w-100">  
                    
                     </div>
                    
                </div>

             </div> 
        
 <!-- FOOTER -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm">

                    <div class="footer text-white text-center footer-expand-lg p-3" style="background-color: black">

                        <!--  Formulário Newsletter + Redes Sociais + Contactos e Informações -->

                        <div class="container">
                            <div class="row">
                                <div class="col-sm">

                                    <!-- Formulário Newsletter -->

                                    <p class="text-left">NEWSLETTER</p>
                                    <form class="form-inline">
                                        <button type="submit" class="btn btn-outline-white text-white btn rounded-0" style="background-color:#663366; padding-left: 60px; padding-right: 60px"><b><a href="newsletterPT.php" style="color:white">Subscrever</a></b></button>
                                    </form>
                                </div>

                                <div class="col-sm">
                                    

                                   <!-- Redes Sociais -->
      
                                  <div align="left">

                                    <p class="text-left">REDES SOCIAIS</p>
                                    <div class="ul" style="align:left">
                                    
                                        <a href="https://www.instagram.com/susanacarvalhoart"><i class="fab fa-instagram px-2" style="font-size:20px"></i></a>
                                        <a href="https://www.facebook.com/susanacarvalho.art.77"><i class="fab fa-facebook-f px-2" style="font-size:18px"></i></a>
                                        <a href="https://www.pinterest.pt/susanacarvalhoart/"><i class="fab fa-pinterest-p px-2" style="font-size:18px"></i></a>
                                        <a href="https://pt.linkedin.com/in/susana-carvalho-79b01b82"><i class="fab fa-linkedin-in px-2" style="font-size:18px"></i></a>
                                      
                                    </div>
                                  </div>
                                </div>

                                <div class="col-sm">


                                    <!-- Contactos e Informações -->

                                    <p class="text-left">CONTACTOS E INFORMAÇÕES</p>

                                    <p class="text-left">Tem alguma questão ou sugestão <br> que gostaria de partilhar?</p>
                                       <div align="left"> 
                                         <button type="submit" class="btn rounded-0" style="background-color:#663366; padding-left: 16px; padding-right: 16px"><a href="contactoPT.php"><i class="far fa-envelope" style="font-size:18px; color:white;"></i></a></button> 
                                       </div>
                                </div>
                            </div>
                        </div>


                        <!-- Linha branca -->

                        <br>
                        <hr class="linha">
                        <br>

                        <!-- Direitos Reservados -->

                        <p>Política de Privacidade e Cookies Termos e Condições</p>
                        <p>© 2019 Susana Carvalho - Direitos reservados</p>



                    <!-- BOTÃO QUE PUXA TODA A PÁGINA PARA O TOPO -->
                    <!-- VER - https://www.youtube.com/watch?v=dRR3MbUD1Co -->

                    <a class="btn-topo" href="#"><i class="fas fa-angle-up" style="color:#663366"></i></a>

                    <!-- Scripts - Jquery -->

                    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                    <script>
                        $('.btn-topo').click(function)(e) {
                        e.preventDefault();
                        $('html,body').animate({
                            scrollTop: 0
                        }, 'slow');
                        });

                    </script>

                </div>

            </div>
        </div>
    </div>



    <!-- Script para Menu Hamburguer + Close Icon -->

        <script>
            function myFunction(x) {
                x.classList.toggle("change");
            }

        </script>

    <!-- Script para search menu completo -->

    <script>
        function openSearch() {
            document.getElementById("myOverlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("myOverlay").style.display = "none";
        }

    </script>


    <!-- Script -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
        

<!-- PUS PHP NA MESMA PÁGINA PARA MODAL APARECER NA MESMA PÁGINA = APARECE MAS SÓ FUNCIONA PORQUE CARREGO NO BOTÃO ENVIAR MENSAGEM E A MENSAGEM DO SUCESSO DE ENVIO POR CAUSA DO MÉTODO GET APARECE SEMPRE EM BAIXO DA PÁGINA = RESOLVER I PHP FUNCIONA MAS PRECISA DE ESTAR TUDO SINCRONIZADO 

NESTE CASO FICAM AS LINGUAGENS TODAS NA MESMA PÁGINA = HTML + CSS + PHP = NÃO ESTOUA VINCULAR UMA PÁGINA DE HTML COM OUTRA DE PHP--> 

<?php

   // FORMULÁRIO DE CONTACTO = PHP =  parte mecanismo dinâmico 

       // parte que se refere  a todo o código PHP que se interliga com código HTML e código CSS da outra página = faz com que a pagina "contacto.php" + página "index.html" para todos os atributos e funcionalidades do formuário de contacto funcionarem corretamente (html + css + php)

           // código que se refere aos elementos (primeiro nome + último nome + email + assunto + mensagem) que se encontram no  formulário de contacto para preenchimento
   
                // "$recipient =" refere-se ao email do proprietário do website, para onde vão ser enviadas as informações que o cliente preencheu no formulário de contacto

                     // "if ($_POST) { $visitor_name.......... $recipient =......} = refere-se aos elementos que vão aperecer na mensagem (numa outra página isolada) para o cliente após ter preenchido o formulário de contacto = o seu nome + a mensagem  de envio ou não do email + o mecanismo do envio da mensagem  para proprietário do website


if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $visitor_subject = "Newsletter PT - Website Susana Carvalho";
    
    $recipient = "susana.c.f.d.carvalho@gmail.com";

    
    if(isset($_POST['visitor_name'])) {
        $visitor_name= filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
    }
    
     
    if(isset($_POST['visitor_fname'])) {
        $visitor_fname= filter_var($_POST['visitor_fname'], FILTER_SANITIZE_STRING);
    }
    
    
    if(isset($_POST['visitor_email'])) {
        $visitor_email= str_replace(array("\r", "\n", "%0a", "%0d"),  '', $_POST['visitor_email']);
        $visitor_email= filter_var($visitor_email, FILTER_SANITIZE_STRING);
    }
    
 
    if(isset($_POST['visitor_check'])) {
        $visitor_check= filter_var($_POST['visitor_check'], FILTER_SANITIZE_STRING);
    }
    
     
    
        // parte que mostra informações (assunto + primeiro nome do cliente + último nome do cliente + email do cliente) enviadas para o email do proprietário do website após o preenchimento do formulário pelo cliente com sucesso

    
    $headers = 'MIME-Version: 1.0' . "\r\n"
      
  .'Assunto:  ' . $visitor_subject . "\r\n"
  .'Primeiro Nome do cliente:  ' . $visitor_name . "\r\n"
  .'Último Nome do cliente:  ' . $visitor_fname . "\r\n"     
  .'Email do cliente: ' . $visitor_email . "\r\n";
    
    
        // mensagens que aparecem em método "POST" numa outra página a validar ou não a entrega da mensagem ao cliente após o preenchimento do formuário
    
    
    if(mail($recipient, $visitor_subject, $headers)) {
        
        
             // mensagem mostrada ao cliente sobre envio ou não da as informações preenchidas no formulário de contacto para o email do proprietário do website 
        

        
        echo "" . $name . "<br>";
        
        echo ""; 
        
        
            // código em PHP que, após o prrenchimento total dos campos do formulário de contacto,  redireciona a página de "CONTACTO.PHP" para outra que queiramos que seja a página de sucesso de envio = URL=.....= vai indicar a página para onde queremos que vá o user após o preenchimento correcto do form.
        
        
        echo'<META HTTP-EQUIV="Refresh" Content="1; URL=paginavalidacaocorreta_newsletterPT.php">';
        
      
             //  echo "PARABÉNS!" . $name . "<br>";echo "<p>Obrigada pelo contacto, $visitor_name. Será contactado em menos de 24 horas.</p>"; } else { echo "UPS..." . $name . "<br>"; echo '<p>Pedimos desculpa, mas algo de errado aconteceu.</p>'; }}else{echo '<p>Algo não funcionou.</p>';}         = nesta linha de código foram apagadas as mengagens raiz dos Echo "..." para que não apareça nenhuma mensagem de validação ou não na página, visto que já coloquei um link que após o sucesso do preenchimento do formulário d vai reecaminhar para outra página isolada com um botão que se liga ao início do site = o objectivo é que tenha um lado estético e funcional não deixando o cliente sair do website = foi usado este código =    echo'<META HTTP-EQUIV="Refresh" Content="1; URL=paginadevalidacaocorrecta_contacto.php">';  = para se remeter  a nossa validação para a página pretendida + as mensagens caem no email de forma correta também

 
        
    } else {
        
        echo "" . $name . "<br>"; 
        
        echo '';
        
    }
    
    }else{
    
        echo '';
    
  
}


?>
    
</body>

</html>
