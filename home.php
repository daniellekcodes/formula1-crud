<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome" href="/css/app-wa-8c8d788ad0ee06dbc9619ff907c22651.css?vsn=d"/>
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css"/>
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-solid.css"/>
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-regular.css"/>
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-light.css"/>
    <title>Formula1 Driver Stats</title>
</head>
<body>
    <h1>Formula1 Drivers</h1>
    <a href="newDriverForm.php">
        <button id='add'>Add Driver</button>
    </a>

    <table>
        <tr>
            <th>Driver No.</th>
            <th>Name</th>
            <th>Age</th>
            <th>Country</th>
            <th>Team</th>
            <th>Driver Rank</th>
            <th colspan=2></th>
        </tr>
        <?php
        $db = new PDO("mysql:host=localhost;dbname=wcoding;charset=utf8", 'root', 'root');
        $response = $db->query("SELECT id, drivernum, name, age, country, team, driverrank FROM f1drivers");

        while($f1drivers = $response->fetch(PDO::FETCH_OBJ)) {
            ?>
            <tr>
                <td><?= $f1drivers->drivernum?></td>
                <td><?= $f1drivers->name?></td>
                <td><?= $f1drivers->age?></td>
                <td><?= $f1drivers->country?></td>
                <td><?= $f1drivers->team?></td>
                <td><?= $f1drivers->driverrank?></td>
                <td><a href="updateDriverForm.php?id=<?= $f1drivers->id ?>">
                    <button class="edit"><i class="fa-sharp fa-regular fa-pen-to-square"></i></button></td>
                </a>
                <td><a href="deleteDriver.php?id=<?= $f1drivers->id ?>">
                    <button class="delete"><i class="fa-solid fa-trash-can"></i></button></td>
                </a>
                
            </tr>

            <?php
        }

        ?>
    </table>

    
</body>
</html>