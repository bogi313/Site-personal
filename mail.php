<?php 

if(isset($_POST['buton'])) {
	$nume = strip_tags($_POST['nume']);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$telefon = strip_tags($_POST['telefon']);
	$mesaj = strip_tags($_POST['mesaj']);


	$to      = 'ghitabogdan70@gmail.com'; // adresa unde ajunge mesajul

	$subject = 'Contact creare site';// subiectul mailului



	$content = "
	Salut,

	Ai o noua comanda de site de la:

	Nume: $nume 

	Email: $email 

	Telefon: $telefon 

	Mesaj: $mesaj"; //  continutul mailului



	$headers = 'From: hr@apple.com' . "\r\n" .

	    "Reply-To: contact@raffe.ro" . "\r\n" .

	    'X-Mailer: PHP/' . phpversion(); //necesare php

	mail($to, $subject, $content, $headers); // functia de trimitere mail
	
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale = 1, maximum-scale = 1, user-scalable = no, width = device-width" />
	<!-- <meta http-equiv="refresh" content="3;url=index.html" /> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<section id="bg-hero acasa" class="bg-hero h-100">
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-md-8 text-white text-center mx-auto my-auto">
					<h1>Mesajul dumneavoastra a fost trimis cu succes!</h1>
					<a href="index.html" class="btn contactButton mt-3">Inapoi</a>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
