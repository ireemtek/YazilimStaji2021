	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>İŞBUL.COM</title>

	<!-- CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
	<link href="assets/css/animate.css" rel="stylesheet">

	<!-- Custom styles CSS -->
	<link href="assets/css/style.css" rel="stylesheet" media="screen">

	<script src="assets/js/modernizr.custom.js"></script>

</head>
<body>
<?php 

include "baglan.php";


?>

	<section id="contact" class="pfblock">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header">
						<h2 class="pfblock-title">İŞBUL.COM</h2>
						<div class="pfblock-line"></div>
						<?php 

              if ($_GET['durum']=="no") {?>
              	<div class="alert alert-dancer">
              		<strong>HATA</strong><br>Kaydınız Oluşturulamadı.
              		
              	</div>


              <?php } else if ($_GET['durum']=='ok') {?>

              	<div style="color:green;" class="alert alert-dancer">
<strong>Kayıt İşlemi başarılı </strong>
</div>
            <?php } ?>



            <!-- giriş kontrolü -->



            <?php 

              if ($_GET['durum']=="kayitno") {?>
              	<div class="alert alert-dancer">
              		<strong>HATA</strong><br>Lütfen bilgilerinizi doğru giriniz.
              		
              	</div>


              <?php } ?>

              	          
					</div>

				</div>

			</div><!-- .row -->

			<div class="row">

				<div class="col-sm-6 col-sm-offset-3" style="border: 3px dashed grey; padding: 15px;">

					<form action="kontrol.php" method="POST"  id="contact-form" role="form">
						<div class="ajax-hidden">
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Kullanıcı Adı</label>
								<input type="text" id="c_name" class="form-control" name="kullaniciadi" placeholder="Kullanıcı Adınızı Giriniz" style="border: 1px solid !important;">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".1s">
								<label class="sr-only" for="c_email">Şifre</label>
								<input type="password" id="c_email" class="form-control" name="sifre" placeholder="Şifrenizi Giriniz" style="border: 1px solid !important;">
							</div>

							

							<button name="girisyap" style="background-color:#48D1CC;" type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s">Giriş Yap</button>
						</div>
						<div class="ajax-response"></div>
					</form>
<p style="text-align:right;">Kayıt olmak için <a href="kayit2.php">tıklayınız.</a></p>
				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
</body>