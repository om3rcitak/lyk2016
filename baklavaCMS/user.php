<?php require "header.php"; ?>

<?php
//sql injection zafiyeti kapatıldı.
$id =(int) intval($_GET["id"]);
// id 0 dan küçük olursa
if($id <= 0){
    echo "Yemedii ..:)";
    die();
}else{
    $sql = "SELECT * FROM users WHERE id=".$id;
    echo $sql."<br>";
    $query = mysql_query($sql);

    while($row = mysql_fetch_assoc($query)){
        echo $row["name"];

    }

}

?>

<?php require "footer.php"; ?>