<!DOCTYPE html>
<html>
<head>
	<title>Sorteio MV</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php $sorteado = "Fulano";?>



	<header>
		<h1>Sorteio MV</h1>
	</header>
	<section>
		<form>
		<div class="box-center">
			<div class="box">
				<div class="cir-img">
					<img src="image/trofeu.png" width="89" height="89">
				</div>
				<div class="botao-p">
					<?php $sorteado = "Fulano"; echo $sorteado; ?>
				</div>
			</div>
			<div class="box">
				<div class="box-rec">
					<div class="botao-p ">
						<input type="text" name="name"><div>Add</div>
					</div>
					<div class="botao-p ">
						<?php $sorteado = "Fulano"; echo $sorteado; ?>
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