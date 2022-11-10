<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RijlessenvanPaul - Home</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<?php require_once("header.php"); ?>

	<!-- START eigen code -->
	<main>
		<div class="wrapper">
			<h1>Home</h1>

		</div>
			<h1>Javascript-button</h1>
	<p id ="welkom"></p>
	<button id="button">Toepasselijke text</button>

	<script>
		document.getElementById('button').addEventListener('click', function() {
			let name = prompt("Wat is je naam?");
			if (name.length > 0) {
				document.getElementById('welkom').innerText = "Welkom op deze pagina, " + name;
				document.getElementById('welkom').style.fontSize = '55px';
				document.getElementById('welkom').style.backgroundColor = 'yellow';
			}})
</script>
	</main>




	<script type="text/javascript">
		// Schrijf hier Javascript voor de "lees meer"
		// (of andere interactie die je maakt). 
	</script>
	<!-- EINDE eigen code -->

	<?php require_once("footer.php"); ?>
	
</body>
</html>