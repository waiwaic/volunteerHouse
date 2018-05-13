<?php
$dsn = 'mysql:dbname=thehomeofvolunteers;host=10.130.11.146';
$user = 'userA76';
$password = '5xHrGB3ScWVYRm5J';
try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
if(isset($_POST[comment])){
    print($dbh->exec("INSERT INTO comments VALUES($_POST[comment],$_POST[name])"));
}
foreach ($dbh->query("SELECT * FROM comments") as $row){
        echo "<h5>姓名：$row[name]</h5>";
        echo "<p>评价：$row[comment]</p>";
    }
/*if(isset($_GET)){
    foreach ($dbh->query("SELECT * FROM comments") as $row){
        echo "<h5>姓名：$row[name]</h5>";
        echo "<p>评价：$row[comment]</p>";
    }
}else if(isset($_POST)){
    $dbh->exec("INSERT INTO comments VALUES($_POST[name],$_POST[comment]");
    foreach ($dbh->query("SELECT * FROM comments") as $row) {
        echo "<h5>姓名：$row[name]</h5>";
        echo "<p>评价：$row[comment]</p>";
    }
}*/
