<?php 


//Авторизирован ли пользователь


	function isLogin() {
	
		$is_session = isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null; //true/false
		$is_cookie = isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null; //true/false

  		if($is_session || $is_cookie) {
  			return true;
  		} else {
  			return false;
  		}
	


	}

//получение текущего рользователя
	function getCurrentUser() {
		global $conn;
	
		$is_session = isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null; //true/false
		$is_cookie = isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null; //true/false

		 if($is_session || $is_cookie) {
      		$userID = $is_session ? $_SESSION["user_id"] : $_COOKIE["user_id"];
      		$sql = "SELECT * FROM users WHERE id=" . $userID;
      		$result = mysqli_query($conn, $sql);
      		return $result->fetch_assoc();
		} else {
			return null;
	}
}

//получение id-пользователя, когда он пишет твит

	function getUserID() {
		$is_session = isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null; //true/false
		$is_cookie = isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null; //true/false

  		if($is_session || $is_cookie) {
  			return $is_session ? $_SESSION["user_id"] : $_COOKIE["user_id"];
  		} else {
  			return 0;
  		}
	}

//получение всех постов определенного юзера

	function getAllTwitsByUser($userID) {
		global $conn;
		//сщртировкак от последнеего добавленного твита к первому
      		$sql = "SELECT * FROM posts WHERE user_id=" . $userID . " ORDER BY id DESC";
      		$result = mysqli_query($conn, $sql);
      		return $result;
	}

