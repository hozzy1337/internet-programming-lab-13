<?php
function DB()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=lab12storage', 'mysql', 'mysql');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        return "Error!: " . $e->getMessage();
        die();
    }
}
?>