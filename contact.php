<?php
/*
THIS FILE USES PHPMAILER INSTEAD OF THE PHP MAIL() FUNCTION
*/

require '';

/*
*  CONFIGURE EVERYTHING HERE
*/

// an email address that will be in the From field of the email.
$fromName = filter_input(INPUT_GET,'firstmame');
$fromEmail = filter_input(INPUT_GET, 'emailaddress');

// an email address that will receive the email with the output of the form
$sendToEmail = 'bryon.forbes@hotmail.co.uk';
$sendToName = 'Demo contact form';

// subject of the email
$subject = 'New message from contact form';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message');

// message that will be displayed when everything is OK :)
$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';

// If something goes wrong, we will display this message.
$errorMessage = 'There was an error while submitting the form. Please try again later';
?>