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
						<div class="pfblock-subtitle">
							En güncel iş ilanlarından haberdar olmak ve daha fazla iş imkanı bulmak için hemen kaydolun.
						</div>
					</div>

				</div>

			</div><!-- .row -->

			<div class="row">

				<div  class="col-sm-6 col-sm-offset-3" style="border: 3px dashed grey; padding: 15px;">

					<form  action="sirketkontrol.php" method="POST" id="contact-form" role="form">
						<div class="ajax-hidden">
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Kullanıcı Adı</label>
								<input required="" type="text" id="c_name" class="form-control" name="sirketkullaniciadi" placeholder="Kullanıcı Adınızı Giriniz" style="border: 1px solid !important;">
							</div>
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Şifre</label>
								<input required="" type="text" id="c_name" class="form-control" name="sifre" placeholder="Lütfen giriş şifrenizi belirleyiniz" style="border: 1px solid !important;">
							</div>
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Şirket İsim </label>
								<input required="" type="text" id="c_name" class="form-control" name="sirketadi" placeholder="Şirket Adınızı Giriniz" style="border: 1px solid !important;">
							</div>
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">İletişim</label>
								<input required="" type="text" id="c_name" class="form-control" name="email" placeholder="Email adresiniz" style="border: 1px solid !important;">
							</div>
						
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Şehir</label>
								<input required="" type="text" id="c_name" class="form-control" name="ssehir" placeholder="Şirketin Bulunduğu Şehir" style="border: 1px solid !important;">
							</div>
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Çalışan Sayısı</label>
								<input required="" type="text" id="c_name" class="form-control" name="calisansayi" placeholder="Çalışan Sayısı" style="border: 1px solid !important;">
							</div>
						<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Şirket Kuruluş Yılı</label>
								<input required="" type="text" id="c_name" class="form-control" name="kurulusyili" placeholder="Şirketinizin Bulunduğu Şehir" style="border: 1px solid !important;">
							</div>
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Bulunduğu İlçe</label>
								<input required="" type="text" id="c_name" class="form-control" name="ilce" placeholder="Şirketinizin Bulunduğu İlçe" style="border: 1px solid !important;">
							</div>
							<div class="form-group wow fadeInUp" data-wow-delay=".1s">
								<label class="sr-only" for="c_email">Hakkınızda</label>
							<textarea required="" style="border: 1px solid !important;" rows="4" cols="80"  name="sirketaciklama" class="form-control" placeholder="Şirket AÇıkalaması"></textarea>
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