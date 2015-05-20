<?php
/**
 * Project Page Template For Webtastic-Development.net
 *
 * @Author Kristopher Watts <kristopher.a.watts@gmail.com>
 * @Copywrite 2015 Kristopher Watts
 */

/**
 * Pull in the functions file (REQUIRED)
 */
require_once( 'parts/_functions.php' );

/* Declare the current location */
$location = 'projects';

/* Grab required template pieces */
part( 'head', true );
part( 'header', true );

?>

<article class="content">
    <?php content( $location ); ?>
</article>

<?php part( 'footer' ); ?>
