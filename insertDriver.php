<?php

    // DATA VALIDATION
    $driverName = $_POST['driverName'] ?? false;
    $driverNum = $_POST['driverNum'] ?? false;
    $age = $_POST['age'] ?? false;
    $country = $_POST['country'] ?? false;
    $team = $_POST['team'] ?? false;
    $driverRanking = $_POST['driverRanking'] ?? false;

    if ($driverName and $driverNum and $age and $country and $team and $driverRanking){
    // Inserting the drivers into the table
    $db = new PDO("mysql:host=localhost;dbname=wcoding;charset=utf8", 'root', 'root');
    
    $req = $db->prepare("INSERT INTO f1drivers (drivernum, name, age, country, team, driverrank) VALUES (:driverNum, :driverName, :age, :country, :team, :driverRanking)");
    $req->execute([
        "driverNum" => $driverNum,
        "driverName" => $driverName,
        "age" => $age,
        "country" => $country,
        "team" => $team,
        "driverRanking" => $driverRanking
    ]);
    
    header("Location: home.php");
    } else {
        echo "Error: All fields are required.";
    }



?>