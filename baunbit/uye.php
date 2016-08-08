<?php require "header.php"; ?>

    <div class="container well">
    <h2 class="text-center">BAUN Bilgisayar ve İnternet Topluluğu Üye Yönetim Sistemi</h2>
    <h4 class="text-center">Merhaba hoşgeldiniz. Lütfen üye iseniz giriş yapınız değil ise üye olunuz</h4>

    <?php
    if (!isset($_SESSION["login"])) {
        echo '<div class="alert alert-danger" style="margin-top:50px;"><strong>Opps!</strong> Bu sayfayı görüntüleyebilmek için giriş yapmalısınız</div>';
        die();
    }
    $id = $_GET["id"];
    if($id<1 OR $id>11){
        $id = 1;
    }
    $row = $db->get_row("SELECT * FROM users WHERE id=" . $id);
    ?>

    <h3><a href="index.php"><< Anasayfa'ya Dön</a></h3>

    <div class="container" style="margin-top:50px;">
        <div class="row">
            <?php
            echo $row->username;
			?>
			<br />
			<br />
			<img src="<?php echo $row->image; ?>" alt="" />
        </div>
    </div>

<?php require "footer.php"; ?>
