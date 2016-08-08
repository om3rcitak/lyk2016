<?php require "header.php"; ?>

		<div class="container well">
			<h2 class="text-center">BAUN Bilgisayar ve İnternet Topluluğu Üye Yönetim Sistemi</h2>
			<h4 class="text-center">Merhaba hoşgeldiniz. Lütfen üye iseniz giriş yapınız değil ise üye olunuz</h4>
			
			<?php
			if(isset($_POST["username"])){
				$user = $_POST["username"];
				$pass = md5($_POST["password"]);
				$row = $db->get_row("SELECT * FROM users WHERE username='$user' AND password='$pass'");
				if (count($row)>0){
					// echo '<div class="alert alert-success" style="margin-top:50px;"><strong>Başarılı!</strong> Hoşgeldiniz sayın <b>'.$row->username.'</b>! <a href="uyeler.php">Buraya tıklayarak diğer üyeleri görebilirsiniz.</a></div>';
					$_SESSION["login"] = $row->id;
					header("Location: index.php");
				} else {
					echo '<div class="alert alert-danger" style="margin-top:50px;"><strong>Opps!</strong>Kullanıcı adı veya şifre hatalı. Lütfen tekrar deneyiniz.</div>';
				}
			}
			?>
			
			<form method="post" role="form" style="margin-top:50px;">
				<div class="form-group">
					<label for="email">Kullanıcı Adı:</label>
					<input type="text" name="username" class="form-control" id="u" placeholder="Kullanıcı Adınızı Giriniz">
				</div>
				<div class="form-group">
					<label for="pwd">Şifre:</label>
					<input type="password" name="password" class="form-control" id="pwd" placeholder="Şifrenizi Giriniz">
				</div>
				<button type="submit" class="btn btn-default">Giriş Yap</button>
			</form>
		</div>
		
<?php require "footer.php"; ?>