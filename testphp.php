<?php 
$queryset = pg_query($db, 'SELECT * FROM lms_user;');
$arr = pg_fetch_all($users);
print_r($arr);
?>
<!DOCTYPE html>
<html>
</html>
