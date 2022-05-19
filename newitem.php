<?php include 'header.php';?>
<?php include 'numbergenerator.php'; ?>
<!doctype html>                                                 
    <html lang="en">
    <head>
        <link rel="stylesheet" href="style.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Add New Item</title>
    </head>
    <body>
    <div class="container container-small"> 
        <div class="py-10 text-center">
            <h1>Add new item</h1>

                <div class="row">
                    <div class="col-lg-12">
                        <form method="POST" action="">
                            <table class="table">
                                <thead>
                                    <th>Item Name</th>
                                    <th>Current Ammount</th>
                                    <th>Item Number</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <div class="row g-8" name="Submited data">
                                            <td>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control text-center" 
                                                    name="Item[name]" value="" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control text-center" 
                                                    name="Item[ammount]" value="" />
                                                </div>
                                            </td>
                                        </div>
                                        <div class="row g-8" name="generated data">
                                            <td>
                                                <div class="col-sm-4">
                                                    <input type="text" readonly class="form-control-plaintext text-center" name="Item[number]" 
                                                    value="<?php echo $generatednumber ?>">
                                                </div>
                                            </td>
                                        </div>
                                        <td>
                                            <button class="w-100 btn btn-primary btn-lg" type="submit">Add New Item</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>           
    </body>
</html>
                       