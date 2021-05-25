
<?php 

include "../baglan.php";
$bayisor=$db->prepare("SELECT * FROM sirketkayitlari where id=:id");
$bayisor->execute(array(
'id'=>1
));
$bayicek=$bayisor->fetch(PDO::FETCH_ASSOC);

?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Kariyerim.net</title>

	<!-- CSS -->
	<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="../assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
	<link href="../assets/css/animate.css" rel="stylesheet">

	<!-- Custom styles CSS -->
	<link href="../assets/css/style.css" rel="stylesheet" media="screen">

	<script src="../assets/js/modernizr.custom.js"></script>

</head>
<body>

	<section id="contact" class="pfblock">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header">
						<h2 class="pfblock-title">SİTE İSMİ</h2>
						<div class="pfblock-line"></div>




            <!-- giriş kontrolü -->



              	          
					</div>

				</div>

			</div><!-- .row -->

			<div class="row">

				<div class="col-sm-6 col-sm-offset-3" style="border: 3px dashed grey; padding: 15px;">

					<form action="sirketkontrol.php" method="POST"  id="contact-form" role="form">
						<div class="ajax-hidden">
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Kullanıcı Adı</label>
								<input type="text" id="c_name" class="form-control" name="sirketkullaniciadi" placeholder="Kullanıcı Adınızı Giriniz" style="border: 1px solid !important;">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".1s">
								<label class="sr-only" for="c_email">Şifre</label>
								<input type="password" id="c_email" class="form-control" name="sifre" placeholder="Şifrenizi Giriniz" style="border: 1px solid !important;">
							</div>

							

							<button name="giris" style="background-color:#48D1CC;" type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s">Giriş Yap</button>
						</div>
						<div class="ajax-response"></div>
					</form>
<p style="text-align:right;">Kayıt olmak için <a href="sirketkayit.php">tıklayınız.</a></p>
				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
</body>