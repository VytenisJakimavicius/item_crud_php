<?php
$db = file_get_contents('./db.json');
$db = json_decode($db, true);
?>
<div class="p-3 mb-2 bg-light text-dark">
    <p class="text-center">
		<a href="main.php">
			<button type="button" class="btn btn-secondary text-uppercase font-weight-bold">List of Items</button>
		</a>
		<a href="newitem.php">
			<button type="button" class="btn btn-secondary text-uppercase font-weight-bold">Add new Item</button>
		</a>
	</p>
</div>