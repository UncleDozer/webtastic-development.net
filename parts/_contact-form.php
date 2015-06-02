<?php
/**
 * Simple Contact Form
 *
 */
?>
<form method="POST" action="parts/_contact.php" >
    <label for="name">Name</label>
    <input type="text" name="name" />
    <label for="email">Email</label>
    <input type="text" name="email" />
    <label for="message">Message</label>
    <textarea name="message"></textarea>
    <input type="submit" name="submit" value="Submit" />
</form>

