<?php 
$queryset = pg_query($db, 'SELECT * FROM lms_user;');
$colquery = pg_query($db, 'SHOW COLUMNS FROM lms_user;');
?>
<!DOCTYPE html>
<html>
<table>
  <thead>
    <?php
      while ($col = pg_fetch_array($colquery)) {
        echo "<th>" . $row['Field']" . </th>"
      }
    ?>
  </thead>
</table>
</html>
