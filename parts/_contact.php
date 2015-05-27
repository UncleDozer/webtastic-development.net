<?php

function contact(  ) {
    /* if ( isset( $_REQUEST['submit'] ) ) { */
        $message = $_REQUEST['message'];
        $from = $_REQUEST['name'];
        $fromMail = $_REQUEST['email'];
        $to = "Kristopher.A.Watts@gmail.com";
        $mailSubject = "Message from Webtastic-Development.net";
        $headers = "From: $from <$fromMail>";
        $subject = "$mailSubject";
        $toEmail = "$to";
        $message = "$fromMail\n" . $message;
        mail( $toEmail, $subject, $message, $headers );
        header( $_SERVER[ 'SERVERNAME' ] );
    /* } */
}

?>
