<?php
$nameErr = "";
$noerror = true;

        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['message'];
        $to = "To: php2.department@gmail.com";
        $subject = "From Clients " . "$name";
        // $headers = "From: shehbazpatel572@gmail.com";
        $headers = "From: " . "$email";
       
        $message = "<html><body>";
        $message .= "<h1>hello!!!</h1> <br>";
        $message .= "<h5>I am ". "$name <br/>";

        $message .= "<p>" . "$msg" . "</p> </br>";

        $message .= "<b>Thank You...!!!</b>";
        $message .= "</body></html>";

        if ($noerror) {
            mail($to, $subject, $message, $headers);
        }

?>