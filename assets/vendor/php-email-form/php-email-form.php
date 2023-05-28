<?php

if(isset($_POST)){
	$contact = true;

	//form data

	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$message = htmlspecialchars($_POST['message']);

	//validation
	if(empty($name) || empty($email) || empty($message)){
		$formok = false;
	}

	if($contact){
		$headers = "From: info@nandccontractors.com" . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$emailbody = "<p>You have recieved a new message from the enquiries form on your website.</p>
                  <p><strong>Name: </strong> {$name} </p>
                  <p><strong>Email Address: </strong> {$email} </p>
                  <p><strong>Subject: </strong> {$name} </p>
                  <p><strong>Message: </strong> {$message} </p> ";

    mail("abrorgafurov@icloud.com","New Enquiry",$emailbody,$headers);

	}

        //redirect back to form
        header('location: ' . $_SERVER['HTTP_REFERER']);

}

 ?>
 