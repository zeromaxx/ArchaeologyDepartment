<?php
$servername = "localhost";
$username = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=departmentOfArchaeologyDB", $username);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

date_default_timezone_set('Europe/Athens');
$currentDateTime = date('d-m-y h:i:s');

$category = $_POST['category'];
$title = $_POST['title'];
$date = $_POST['date'];
$site = $_POST['site'];
$description = $_POST['description'];
$height = $_POST['height'];
$length = $_POST['length'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$ephorate = $_POST['ephorate'];


$sql = "INSERT INTO findings (Category,Title,EstimateDate,Site,Description,Width,Length,Name,Lastname,Ephorates,EntryTime)
            VALUES('$category','$title','$date','$site','$description','$height','$length','$name','$lastname','$ephorate','$currentDateTime ')";
$statement = $conn->prepare($sql);
$statement->execute();

$query = "SELECT Id FROM findings WHERE Id = LAST_INSERT_ID()";
$result = $conn->query($query);
$getLastId = $result->fetchColumn();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overview</title>
    <link rel="stylesheet" href="./index.css">
</head>

<body>
    <section>
        <table>
            <h1>Επισκόπηση Ευρήματος</h1>
            <tr>
                <th>Αριθμός Ευρήματος </th>
                <th>Κατηγορία Ευρήματος </th>
                <th>Τίτλος Ευρήματος</th>
                <th>Εκτιμούμενη χρονολογία</th>
                <th>Αρχαιολογικός Χώρος</th>
                <th>Περιγραφή</th>
                <th>Εμβαδόν</th>
                <th>Όνομα</th>
                <th>Επώνυμο</th>
                <th>Ώρα καταχώρησης</th>
            </tr>
            <tr>
                <td><?php echo $getLastId ?></td>
                <td><?php echo $category  ?></td>
                <td><?php echo $title  ?></td>
                <td><?php echo $date  ?></td>
                <td><?php echo $site  ?></td>
                <td><?php echo $description  ?></td>
                <td><?php echo ($height * $length) ?></td>
                <td><?php echo $name  ?></td>
                <td><?php echo $lastname  ?></td>
                <td><?php echo $currentDateTime ?></td>
            </tr>
        </table>
        <a href="./index.php">Πίσω στην Αρχική</a>
        <div class="overlay"></div>
    </section>
    <h3>ΑΜ 1084492</h3>
</body>

</html>
