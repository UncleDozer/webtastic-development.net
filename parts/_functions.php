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
 * Pull content based on $location var
 *
 * @Author Kristopher Watts <kristopher.a.watts@gmail.com>
 * @Param  string $location returns the current location var (set in each template file)
 * @Todo   Markdown Support
 *
 */

function content( $loc ) {
    $Parsedown = new Parsedown();
    /* $Parsedown->setMarkupEscaped( true ); */
    $filePart = "content/$loc.md";

    if ( file_exists( $filePart ) ) {
        $fileContents = file_get_contents( "$filePart" );
        echo $Parsedown->text( $fileContents );
    } else {
        // echo $Parsedown->errPage( '404' );
        echo "ERROR $filePart not found";
    }
}
