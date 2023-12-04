<?php

    // DATA VALIDATION
    $id = $_POST['id'] ?? false;
    $driverName = $_POST['driverName'] ?? false;
    $driverNum = $_POST['driverNum'] ?? false;
    $age = $_POST['age'] ?? false;
    $country = $_POST['country'] ?? false;
    $team = $_POST['team'] ?? false;
    $driverRanking = $_POST['driverRanking'] ?? false;

    if ($id and $driverName and $driverNum and $age and $country and $team and $driverRanking){
    // Inserting the drivers into the table
    $db = new PDO("mysql:host=localhost;dbname=wcoding;charset=utf8", 'root', 'root');
    
    $req = $db->prepare("UPDATE f1drivers 
                                SET 
                                    drivernum = :driverNum, 
                                    name = :driverName, 
                                    age = :age, 
                                    country = :country, 
                                    team = :team, 
                                    driverrank = :driverRanking 
                                WHERE id = :id");
    $req->execute([
        "driverNum" => $driverNum,
        "driverName" => $driverName,
        "age" => $age,
        "country" => $country,
        "team" => $team,
        "driverRanking" => $driverRanking,
        "id" => $id
    ]);
    
    header("Location: home.php");
    } else {
        echo "Error:  All fields are required.";
    }



?>