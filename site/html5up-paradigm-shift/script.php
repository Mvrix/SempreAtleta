<?php

$assunto	= $_POST["assunto"];
$corpo 		= "
	Assunto: "	.$_POST['assunto']."
	Nome: "		.$_POST['nome']."
	Email: "		.$_POST['email']."
	Mensagem: "	.$_POST['assunto']."
";

mail('oi_mario@live.com' ,$assunto,$corpo, 'From: aero.mjr@gmail.com');


$myfile = fopen("index.html", "r") or die("Unable to open file!");
echo fread($myfile,filesize("index.html"));
fclose($myfile);

?>
