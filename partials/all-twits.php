<!--получаем все твиты -->

<?php 
$twits = getAllTwitsByUser(getUserID());
?>
<ul id="listTwits">
	<?php while($row = $twits->fetch_assoc()): ?>
		<li id="text">
			<?php echo $row['twit']; ?>
			<?php if ($row['image'] != ""): ?>
				<img src="/uploads/<?php echo $row['image']; ?>">
			<?php endif; ?>

				
			</li>

	<?php endwhile; ?>

	
	
</ul>