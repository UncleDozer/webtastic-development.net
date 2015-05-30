## Simplex
### The Super Simple PHP Template
Simplex is a Super Simple Template Engine that does it's best to stay out of your way. 

## Why Simplex?
Simplex is a filebased template engine that makes maintaining small static websites simple for the average web developer. It's fast, simple, and easy to implement into just about any project. A sample template would look like this.
```php
$location = 'home';

part( 'head', true );
part( 'header', true );

?>

<article class="content">
    <?php content( $location ); ?>
</article>


<?php part( 'footer', true ); ?>
```
