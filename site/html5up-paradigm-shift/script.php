<?php

if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

$assunto	= $_POST["assunto"];
$corpo 		= "
	Assunto: "	.$_POST['assunto']."
	Nome: "		.$_POST['nome']."
	Email: "		.$_POST['email']."
	Mensagem: "	.$_POST['assunto']."
";

mail('oi_mario@live.com' ,$assunto,$corpo, 'From: aero.mjr@gmail.com');




?>
