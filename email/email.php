<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {

    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $assunto = addslashes($_POST['assunto']);
    $texto = addslashes($_POST['texto']);

    $to = "clinica@cardosoeavila.com.br";
    $subject = "[SITE]" . $assunto;
    $body = "Nome: " . $nome . "\r\nEmail: " . $email . "\r\nTelefone: " . $telefone . "\r\nMenssagem: " . $texto;
    $header = "From: clinica@cardosoeavila.com.br" . "\r\n" . "Reply-To:" . $email . "\r\n" . "x=Mailer:PHP/" . phpversion();

    if (mail($to, $subject, $body, $header)) {
        ?>
        <script language="JavaScript">
        
        alert("Email Enviado com Sucesso!");
       window.location = '../fale-conosco.php';
       
        </script>
        <?
    } else {
        
        ?>
        <script language="JavaScript">
        
        alert("Houve um Erro. Por favor, Tentar novamente!");
       window.location = '../fale-conosco.php';
       
        </script>
        <?
    }
}
