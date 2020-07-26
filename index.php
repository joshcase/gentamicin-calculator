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
		<div class="main">
			<h1>Gentamicin Calculator</h1>
			<h3>This is a gentamicin dose calculator for critically ill patients with sepsis of unknown origin. Enter your patient's details, and hit "Calculate" to receive a gentamicin dose estimate. This is NOT intended for clinical use.</h3>

			<form method="POST" action="calculate.php">

				<div class="input-section">
					<h3>Weight (kg)</h3>
					<input type="number" name="weight" required>
				</div>

				<div class="input-section">
					<h3>Height (cm)</h3>
					<input type="number" name="height" required>
				</div>

				<div class="input-section">
					<h3>eGFR (ml/min/1.73m2)</h3>
					<input type="number" name="eGFR" required>
				</div>

				<div class="input-section">
					<h3>Sex</h3>
					<select name="sex">
						<option>Male</option>
						<option>Female</option>
					</select>
				</div>

				<div class="input-section">
					<button type="submit">Calculate</button>
				</div>

			</form>

		</div>


	</body>

</html>