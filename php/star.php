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
  foreach($dbh->query("SELECT num FROM stars WHERE id=$id") as $row){
      echo $row[star];
  }
}
if($_POST[id]){
  $dbh->exec("UPDATE stars SET star=star+1 WHERE id=$_POST[id]");
}
