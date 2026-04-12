<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Configurações do e-mail
    $destinatario = "susana.c.f.d.carvalho@gmail.com"; // Troque pelo seu e-mail real
    $assunto = "Novo contato do site";

    // 2. Coleta e sanitização dos dados (Segurança)
    $nome = strip_tags(trim($_POST["nome"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $mensagem = htmlspecialchars(trim($_POST["mensagem"]));

    // 3. Validação simples
    if (empty($nome) || empty($mensagem) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Por favor, preencha todos os campos corretamente.";
        exit;
    }

    // 4. Montagem do corpo do e-mail
    $corpo = "Nome: $nome\n";
    $corpo .= "E-mail: $email\n\n";
    $corpo .= "Mensagem:\n$mensagem";

    // 5. Cabeçalhos (Headers)
    $headers = "From: $nome <$email>" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // 6. Envio
    if (mail($destinatario, $assunto, $corpo, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem. Tente novamente mais tarde.";
    }
} else {
    echo "Acesso inválido.";
}
?>