<html lang="en">

	<head>
		<!--
		In the <head> tag, you may choose to load any files or other assets required for your page. You might also choose to set some page settings, such as the <title>.

		The text in here will not be visible in the user's browser.

		For now, let's put some settings in and load some files that I think are good for every beginner:
		-->

		<title>Gentamicin Calculator</title>

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

		<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>


	<body>
		<!--
		The actual content of your web page belongs in here, in the <body> tag.
		
		Your code starts below here:
		-->

		<?php
			
			$weight = $_POST['weight'];
			$height = $_POST['height'];
			$eGFR = $_POST['eGFR'];
			$sex = $_POST['sex'];

			if ($eGFR >= 60) {
				$dosePerKG = 7;
				$maxDose = 700;
			}

			if ($eGFR >= 40 and $eGFR < 60) {
				$dosePerKG = 5;
				$maxDose = 550;
			}

			if ($eGFR < 40) {
				$dosePerKG = 4;
				$maxDose = 400;
			}

			$heightInMetres = $height / 100;
			$BMI = $weight / ($heightInMetres * $heightInMetres);

			if ($BMI >= 30) {

				if ($sex == 'Male') {
					$weight = 50 + 0.91 * ($height - 152.4);
				} else {
					$weight = 45.5 + 0.91 * ($height - 152.4);
				}
				
			}

			$dose = $weight * $dosePerKG;
			$dose = round($dose);

			if ($dose > $maxDose) {
				$dose = $maxDose;
			}

		?>

		<div class="main">
			
			<h1>Results</h1>
			<h3>This is NOT intended for clinical use.</h3>

			<div class="result">
				<h2>Your suggested dose is:</h2>
				<h1><?php echo $dose; ?>mg</h1>
				<p>
					<?php echo 'Based on a '.$sex.' with a weight of '.$weight.' kilograms, a height of '.$height.' centimetres, an eGFR of '.$eGFR.'ml/min/1.73m².'; ?>
				</p>
			</div>

			<div class="back">
				<a href="index.php">Go back</a>
			</div>

		</div>


	</body>

</html>