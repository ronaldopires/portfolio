<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Mobilidade Urbana, SITYINC">
    <meta name="keywords" content="Mobilidade Urbana, aplicativos de transportes, siityinc">
    <meta name="author" content="Ronaldo Carvalho">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Folha de estilo -->
    <link rel="stylesheet" href="CSS/estilo.css" type="text/css">
    <link rel="icon" type="image/png" sizes="16x16" href="img/icon//favicon-32x32.png">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/3e1cd9c3d7.js"></script>

    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css?family=Livvic|Lato&display=swap" rel="stylesheet">
    <title>TESTE PARA SITY</title>
</head>

<body>
    <div class="container-fluid" style="background-color: rgba(64, 224, 208, 0.5);">
        <div class="row" style="height: 600px">
            <!-- MENU -->
            <div id="top"></div>
            <nav class="navbar navbar-expand-md fixed-top col-12 navbar-custom py-3">
                <a class="navbar-brand" href="#">Sity</a>
                <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse"
                    data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <a class="nav-item nav-link active" href="index.html">Home <span class="sr-only">(Página
                                atual)</span></a>
                        <a class="nav-item nav-link" href="#destaques">Destaques</a>
                        <a class="nav-item nav-link" href="#">História</a>
                        <a class="nav-item nav-link" href="contato.html">Contato</a>
                    </div>
                </div>
            </nav>
            <?php
        
        if(isset($_POST['email']) && !empty($_POST['email'])){
            //====================================================
                $nome = ($_POST['nome']);
                $telefone = ($_POST['celular']);
                $email = ($_POST['email']);
                $assunto = ($_POST['assunto']);
                $mensagem = ($_POST['mensagem']);

                $email_remetente = "ronaldo.carvalho@hotmail.com";  

            //Configurações do email
            //==================================================== 
                $email_destinatario = "ronaldo.carvalho@hotmail.com"; // pode ser qualquer email que receberá as mensagens
                $email_reply = "$email"; 
                $email_assunto = "Contato form mail"; // Este será o assunto da mensagem
            //====================================================
            //Monta o Corpo da Mensagem
            //====================================================
                $email_conteudo = "Nome = $nome \n"; 
                $email_conteudo = "Email = $email \n";
                $email_conteudo = "Telefone = $telefone \n";
                $email_conteudo = "Assunto = $assunto \n";  
                $email_conteudo = "Mensagem = $mensagem \n"; 
            //====================================================
            //Seta os Headers (Alterar somente caso necessario) 
            //==================================================== 
                $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
            //====================================================
            //Enviando o email 
            //==================================================== 
            if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
                echo ("<h1>E-Mail enviado com sucesso!</h1>"); 
                } 
                else{ 
                echo ("<h1>Falha no envio do E-Mail!</h1>"); } 
                //====================================================
            } 
   ?>
            <!-- Rodapé -->
            <div class="container-fluid">
                <div class="row border-top fixed-bottom">
                    <footer>Todos os direitos reservados &copy; 2019 Copyright
                        <a class="posicao" href="#top">
                            <img src="IMG/chevron-upwards-arrow.png">
                        </a>
                        <!-- <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik"
                                        target="_blank">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"
                                        target="_blank">www.flaticon.com</a></div>-->
                        <!--Redes Sociais-->
                        <div class="middle posicao">
                            <a class="btnS" href="https://web.facebook.com/SITYINC/" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btnS" href="https://www.instagram.com/sityoficial/" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btnS" href="https://www.youtube.com/channel/UC2g3jYXz3bk325RUUqgJ4CQ"
                                target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a class="btnS" href="https://www.linkedin.com/company/sityinc/" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script src="JS/script.js"></script>
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>