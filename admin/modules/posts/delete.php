	<?php
	require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
	
	if(!empty($_GET)) {

		$sql = 'DELETE FROM posts WHERE id = ' . $_GET['id'];


	if (mysqli_query($conn, $sql)) {
		   header("location: /admin/posts.php");
			} else {
			      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);

	}

?>