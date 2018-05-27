<?php
$insert_error_message = '';
require __DIR__ . '/library.php';
$app = new DemoLib();

if (!empty($_POST['btnRegister'])) {
	if ($_POST['id'] == "") {
        $insert_error_message = 'Notes field is required!';
    }else {
        $app->DeleteTov($_POST['id']);
        header("Location: index.php");
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
   <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>
                Delete form
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
            <form action="delete.php" method="post">
                <div class="form-group">
                    <label for="">Id</label>
                    <input type="text" name="id" class="form-control"/>
                </div>
				<div class="form-group">
                    <input type="submit" name="btnRegister" class="btn btn-primary" value="Delete"/>
                </div>
            </form>
        </div>
</body>
</html>
