<?php
/*{{{
 * @Author: Kristopher Watts <kristopher.a.watts@gmail.com>
 *
 * @Uses: part( '_header.php' );
 *
}}}*/


?>

<header>
    <h1 class="header--logo">Webtastic Development</h1>

    <nav class="header--nav">
        <ul class="header--nav--list">
            <li class="header--nav--list--item <?php echo activePage( 'home' ); ?>"><a href="?location=home">Home</a></li>
            <li class="header--nav--list--item <?php echo activePage( 'projects' ); ?>"><a href="?location=projects">Projects</a></li>
            <li class="header--nav--list--item <?php echo activePage( 'design-a-day' ); ?>"><a href="?location=design-a-day">Design A Day</a></li>
            <!--<li class="header--nav--list--item"><a href="?location=about">About Me</a></li>  --!>
            <li class="header--nav--list--item"><a href="https://Github.com/UncleDozer">My Github</a></li>
        </ul>
    </nav>
</header>
