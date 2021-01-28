<?php
 
//Including Database configuration file.
 
include "connection.php";
 
//Getting value of "search" variable from "script.js".
 
if (isset($_POST['search'])) {
 
//Search box value assigning to $Name variable.
 
   $business = $_POST['search'];
 
//Search query.
 
   $Query = "SELECT * FROM comp_reg WHERE business LIKE '%$business%' LIMIT 5";
 
//Query execution
 
   $ExecQuery = MySQLi_query($con, $Query);
 
//Creating unordered list to display result.
 
   echo '
 
<ul>
 
   ';
 
   //Fetching result from database.
 
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
 
       ?>
 
   <!-- Creating unordered list items.
 
        Calling javascript function named as "fill" found in "script.js" file.
 
        By passing fetched result as parameter. -->
 
   <li onclick='fill("<?php echo $Result['cname']; ?>")'>
 
   <a>
 
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
 
       <?php echo $Result['cname']; ?>
 
   </li></a>
   <li onclick='fill("<?php echo $Result['number']; ?>")'>
 
   <a>
 
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
 
       <?php echo $Result['number']; ?>
 
   </li></a>
   <li onclick='fill("<?php echo $Result['address']; ?>")'>
 
   <a>
 
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
 
       <?php echo $Result['address']; ?>
 
   </li></a>
   <li onclick='fill("<?php echo $Result['url']; ?>")'>
 
   <a>
 
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
 
       <?php echo $Result['url']; ?>
 
   </li></a>
 
   <!-- Below php code is just for closing parenthesis. Don't be confused. -->
 
   <?php
 
}}
 
 
?>
 
</ul>