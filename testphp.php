<?php 
$queryset = pg_query($db, 'SELECT * FROM lms_user;');
$users = pg_fetch_result($queryset, 0);
$arr = pg_fetch_all($users);
print_r($arr);
?>
<!DOCTYPE html>
<html>
</html>
