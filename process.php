<?php
// Get Data
$email = strip_tags($_POST['email']);

// Send Message
mail( "allheroapp@gmail.com", "Forma de suscripción",
"Email: $email\n",
"From: Forms <forms@example.net>" );
?>
