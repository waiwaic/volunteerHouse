<?php
require('pdo.php');
foreach ($pdo->query($sql) as $row) {
  echo "<h5>$row[name]</h5>";
  echo "<p>$row[comment]</p>";
}
