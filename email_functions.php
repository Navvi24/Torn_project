<?php 
    include("master/PHPMailerAutoload.php");
    function selected()
    {
        ob_start();
        include 'selected_mail.php';
        $mailbody = ob_get_clean();
    }
?>