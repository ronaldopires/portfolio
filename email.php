<?php

if(isset(addslashes($_POST['email']) && !empty(addslashes($_POST['email'])){

    
    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $message = addslashes($_POST['message']);
    
    $to = "contato@devronaldo.com.br";
    $subject = "Contato Site Dev Ronaldo";
    $body = "Nome: ".$name. "\r\n"
            "Email: " .$email."\r\n"
            "Mensagem: " .$message;
    $header = "From:contato@devronaldo.com.br" . "\r\n"
             ."Reply-To:".$email."\r\n"
             ."X=mailer:PHP/". phpversion();

    if(mail($to,$subject,$body,$header)){
        echo "Email enviado com sucesso!";
    }else{
        echo "Erro ao enviar email, tente novamente!";
    }
    
}
    
?>