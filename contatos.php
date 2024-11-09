<?php

if (isset($_POST['nome']) && !empty($_POST['nome'])) {

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $assunto = addslashes($_POST['assunto']);
    $mensagem = addslashes($_POST['mensagem']);

    $to = "markusdanyllo07@gmail.com";
    $subject = $assunto; // Corrigido o nome da variável
    $body = "Nome: " . $nome . "\r\n" .
            "Email: " . $email . "\r\n" .
            "Mensagem: " . $mensagem;

    $header = "From: markusdanyllodev@gmail.com" . "\r\n" .
              "Reply-To: " . $email . "\r\n" .
              "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $header)) {
        echo "Email enviado com sucesso!";
    } else {
        echo "Erro: Email não foi enviado. Verifique as configurações do servidor.";
    }
} else {
    echo "Preencha todos os campos.";
}

?>
