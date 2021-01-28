<?php
include('connection.php');
 $sql=mysqli_query($con,"select * from user_reg ");
while ($row = mysqli_fetch_array($sql)) {
echo "<b><a href="manageresume.php?id={$row['id']}">{$row['uname']}</a></b>";
echo "<br />";
}
?>