<?php


      if(isset($_POST['email']) && !empty($_POST['email'])){

      $nome = addslashes ($_POST['name']);
      $email = addslashes ($_POST['email']);
      $mensagem = addslashes ($_POST['message']);

      $to = "susana.c.f.d.carvalho@gmail.com";
      $subject = "Website Susana Carvalho";
    
      $body = "Nome: ".$nome."\r\n".
              "Email: ".$email."\r\n".
              "Mensagem: ".$mensagem;
          
      $header= "from:susanacarvalhoart@gmail.com"."\r\n".
               "Reply-To:".$email."\e\n".
               "X-Mailer: PHP/". phpversion();
          
        if(mail($to,$subject,$body,$header)){

      
            echo("email enviado com sucesso");
            
        }else{          
            
            echo("email não pode ser enviado");
            
            
}          
      
}




?>