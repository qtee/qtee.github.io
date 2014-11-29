<?php

$bot = $_POST['lastname'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$from = 'From: contact@qtee-pear.com';
$to = 'lennert.wouters@gmail.com';
$subject = 'new message via qtee-pear.com';
$body = "From: $name\n E-Mail: $email\n Message:\n $message";

if ($bot) {
	die("NOPE");
}else{
	if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}

?>