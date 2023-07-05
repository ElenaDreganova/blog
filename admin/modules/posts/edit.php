
	<?php
	
	if(!empty($_POST)) {
	$sql = "UPDATE `posts` SET `twit` = '" . $_POST['twit'] . "' WHERE `id` = " . $_GET['id'] . " ;";

	if (mysqli_query($conn, $sql)) {
		 echo "<h2>Дані оновленно. <a href='/admin/posts.php'>Повернутись</a></h2>";  
			} else {
			      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

	}

	$sql = "SELECT * FROM posts WHERE id = " . $_GET['id'];
	$result = mysqli_query($conn, $sql);
	$row = $result->fetch_assoc();

?>
	<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Posts list</h6>
        </div>
            <div class="card-body">
				<form action="?page=edit&id=<?php echo $_GET['id']; ?>" method="POST">
					<div class="mb-3">
						 <label for="twit" class="form-label">Twit</label>
						 <input type="text" name="twit" class="form-control" id="twit" placeholder="Enter your twit" value="<?php echo $row['twit']; ?>">
					</div>
					
					<button type="submit" class="btn btn-success btn-lg"><i class="fas fa-save"></i> Save</button>	
			  </form>	
		</div>
   </div>


	