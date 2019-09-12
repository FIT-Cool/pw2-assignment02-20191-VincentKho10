<?php
function getAllInsurance(){
    $link = new PDO("mysql:host=localhost;dbname=prakpw220191;","root","");
    $link->setAttribute(0,false);
    $link->setAttribute(3,2);
    $result = $link->query("SELECT * FROM insurance");
    $link = null;
    return $result;
}

function addInsurance($name_class){
    $link = new PDO("mysql:host=localhost;dbname=prakpw220191","root","");
    $link->setAttribute(0,false);
    $link->setAttribute(3,2);
    $query = "INSERT INTO insurance(name_class) VALUES(?)";
    $stmt = $link->prepare($query);
    $stmt->bindParam(1, $name_class, 2);
    $link->beginTransaction();
    if($stmt->execute()){
        $link->commit();
    }
    else{
        $link->rollBack();
    }
    $link = null;
}