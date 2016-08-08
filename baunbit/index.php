<?php require "header.php"; ?>

		<div class="container well">
			<h2 class="text-center">BAUN Bilgisayar ve İnternet Topluluğu Üye Yönetim Sistemi</h2>
			<h4 class="text-center">Merhaba hoşgeldiniz. Lütfen üye iseniz giriş yapınız değil ise üye olunuz</h4>
			<ul>
				<?php
				if(isset($_SESSION["login"])){
				$row = $db->get_row("SELECT * FROM users WHERE id=".$_SESSION["login"]);
				?>
				<li>Hoşgeldiniz <?php echo $row->username; ?></li>
				<li><a href="uyeler.php">Diğer Üyeleri Gör</a></li>
				<li><a href="cikisyap.php">Çıkış Yap</a></li>
				<?php
				}else{
				?>
				<li><a href="girisyap.php">Giriş Yap</a></li>
    			<li><a href="xss.php">XSS Sorusuna Git</a></li>
				<li><a href="uyeol.php">Üye Ol</a></li>
				<?php
				}		
				?>
			</ul>
		</div>
		
<?php require "footer.php"; ?>
