<?php
require_once 'function.php';
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<?php print getHead("AnaSayfa");?>
	</head>
<body>
<?php print getHeader(); ?>
<section id="content">
	<div class="col-md-2"></div>
	<div class="col-md-10">

		<?php
		/**
		 * Created by PhpStorm.
		 * User: ÖZDEMİR
		 * Date: 19.07.2016
		 * Time: 10:13
		 */
		require_once 'config.php';


		?>
		
		<h1>Giriş Yap</h1>
		<p>
			<?php
			if (isset($_POST['submit'])){
				$sifre=$_POST['sifre'];
				$email=$_POST['email'];

				$uyeler = mysqli_query($conn,"SELECT * FROM uyeler WHERE email='$email' AND sifre='$sifre'");
				$sonuc=mysqli_num_rows($uyeler);
				if ($sonuc>0) {
					$_SESSION['user'] = $email;//usera emaili atadık...
					header("Location:index.php");

				}
				else
					echo "kullanıcı kayıtlı değil";
				while ($satir=mysqli_fetch_array($uyeler))
				{
				}
			}

			?>
		</p>
		<form action="" method="post">
			<input type="email" name="email" value="" size="30">
			<input type="password" name="sifre" value="" size="30">
			<input type="submit" name="submit" value="Giriş Yap">
		</form>

		
		</div>
		</section>
<?php print getFooter(); ?>
</body>
</html>
