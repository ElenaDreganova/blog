<?php 
	require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');

	$user_id = $_POST['user_id'];
	$text = $_POST['twit'];
	$image = '';



	//проверяем массив файлов на пустоту
	if(!empty($_FILES)) {
		$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
		$ext = pathinfo($_FILES['image']['name']); //расширение картинки 
		$imageName = generateRandomString(64) . time() . "." . $ext['extension'];    //переименовываем картинку
		$uploadfile = $uploaddir . $imageName;

		if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
		    $imageName;
		    echo "Возможная атака с помощью файловой загрузки!\n";
		    die();
		}
	}
	

	$sql = "INSERT INTO posts ( twit, user_id, image) VALUES ('" . $text ."', '" . $user_id ."', '" . $imageName ."')";

	if (mysqli_query($conn, $sql)) {

		$html = "<li>";
		$html .= $text;
		if($imageName != '') {
			$html .= "<img src='/uploads/$imageName'>";
		}
		$html .= "</li>";
		    echo $html; //добавляем последний твит
		} else {
			      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

//функция рандомного имени для строки
	function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}



?>