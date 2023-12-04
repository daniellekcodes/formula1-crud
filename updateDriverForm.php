<?php
$db = new PDO("mysql:host=localhost;dbname=wcoding;charset=utf8", 'root', 'root');
    
$req = $db->prepare("SELECT * FROM f1drivers WHERE id = ?");
$req->execute([$_GET['id']]);

$f1drivers = $req->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Update Driver</h1>
    <form action="updateDriver.php" method="POST">
        <input type="hidden" name="id" value="<?= $f1drivers['id'] ?>">
        <p>
            <label for="driverNum">Driver Number</label>
            <input type="text" name="driverNum" id="driverNum" value="<?= $f1drivers['drivernum'] ?>">
        </p>
        <p>
            <label for="driverName">Driver Name</label>
            <input type="text" name="driverName" id="driverName" value="<?= $f1drivers['name'] ?>">
        </p>
        <p>
            <label for="age">Driver Age</label>
            <input type="text" name="age" id="age" value="<?= $f1drivers['age'] ?>">
        </p>
        <p>
            <label for="country">Driver's Country</label>
            <input type="text" name="country" id="country" value="<?= $f1drivers['country'] ?>">
        </p>
        <p>
            <label for="team">Driver's Team</label>
            <input type="text" name="team" id="team" value="<?= $f1drivers['team'] ?>">
        </p>
        <p>
            <label for="driverRanking">WDC Ranking</label>
            <input type="text" name="driverRanking" id="driverRanking" value="<?= $f1drivers['driverrank'] ?>">
        </p>
        <button id="add"> UPDATE </button>
    </form>

    
</body>
</html>