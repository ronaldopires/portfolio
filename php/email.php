<?php

if (isset($_POST['email'])) {

    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $message = addslashes($_POST['message']);
    $date_start = date('d/m/Y');
    $hour_start = date('H:i:s');

    $to = "ronaldo.carvalho@hotmail.com";
    $subject = "Contato site dev Ronaldo";
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
        'From' => 'ronaldo.carvalho@hotmail.com',
        'Reply-To' => $email,
        'X-Mailer' => 'PHP/' . phpversion()
    );

    if (mail($to, $subject, $body, $header)) {
        header('Location:success.php');
    } else {
        header('Location:error.php');
    }
} else {
    header('Location:error.php');
}