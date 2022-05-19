<?php include 'header.php';?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="style.css" />
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<title>Item Control</title>
	</head>
	<body>
		<div class="container container-small">     
			<main>  
				<div class="py-5 text-center">
					<div class="text-start"> 
						<table class="table">
							<thead>
								<th>ID</th>
								<th>Item Name</th>
								<th>Item Number</th>
								<th>Current Ammount</th>
								<th>Actions</th>
							</thead>
							<tbody>
								<?php $db = json_decode(file_get_contents('./db.json'), true); foreach($db as $id => $val):?>	
								<tr>
									<?php include 'itemdata.php';?> 
									<td>
										<a href="./eddit.php?id=<?php echo $id; ?>" class="btn btn-primary">EDDIT</a>
										<a href="./view.php?id=<?php echo $id; ?>" class="btn btn-warning">VIEW</a>
										<?php if($val['ammount'] == 0){include 'delete.php';} ?>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</main>
		</div>
    </body>
</html>
