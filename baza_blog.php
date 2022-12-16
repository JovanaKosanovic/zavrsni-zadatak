<?php
$servername = "127.0.0.1";
$username = "vivify";
$password = "vivify";
$dbname = "blog";
try {
    $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e)
 {
     echo $e->getMessage();
 }
 function fetchData($connection, $sql, $fetchAll = false) {
     $statement = $connection->prepare($sql);
     $statement->execute();
     $statement->setFetchMode(PDO::FETCH_ASSOC);
     if($fetchAll) {
         return $statement->fetchAll();
     }
     return $statement->fetch();
 }
 function dump($data)
 {
     echo '<pre>';
     var_dump($data);
     echo '</pre>';
 }
?>
