<?php
require('dbh.php');
if($_POST[comment]){
  dbh->exec("INSERT INTO comments VALUES($_POST[id],$_POST[comment]");
}else if($_POST[star]){
  dbh->exec("UPDATE stars SET num=num+1 WHERE id=$_POST[id]");
}else if($_GET[id]){
  echo '<star>';
  echo dbh->query("SELECT star FROM stars WHERE id=$_GET[id]")[0];
  echo '</star>;
  echo '<comments>';
  foreach(pdo->query("SELECT comment FROM comments WHERE id=$_GET[id]") as $row){
    echo '<comment>;
    echo $row[comment];
    echo '</comment>';
  }
  echo '</comments>';
}
