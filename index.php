

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Visual Studio Code Remote :: PHP</title>
	</head>
	<body>
		<h2>Nhóm 17</h2>
		<?php
			$n = 100;
			$arr1 = array($n);
			$arr2 = array(1,2,3,4);
			$arr3 = array();
			$arr4 = array("hoten" => "Nam Khanhs",
						"quequan" => "Ha Nội",
						"tuoi" => 22			
			);
			print_r($n);
			print_r($arr1);
			print_r($arr2);
			print_r($arr3);
			print_r($arr4);
		?>
		<?php
		for ($i = 1; $i <= 200; $i++) {
			if ($i % 2 == 0) {
				echo '<span style="color: red; font-weight: bold;">' . $i . '</span> ';
			} else {
				echo '<span style="color: blue; font-style: italic;">' . $i . '</span> ';
			}
		}
		?>
		
	</body>
</html>