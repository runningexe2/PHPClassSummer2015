<?php
function getAllDatabaseData()
{
    $db = dbconnect();
           
    $stmt = $db->prepare("SELECT * FROM sites");
     $results = array();
     if ($stmt->execute() && $stmt->rowCount() > 0) {
         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
     }
    return $results;
}
