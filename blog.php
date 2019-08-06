	<?php
	include("");
	include("");

	if(isset($_POST['post'])){
	$post = new Post($db, $userLoggedIn);
	$post->submitPost($_POST['post_text']);
	}
	?>

	<div class="userArea">
			<a href="<?php echo $userLoggedIn; ?>">
			<?php 
			echo $user['firstName'] . " " . $user['lastName'];

			 ?>
			</a>

	</div>


	<div class="textArea">
		<form action="index.php" method="POST">
			<textarea name="post_text" placeholder="Got something to say?"></textarea>
			<button type="submit" name="post">
			<hr>

		</form>
	</div>