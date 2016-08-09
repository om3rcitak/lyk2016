<?php require "header.php"; ?>

    <?php
    $sql = "
SELECT
users.name as username,
users.id as userid,
groups.name as groupname,
(select count(*) from payments where payments.user_id=users.id) as payment_count
FROM

users

INNER JOIN groups on users.group_id = groups.id

ORDER BY group_id ASC
";
    $query = mysql_query($sql);

    echo "<table border='1'>";
    while($row = mysql_fetch_assoc($query)){
        echo "<tr>";
            echo "<td>".$row["groupname"]."</td>";
            echo "<td>
            <a href='user.php?id=".$row["userid"]."'>
            ".$row["username"]."
            </a>
            </td>";
            echo "<td>".$row["payment_count"]."*".$prize." =  ".($row["payment_count"]*$prize)." TL</td>";
        echo "<tr>";
    }
    echo "</table>"

    ?>

<?php require "footer.php"; ?>