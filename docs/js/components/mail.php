<?php

$recepient = "maryniuk94@ukr.net";
$sitename = "codempora.com";

$text = trim($_POST['text']);
$mobile = trim($_POST['mobile']);
$email = trim($_POST['email']);
$text-message = trim($_POST['text-message']);

$message = "Name: $text \n Phone: $mobile" \n Email: $email \n Text: $text-message";

$pagetitle = "new client  \ "$sitename"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From $recepient);
?>
