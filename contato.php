<?php

include 'header.php';

?>

<div style="">
    <div class="uk-container">
        <div style="text-align: center;">
            <br>
            <h1 class="titulo-verde" uk-scrollspy="cls: uk-animation-slide-top; repeat: true"> CONTATO </h1>
            <br>
        </div>
        <div class="uk-child-width-1-2@m" uk-grid>
            <div uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                <div class="cartao">
                    <br>
                    <h5 class="texto-formulario margem">Preencha o formulário e Ganhe <b> 10% de DESCONTO! </b></h5>
                    <div class="uk-margin margem">
                        <label class="uk-form-label label-formulario" for="nome">Nome</label>
                        <div class="">
                            <input class="uk-input campo-formulario" id="nome" type="text" placeholder="Digite seu nome...">
                        </div>
                    </div>

                    <div class="uk-margin margem">
                        <label class="uk-form-label label-formulario" for="email">E-mail</label>
                        <div class="">
                            <input class="uk-input campo-formulario" id="email" type="email" placeholder="Digite seu e-mail...">
                        </div>
                    </div>

                    <div class="uk-margin margem">
                        <label class="uk-form-label label-formulario" for="telefone">Telefone/Celular</label>
                        <div class="">
                            <input class="uk-input campo-formulario" id="telefone" type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                        </div>
                    </div>

                    <div class="uk-margin margem">
                        <label class="uk-form-label label-formulario" for="assunto">Assunto</label>
                        <div class="">
                            <input class="uk-input campo-formulario" id="assunto" type="text" placeholder="">
                        </div>
                    </div>

                    <div class="uk-margin margem">
                        <label class="uk-form-label label-formulario" for="mensagem">Mensagem</label>
                        <div class="">
                            <textarea class=" campo-formulario uk-textarea" rows="5" id="mensagem" type="text" placeholder=""></textarea>
                        </div>
                    </div>

                    <div class="uk-margin margem">

                        <div class="">
                            <label><input type="checkbox"> <span style="color: black;"> Quero ser PRATA </span> </label><br>
                            <label><input type="checkbox"> <span style="color: black;"> Quero ser OURO </span> </label><br>
                            <label><input type="checkbox"> <span style="color: black;"> Quero ser PLATINUM </span> </label><br>
                            <label><input type="checkbox"> <span style="color: black;"> Quero SUPORTE </span> </label><br>
                        </div>
                    </div>

                    <div style="text-align: center;" uk-scrollspy="cls: uk-animation-shake; repeat: true">
                        <button class="uk-button botao-padrao">APROVEITAR AGORA</button>
                    </div>

                    <br><br>
                </div>
            </div>


            <div style="text-align: center;" uk-scrollspy="cls: uk-animation-slide-right; repeat: true; delay: 500">
                <h3 class="texto-planos-preto"> <b> Utilize nossos meios de contato: </b></h3>

                <p class="texto-planos-preto">
                    <b>E-MAIL: </b> <br><br>
                    email@email.com
                    <br><br>


                    <b>TELEFONE/WHATSAPP: </b> <br><br>
                    (16) 99999-9999
                    <br><br>

                    <b>REDES SOCIAIS: </b> <br><br>
                    <img src="assets/imagens/facebook.png" width="50px;" alt="Descrição da imagem">
                    <img src="assets/imagens/instagram.png" width="50px;" alt="Descrição da imagem">


                </p>
            </div>

            <div>

            </div>
        </div>
    </div>
</div>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


    date_default_timezone_set('Etc/UTC');

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.live.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "email@hotmail.com";
    $mail->Password = "senha";
    $mail->setFrom('camila.araujo.rp@hotmail.com', 'Nome');
    $mail->addReplyTo('camila.araujo.rp@hotmail.com', 'Reply');
    $mail->addAddress('96camilaaraujo@gmail.com', 'camila');
    $mail->Subject = 'Titulo do Texto';
    $mail->Body = 'Mensagem de texto';

    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message sent!";
     }

?>


<?php

include 'footer.php';

?>