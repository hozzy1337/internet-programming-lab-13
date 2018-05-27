<?php
session_start();
 
require __DIR__ . '/library.php';
$app = new DemoLib();

$result = $app -> GetList();	

echo "<table border='1' cellpadding='5px' style='border-collapse: collapse'><tr><th bgcolor=\"#b3b3b3\">Номер</th><th bgcolor=\"#b3b3b3\">Назва</th><th bgcolor=\"#b3b3b3\">Ціна</th><th bgcolor=\"#b3b3b3\">Кількість</th><th bgcolor=\"#b3b3b3\">Дата</th></tr>";
foreach($result as $row) {
    echo "<tr><td>".$row['id']."</td><td>".$row['name']. "</td><td>".$row['price']. "</td><td>".$row['count'].
        "</td><td>".$row['notes'] . "</td></tr>";
}
echo "</table>";
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
        <div class="well">
            <a href="insert.php" class="btn btn-primary">Insert</a><a href="delete.php" class="btn btn-danger">Delete</a>		
        </div>
    </div>
</body>
</html>