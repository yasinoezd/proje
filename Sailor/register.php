<?php
require_once 'function.php';
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<?php print getHead("Uye Ol");?>
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
		 * Time: 10:12
		 */
		require_once 'config.php';


		if (isset($_POST['submit'])) {
			$ad=$_POST['ad'];
			$soyad=$_POST['soyad'];
			$email=$_POST['email'];
			$sifre=$_POST['sifre'];

			echo "form gonderıldı";

			$sql = mysqli_query($conn, "INSERT INTO uyeler(ad,soyad,email,sifre) VALUES ('$ad','$soyad','$email','$sifre')");

			if ($sql)
			{
				echo "{$ad} {$soyad}   adlı kullanıcı basarıyla kaydedıldı... ";
				header("Location:index.php");
			}
		}

		?>


		<form action="" method="post">
			<p>Ad:</p> <input type="text" name="ad" required="required" value="" size="30">
			<p>Soyad:</p> <input type="text" name="soyad" required="required" value="" size="30">
			<p>Email: </p><input type="email" name="email" required="required" value="" size="30">
			<p>Password:</p> <input type="text" name="sifre" required="required" value="" size="30">
			<input type="submit"  name="submit" value="kaydet">
		</form>












	</div>
		</section>
<?php print getFooter(); ?>
</body>
</html>
