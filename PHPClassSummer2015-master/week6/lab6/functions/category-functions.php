<?php

//categories (table name)
//category_id
    //category
function createCategory($value) {
    $db = dbconnect();
    
    $stmt = $db->prepare("SELECT * FROM corps");
}