<?php
 
//Including Database configuration file.
 
include "connection.php";
 
//Getting value of "search" variable from "script.js".
 
if (isset($_POST['search'])) {
 
//Search box value assigning to $Name variable.
 
   $jobtitle = $_POST['search'];
 
//Search query.
 
   $Query = "SELECT * FROM job_reg WHERE jobtitle LIKE '%$jobtitle%' LIMIT 5";
 
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
   <li onclick='fill("<?php echo $Result['skill']; ?>")'>
 
   <a>
 
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
 
       <?php echo $Result['skill']; ?>
 
   </li></a>
   <li onclick='fill("<?php echo $Result['experience']; ?>")'>
 
   <a>
 
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
 
       <?php echo $Result['experience']; ?>
 
   </li></a>
 
   <!-- Below php code is just for closing parenthesis. Don't be confused. -->
 
   <?php
 
}}
 
 
?>
 
</ul>