<?php
if (isset($_POST['enviar'])) {
    if (!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['phone']) && !empty($_POST['asunto']) && !empty($_POST['message'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $mail = $_POST['mail']
        $asunto = $_POST['asunto'];
        $message = $_POST['message'];
        $header = "From: tomastoranzosalas19072002@gmail.com" . "\r\n";
        $header .= "Reply-To: tomastoranzosalas19072002@gmail.com" . "\r\n";
        $header .= "X-Mailer: PHP/". phpversion();
        $mail = @mail($mail,$asunto,$message,$header);
        if ($mail) {
            echo "<h4>¡Mail enviado exitosamente!<h4/>";
        }
    }
}
?>