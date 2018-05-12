<?php
require('pdo.php');
pdo->exec("INSERT INTO comments VALUES($_POST[name],$_POST[comment]");
