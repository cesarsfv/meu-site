<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];

    $para = "cesarvtc16@gmail.com"; 
    $assunto_email = "Contato do Portfólio: $assunto";

    $mensagem_email = "Nome: $nome\n";
    $mensagem_email .= "E-mail: $email\n";
    $mensagem_email .= "Assunto: $assunto\n\n";
    $mensagem_email .= "Mensagem:\n$mensagem";

    if (mail($para, $assunto_email, $mensagem_email)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail. Por favor, tente novamente mais tarde.";
    }
} else {
    header("Location: index.html"); 
}
?>
