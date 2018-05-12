<?php
require('dbh.php');
foreach ($dbh->query($sql) as $row) {
  echo "<h5>$row[name]</h5>";
  echo "<p>$row[comment]</p>";
}
