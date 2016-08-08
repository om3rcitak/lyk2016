<?php require "header.php"; ?>

		<div class="container well">
			<h2 class="text-center">BAUN Bilgisayar ve İnternet Topluluğu Üye Yönetim Sistemi</h2>
			<h4 class="text-center">Merhaba hoşgeldiniz. Lütfen üye iseniz giriş yapınız değil ise üye olunuz</h4>
			
			<?php
			if(!isset($_SESSION["login"])){
				echo '<div class="alert alert-danger" style="margin-top:50px;"><strong>Opps!</strong> Bu sayfayı görüntüleyebilmek için giriş yapmalısınız</div>';
				die();
			}			
			?>
			
			<h3><a href="index.php"><< Anasayfa'ya Dön</a></h3>
			
			<div class="container" style="margin-top:50px;">
				<div class="row">
					<?php
					$rows = $db->get_results("SELECT * FROM users");
					foreach($rows AS $row){
					?>
					<div class="col-lg-2 col-md-2 col-xs-2 thumb">
						<a href="uye.php?id=<?php echo $row->id; ?>" class="thumbnail">
							<img class="img-responsive" src="resimler/<?php echo $row->image; ?>" alt="" style="height:150px;">
							<?php echo stripslashes($row->username); ?>
						</a>
					</div>
					<?php
					}
					?>
				</div>
			</div>
		
<?php require "footer.php"; ?>
