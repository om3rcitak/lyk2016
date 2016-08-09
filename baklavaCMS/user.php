<?php require "header.php"; ?>

<?php

$id = $_GET["id"];

$sql = "SELECT * FROM users WHERE id=".$id;
echo $sql."<br>";
$query = mysql_query($sql);

while($row = mysql_fetch_assoc($query)){
    echo $row["name"];
    
}


?>

<?php require "footer.php"; ?>