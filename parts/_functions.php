<?php
/**
 * @Author Kristopher Watts <kristopher.a.watts@gmail.com>
 * @Copywrite 2015 Kristopher Watts
 *
 * Functions
 */

require_once( 'contrib/parsedown.php' );

/**
 * Fetch template piece using either
 * include_once() or require_once()
 * Makes for prettier templates
 *
 * @Example part( 'header' );
 *
 * @Param string $part The template piece basename
 * @Param boolean $required Defaults to false, if true, then 
 * @Var   string $completedPart prepends '_' and appends '.php' to $part
 */
function part( $part, $required=false ) {
    $completedPart = '_' . $part . '.php';
    if ( $required = false ) {
        return include_once( $completedPart );
    } else {
        return require_once( $completedPart );
    }
}

/**
 * Parse content based on $location var
 * Markdown Compatible
 *
 * @Author Kristopher Watts <kristopher.a.watts@gmail.com>
 * @Param  string $location returns the current location var (set in each template file)
 * @Param  boolean $Markup if set to true then do not escape markup, if false then escape markup
 * @Var    string $filePart the name of a markdown file
 * @Var    string $fileContents a string containing the contents of $filePart to be parsed by $Parsedown
 */
function content( $loc, $markup = true ) {
    $Parsedown = new Parsedown();
    if ( !$markup ) {
        $Parsedown->setMarkupEscaped( true );
    }

    $filePart = "content/$loc.md";

    if ( file_exists( $filePart ) ) {
        $fileContents = file_get_contents( "$filePart" );
        echo $Parsedown->text( $fileContents );
    } else {
        // echo $Parsedown->errPage( '404' );
        echo "ERROR $filePart not found";
    }
}

/**
 * Contact Form
 *
 */

/*
 * function contact(  ) {
 *     if ( isset( $_POST['submit'] ) ) {
 *         $message = $_POST['message'];
 *         $from = $_POST['name'];
 *         $fromMail = $_POST['email'];
 *         $to = "Kristopher.A.Watts@gmail.com";
 *         $mailSubject = "Message from Webtastic-Development.net";
 *         $headers = "From: $from <$fromMail>";
 *         $subject = "$mailSubject";
 *         $toEmail = "$to";
 *         $message = "$fromMail\n" . $message;
 *         mail( $toEmail, $subject, $message, $headers );
 *     }
 * }
 */
