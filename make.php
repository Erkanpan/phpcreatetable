<?php

try {

$id = $_POST['id'];


	
$db = new PDO("mysql:host=localhost:xxxx;dbname=xxxxx;charset=utf8","xxxxx","password");

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "CREATE TABLE tablename (
  id int(32) NOT NULL AUTO_INCREMENT,
  detaylar varchar(92) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  kg decimal(5,2) NOT NULL,
 
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci";

  $db->exec($sql);
  
   header("Location: index.php?id=$id");
  
} catch (Exception $e) {
	
}


?>
