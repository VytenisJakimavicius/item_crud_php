<?php include 'header.php';?>
<?php $var_value = $_REQUEST['id'];?>

<?php  
if( isset($_POST['val']) ) {
    if(
        $_POST['val']['name'] != '' AND
        $_POST['val']['ammount'] != '' AND
        $_POST['val']['number'] != ''
    ) {
        $db[$var_value]['name'] = $_POST['val']['name'];
        $db[$var_value]['ammount'] = $_POST['val']['ammount'];
        $db[$var_value]['number'] = $_POST['val']['number'];

        $json = json_encode($db);
        file_put_contents('db.json', $json);
    }

}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="style.css" />
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<title>Eddit</title>
	</head>
    <body>
        <div class="container container-small">     
			<main>  
				<div class="py-5 text-center">
					<div class="text-start">
                    <form method="POST" action="">
                        <table class="table">
                            <div class="py-10 text-center">
                                <h1>
                                    <?php 
                                        $db = json_decode(file_get_contents('./db.json'), true);
                                        foreach($db as $id => $val):
                                        if ($id == $var_value):
                                            echo ($val['name']);
                                    ?>                               
                                </h1>
                            </div>
                            <thead>
                                <th>ID</th>
					            <th>Item Name</th>
					            <th>Item Number</th>
					            <th>Current Ammount</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" 
                                            name="id" value="<?php echo $id; ?>" readonly/>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" 
                                            name="val[name]" value="<?php echo $val['name']; ?>"/>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" 
                                            name="val[number]" value="<?php echo $val['number']; ?>" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" 
                                            name="val[ammount]" value="<?php echo $val['ammount']; ?>" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-sm-8">
                                            <button class="w-100 btn btn-primary btn-lg" type="submit">EDIT</button>
                                        </div>
                                    </td>
                                </tr>
                                <?php endif;
                                    endforeach;
                                ?>
                            </tbody>
                        </table>
                        </form>
                    </div>
				</div>
			</main>
		</div>
    </body>
</html>