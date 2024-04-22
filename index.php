

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
		<br>
		<?php
		for ($i = 1; $i <= 200; $i++) {
			if ($i % 2 == 0) {
				echo '<span style="color: red; font-weight: bold;">' . $i . '</span> ';
			} else {
				echo '<span style="color: blue; font-style: italic;">' . $i . '</span> ';
			}
		}
		?>
		<div>
			<h1>Đăng nhập hệ thống</h1>
			<form action="info.php" method="get">
				<label for="username">Tên đăng nhập : </label>
				<input type="text" name="username"> <br><br>
				<label for="password">Mật khẩu:</label>
				<input type="password" name="password"><br><br>
				<input type="submit">
			</form>
		</div>
		
	</body>
</html>