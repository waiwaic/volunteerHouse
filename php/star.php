<?php
$dsn = 'mysql:dbname=thehomeofvolunteers;host=10.130.11.146';
$user = 'userA76';
$password = '5xHrGB3ScWVYRm5J';
try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
if($_GET){
  echo $dbh->query("SELECT num FROM stars WHERE id=0");
}
if($_POST){
  $dbh->exec("UPDATE stars SET num=num+1 WHERE id=$_POST[id]");
}
