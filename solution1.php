<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#" >
	<head>
		<title>Solution 1</title>
	</head>
	<body>

		<?php
		//Get numbers from GET params
		$number_1 = empty($_GET['number_1']) ? '' : $_GET['number_1'];
		$number_2 = empty($_GET['number_2']) ? '' : $_GET['number_2'];
		?>

		<h1>FizzBuzz Solution 1</h1>
		<form name="" action="">
			Number 1: <input type="number" id="number_1" name="number_1" value="<?=$number_1;?>" required autofocus />
			<br />
			Number 2: <input type="number" id="number_2" name="number_2" value="<?=$number_2;?>" required />
			<br />
			<input type="submit" value="Go" />
		</form>

		<?php
		if ($number_1 && $number_2) {
			//both number are supplied!

			include dirname(__FILE__) . "/lib_FizzBuzz.php";

			/* TODO: Show output below */

			$result = FizzBuzz($number_1, $number_2);
			?>
			<h4>Output</h4>
			<div class="output">
				<?php
				foreach ($result as $line) {
					echo $line;
					echo '<br />';
				}
				?>
			</div>
			<?php
		}
		?>
	</body>
</html>