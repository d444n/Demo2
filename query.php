<?php

$query = "SELECT * FROM blog";

$posts = $db->query($query);


<?php if($posts->num_rows > 0) {
    while($row = $posts->fetch_assoc()) {
?>

<a href='#'><?php echo$row['title']; ?></a>

<?php } } ?>