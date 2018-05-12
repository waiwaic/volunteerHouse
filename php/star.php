<?php
require('dbh.php');
if($_GET[star]){
  echo dbh->query("SELECT star FROM stars WHERE id=0")[0];
}
if($_POST[star]){
  dbh->exec("UPDATE stars SET num=num+1 WHERE id=$_POST[id]");
}
