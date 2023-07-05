<?php
	/*$str = "test";

		for($i = 0; $i < 10; $i++) {
			if($i%2) {
		echo "<h3>" . $str . "-" . $i . "</h3>";
	}
	}
		function sum($a, $b) {
			return $a + $b;
		}
		echo sum(5,1);*/

		//$name = "Олена";
		//echo "Привіт,  $name ! Я твій php скрипт, котрий був щойно успішно виконаний!";

		$servername = "localhost";
		$database = "blog_php";
		$username = "root";
		$password = "";
		// Создаем соединение
		$conn = mysqli_connect($servername, $username, $password, $database);
		$conn->set_charset("utf8mb4");
		// Проверяем соединение
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}