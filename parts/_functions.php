<?php
/**
 * @Author Kristopher Watts <kristopher.a.watts@gmail.com>
 * @Copywrite 2015 Kristopher Watts
 */

/**
 * Fetch template piece using either
 * include_once() or require_once()
 * and makes for prettier templates
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
 * Create simple navigation menu
 *
 * @Example nav( "about", "header" );
 * @Param   string|array $navLink A variable or array
 * of variables containing page links
 *
 * @Param   string $class The CSS
 * class to apply to the <nav> item
 *
 * @Return  string A fleshed out <nav> object (html)
 * containing links to the page objects
 */
function nav( $navLink, $class="" ) {
    $i = 0;
    $linkItem = [];

    foreach ( $navLink as $link ) {
        $indent         = '    ' . "\n";
        $listItem       = "<li class=\"".$class."--nav--list--item\">";
        $anchorItem     = "<a href=\"".stringtolower($link)."\">" . $link . "</a></li>";
        $linkHTML[ $i ] = $indent . $ulistItem . $indent . $anchorItem . "";
        $i++;
    }

    $navItem   = "<nav class =\"".$class."--nav\">";
    $ulistItem = "<ul class  =\"".$class."--nav--list\">";
}

?>
