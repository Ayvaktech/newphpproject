<?php
include('connection.php')
$query = mysqli_query("select * from user_reg", $con);
while ($row = mysqli_fetch_array($query)) {
echo "<b><a href="manageresume.php?id={$row['id']}">{$row['uname']}</a></b>";
echo "<br />";
}
?>