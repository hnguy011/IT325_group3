<!-- THE PHP EMAIL TEMPLATE COMES FROM: 
	https://stevesohcot.medium.com/simple-php-contact-form-tutorial-part-1-of-2-6cdb2e383b23
-->

<!DOCTYPE html>
<html dir="ltr" lang="en">
  
<head>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!--Enter your individial CSS file in href -->
    <link href="styles.css" rel="stylesheet">    
    <title>Hunter Thomas</title>
    <style>
	h1 {text-align: center;}
	p {text-align: center;}
	div {text-align: center;}
    </style>
</head>
<body>
<nav>
    <div class="logo">
        The Entrepreneur Industry LLC
    </div>
    <input id="click" type="checkbox">
    <label class="menu-btn" for="click">
        <i class="fas fa-bars"></i>
    </label>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Clients</a></li>
        <li><a class="active" href="#">Contact Us</a></li>
    </ul>
</nav>

<div class="content">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<h1>
	   Thanks for your submission!<br>
	   		
	</h1>

<?php
	
	$userName 		= $_POST['firstName' 'firstName];
	$userCompany		= $_POST['companyName'];
	$userPhone		= $_POST['phoneNumber'];
	$userEmail	 	= $_POST['emailAddress'];
	$userMessage 		= $_POST['helpMessage'];

	$to 			= "mattpaje@gmail.com";
	$subject 		= "Contact Submission Notice";
	$body 			= "Information Submitted:";

	$body .= "\r\n Name: " . $userName;
	$body .= "\r\n Company: " . $userCompany;
	$body .= "\r\n Phone Number: " . $userPhone;
	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Message: " . $userMessage;

	mail($to, $subject, $body);
?>