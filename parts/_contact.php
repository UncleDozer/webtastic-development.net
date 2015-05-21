<?php

function contact(  ) {
    /* if ( isset( $_POST['submit'] ) ) { */
        $message = $_POST['message'];
        $from = $_POST['name'];
        $fromMail = $_POST['email'];
        $to = "Kristopher.A.Watts@gmail.com";
        $mailSubject = "Message from Webtastic-Development.net";
        $headers = "From: $from <$fromMail>";
        $subject = "$mailSubject";
        $toEmail = "$to";
        $message = "$fromMail\n" . $message;
        mail( $toEmail, $subject, $message, $headers );
        echo "SUCCESS";
    /* } */
}

?>
