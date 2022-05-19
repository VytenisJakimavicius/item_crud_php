<?php 
    $numeris = '';
    for ($i = 0; $i < 8; $i++) {
        $numeris .= rand(0, 9);
    }
    $generatednumber = "NR ".$numeris;


if( isset($_POST['Item']) ) {                                  
    if(
        $_POST['Item']['name'] != ''
    AND (int)$_POST['Item']['ammount'] != '' 
    AND $_POST['Item']['number'] != ''
    ){
    $db = json_decode(file_get_contents('db.json'), true);
    $item = [$_POST['Item']];     
    if($db) {
        $item = array_merge($db, $item);
    }
    $json = json_encode($item);
    file_put_contents('db.json', $json);
    header('Location: newitem.php?status=1');
    } else {
    header('Location: newitem.php?status=2');
    }  
} 

 if( isset($_GET['status']) AND $_GET['status'] == 1) : ?>  
    <div class="alert alert-success" role="alert">
    <p class= "text-center text-uppercase font-weight-bold">New Item Added</p>
    </div>
<?php endif;

if( isset($_GET['status']) AND $_GET['status'] == 2) :?>

    <div class="alert alert-warning" role="alert">
        <p class= "text-center text-uppercase font-weight-bold">Data Entered Incorectly</p>
    </div>
<?php endif; ?>