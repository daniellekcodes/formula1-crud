<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Add New Driver</h1>
    <form action="insertDriver.php" method="POST">
        <p>
            <label for="driverNum">Driver Number</label>
            <input type="text" name="driverNum" id="driverNum">
        </p>
        <p>
            <label for="driverName">Driver Name</label>
            <input type="text" name="driverName" id="driverName">
        </p>
        <p>
            <label for="age">Driver Age</label>
            <input type="text" name="age" id="age">
        </p>
        <p>
            <label for="country">Driver's Country</label>
            <input type="text" name="country" id="country">
        </p>
        <p>
            <label for="team">Driver's Team</label>
            <input type="text" name="team" id="team">
        </p>
        <p>
            <label for="driverRanking">WDC Ranking</label>
            <input type="text" name="driverRanking" id="driverRanking">
        </p>
        <button id="add"> CREATE </button>
    </form>

    
</body>
</html>