	<?php 

include "baglan.php";


?>
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



	<section id="contact" class="pfblock">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header">
						<h2 class="pfblock-title">İŞBUL</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							En güncel iş ilanlarından haberdar olmak ve daha fazla iş imkanı bulmak için hemen kaydolun.
						</div>
					</div>

				</div>

			</div><!-- .row -->

			<div class="row">

				<div  class="col-sm-6 col-sm-offset-3" style="border: 3px dashed grey; padding: 15px;">

					<form  action="kontrol.php" method="POST" id="contact-form" role="form">
						<div class="ajax-hidden">
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Kullanıcı Adı</label>
								<input required="" type="text" id="c_name" class="form-control" name="kullaniciadi" placeholder="Kullanıcı Adınızı Giriniz" style="border: 1px solid !important;">
							</div>
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Kullanıcı Adı</label>
								<input required="" type="text" id="c_name" class="form-control" name="sifre" placeholder="Lütfen giriş şifrenizi belirleyiniz" style="border: 1px solid !important;">
							</div>
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">İsim Soyisim</label>
								<input required="" type="text" id="c_name" class="form-control" name="isimsoyisim" placeholder="Adınızı ve Soyadınızı Giriniz" style="border: 1px solid !important;">
							</div>
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Yas</label>
								<input required="" type="text" id="c_name" class="form-control" name="yas" placeholder="Yasınızı Giriniz" style="border: 1px solid !important;">
							</div>
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Telefon</label>
								<input required="" type="text" id="c_name" class="form-control" name="telefon" placeholder="Telefonunuzu Giriniz" style="border: 1px solid !important;">
							</div>
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Yaşadığınız Şehir</label>
								<input required="" type="text" id="c_name" class="form-control" name="ysehir" placeholder="Yaşadığınız Sehri Giriniz" style="border: 1px solid !important;">
							</div>
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Okulunuz</label>
								<input required="" type="text" id="c_name" class="form-control" name="okul" placeholder="Okulunuz Giriniz" style="border: 1px solid !important;">
							</div>
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Bölümünüz</label>
								<input required="" type="text" id="c_name" class="form-control" name="bolum" placeholder="Bölümünüzü Giriniz" style="border: 1px solid !important;">
							</div>
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Email Adresiniz</label>
								<input required="" type="text" id="c_name" class="form-control" name="email" placeholder="Email Adresinizi Giriniz" style="border: 1px solid !important;">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".1s">
								<label class="sr-only" for="c_email">Yetkinlikler</label>
							<textarea required="" style="border: 1px solid !important;" rows="4" cols="80" name="yetkinlikler"  class="form-control" placeholder="Yetkinlikleriniz"></textarea>
							</div>
							<div class="form-group wow fadeInUp" data-wow-delay=".1s">
								<label class="sr-only" for="c_email">Hobi</label>
							<textarea required="" style="border: 1px solid !important;" rows="4" cols="80"  name="hobi"  class="form-control" placeholder="Hobileriniz"></textarea>
							</div>
							<div class="form-group wow fadeInUp" data-wow-delay=".1s">
								<label class="sr-only" for="c_email">Deneyimleriniz</label>
							<textarea required="" style="border: 1px solid !important;" rows="4" cols="80"  name="deneyim" class="form-control" placeholder="Deneyimleriniz"></textarea>
							</div>
							<div class="form-group wow fadeInUp" data-wow-delay=".1s">
								<label class="sr-only" for="c_email">Hakkınızda</label>
							<textarea required="" style="border: 1px solid !important;" rows="4" cols="80"  name="hakkimda" class="form-control" placeholder="Hakkınızda"></textarea>
							</div>

							

							<button style="background-color:#48D1CC;" name="kayitol" type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s">Kayıt Ol</button>
						</div>
						<div class="ajax-response"></div>
					</form>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
</body>