<?php
require('pdo.php');
dbh->exec("INSERT INTO comments VALUES($_POST[name],$_POST[comment]");
