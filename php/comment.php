<?php
$dsn = 'mysql:dbname=thehomeofvolunteers;host=10.130.11.146';
$user = 'userA76';
$password = '5xHrGB3ScWVYRm5J';
try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
if($_GET[id]){
    foreach ($dbh->query("SELECT comment FROM comments WHERE id=$_GET[id]") as $row) {
        echo "<h5>$row[name]</h5>";
        echo "<p>$row[comment]</p>";
    }
}
if($_POST[comment]){
    $dbh->exec("INSERT INTO comments VALUES($_POST[name],$_POST[comment])");
}
