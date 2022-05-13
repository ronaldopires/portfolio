<?php

if (isset($_POST['email'])) {

    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $message = addslashes($_POST['message']);
    $date_start = date('d/m/Y');
    $hour_start = date('H:i:s');

    $to = "contato@devronaldo.com.br";
    $subject = "Contato Site Dev Ronaldo";
    $body = "
        <html>
            <p><b>Nome: </b>$name</p>
            <p><b>E-mail: </b>$email</p>
            <p><b>Mensagem: </b>$message</p>
            <p>Este email foi enviado em <b>$date_start</b> às <b>$hour_start</b></p>
        </html>
    ";

    $header = array(
        'MIME-Version' => '1.0',
        'Content-type' => 'text/html; charset=UTF-8',
        'From' => 'contato@devronaldo.com.br',
        'Reply-To' => $email,
        'X-Mailer' => 'PHP/' . phpversion()
    );

    if (mail($to, $subject, $body, $header)) {
        echo "<script>alert('Email enviado com sucesso!')</script>";
    } else {
        echo "<script>alert('Erro ao enviar email, tente novamente!')</script>";
    }
} else {
    echo "<script>alert('Preencha corretamente os seus dados e tente novamente!')</script>";
}
