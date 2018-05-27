<?php
session_start();
 
require __DIR__ . '/library.php';
$app = new DemoLib();
 
$insert_error_message = '';


if (!empty($_POST['btnRegister'])) {
    if ($_POST['name'] == "") {
        $insert_error_message = 'Name field is required!';
    } else if ($_POST['price'] == "") {
        $insert_error_message = 'Price field is required!';
    } else if ($_POST['count'] == "") {
        $insert_error_message = 'Count field is required!';
    } else if ($_POST['notes'] == "") {
        $insert_error_message = 'Notes field is required!';
    }else {
        $app->Insert($_POST['name'], $_POST['price'], $_POST['count'], $_POST['notes']);
        header("Location: index.php");
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>
                Insert form
            </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5 well">
            <?php
            if ($insert_error_message != "") {
                echo '<div class="alert alert-danger"><strong>Error: </strong> ' . $insert_error_message . '</div>';
            }
            ?>
            <form action="insert.php" method="post">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" name="price" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="">Count</label>
                    <input type="text" name="count" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="">Notes</label>
                    <input type="text" name="notes" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="btnRegister" class="btn btn-primary" value="Insert"/>
                </div>
            </form>
        </div>
		</body>
</html>