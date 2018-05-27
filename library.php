<?php
require __DIR__ . '/config.php';

class DemoLib
{
	public function GetList()
	{
		try {
            $db = DB();
			$sql = "SELECT * FROM tovars";
			return $db->query($sql);
		}catch (PDOException $e) {
            exit($e->getMessage());
        }
	}
 
    public function Insert($name, $price, $count, $notes)
    {
        try {
            $db = DB();
            $query = $db->prepare("INSERT INTO tovars(name, price, count, notes) VALUES (:name, :price, :count, :notes)");
            $query->bindParam("name", $name, PDO::PARAM_STR);
            $query->bindParam("price", $price, PDO::PARAM_INT);
            $query->bindParam("count", $count, PDO::PARAM_INT);
            $query->bindParam("notes", $notes, PDO::PARAM_STR);
            $query->execute();
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
	
	public function DeleteTov($id)
    {
        try {
            $db = DB();
            $query = $db->prepare("DELETE FROM tovars WHERE id=:id");
            $query->bindParam("id", $id, PDO::PARAM_INT);
            $query->execute();
			return true;
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
 
    
}