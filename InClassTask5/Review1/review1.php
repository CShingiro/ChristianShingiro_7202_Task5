<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Code Review</title>
		<meta charset="utf-8">
	</head>

	<body>
		<?php
			$x = [1, 15, 23, 6, 7, 90, 3];
			$y = [5, 26, 74, 90, 45, 8, 55, 63];

			$found = false;

			for($i = 0; $i < count($x); $i++) {
				for($j = 0; $j < count($y); $j++) {
					if($x[$i] == $y[$j]) {
						$found = true;
						break;
					}
				}
			}

			echo "<p>Found duplicate value: $found</p>";

		?>
	</body>
</html>