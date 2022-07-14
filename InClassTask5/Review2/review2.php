<html lang="en">
	<head>
		<title>Code Review 2</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$y = [5, 26, 74, 90, 45, 8, 55, 63];

			function maximumValue($arr) {
				$max = PHP_INT_MIN;

				for($i = 0; $i < count($arr); $i++) {
					if($arr[$i] > $max) {
						$max = $arr[$i];
					}
				}

				return $max;
			}

			function minimumValue($arr) {
				$min = PHP_INT_MAX;

				for($i = 0; $i < count($arr); $i++) {
					if($arr[$i] < $min) {
						$min = $arr[$i];
					}
				}

				return $min;
			}

			$max = maximumValue($y);
			$min = minimumValue($y);

			echo "<p>The maximum value is: $max</p>";
			echo "<p>The minimum value is: $min</p>";
		?>
	</body>
</html>