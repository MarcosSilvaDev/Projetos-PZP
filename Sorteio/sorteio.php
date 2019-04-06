<!DOCTYPE html>
<html>
<head>
	<title>Sorteio MV</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php

	if (isset($_POST['num1']) && isset($_POST['num2'])) {
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];

		$sorteado = rand($num1, $num2); 
	}

	

	?>



	<header>
		<h1>Sorteio MV</h1>
	</header>
	<section>
		<form method="POST">
			<a href="index.php"><div><h2>Sortear por nome</h2></div></a>
			<div class="box-center">
				<div class="box">
					<div class="cir-img">
						<img src="image/trofeu.png" width="89" height="89">
					</div>
					<div class="botao-p">
						<?php if (isset($sorteado)) { echo $sorteado; } ?>
					</div>
				</div>
				<div class="box">
					<div class="box-rec">
						<div class="botao-p ">
							<input type="text" name="num1"><div>Nº1</div>
						</div>
						<div class="botao-p ">
							<input type="text" name="num2"><div>Nº2</div>
						</div>
					</div>
					<div class="botao-p enviar">
						<input type="submit" value="Enviar">
					</div>
					
				</div>
			</div>
		</form>
	</section>

</body>
</html>