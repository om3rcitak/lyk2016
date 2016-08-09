<?php require "header.php"; ?>

    <?php

    if(isset($_POST["user_id"])){
        $userid = $_POST["user_id"];
        $date = date("d.m.Y H:i:s");
        $sql = "INSERT INTO payments VALUES (NULL, ".$userid.", '".$date."')";
        mysql_query($sql);
        echo "borç başarıyla kitlendi.";
    }

    ?>

    <form action="" method="post">
        <select name="user_id" id="">
            <?php
            $sql = "SELECT users.id AS userid, users.name as username, groups.name as groupname FROM users
    INNER JOIN groups on users.group_id = groups.id
    ORDER BY group_id ASC";
            $query = mysql_query($sql);

            while($row = mysql_fetch_assoc($query)){
                echo "<option value='".$row["userid"]."'>".$row["username"]." (".$row["groupname"].")</option>";
            }
            ?>
        </select>
        <input type="submit">
    </form>

<?php require "footer.php"; ?>