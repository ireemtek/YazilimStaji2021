<?php 

include "baglan.php";
ob_start();
session_start();
if (isset($_POST['kayitol'])) 

{


$kullaniciadi = htmlspecialchars($_POST["kullaniciadi"]); 
$sifre= md5(htmlspecialchars($_POST['sifre']));
$isimsoyisim = htmlspecialchars($_POST["isimsoyisim"]);
$yas = htmlspecialchars($_POST["yas"]); 
$telefon = htmlspecialchars($_POST["telefon"]);
$ysehir = htmlspecialchars($_POST["ysehir"]);
$okul= htmlspecialchars($_POST['okul']);
$bolum = htmlspecialchars($_POST["bolum"]);
$email= htmlspecialchars($_POST['email']);
$yetkinlikler = htmlspecialchars($_POST["yetkinlikler"]);
$hobi= htmlspecialchars($_POST['hobi']);
$deneyim = htmlspecialchars($_POST["deneyim"]);
$hakkimda= htmlspecialchars($_POST['hakkimda']);


	$kaydet=$db->prepare("INSERT into kullanicikayitlari set
		
		kullaniciadi=:kullaniciadi,
		sifre=:sifre,
		isimsoyisim=:isimsoyisim,	
		yas=:yas,
		telefon=:telefon,
		ysehir=:ysehir,
		okul=:okul,
		bolum=:bolum,
		email=:email,
		yetkinlikler=:yetkinlikler,
		hobi=:hobi,
		deneyim=:deneyim,
		hakkimda=:hakkimda
		
		");
	
	$insert=$kaydet->execute(array(

	
		'kullaniciadi'=>$kullaniciadi,
		'sifre'=>$sifre,
		'isimsoyisim'=>$isimsoyisim,
		'yas'=>$yas,
		'telefon'=>$telefon,
		'ysehir'=>$ysehir,
		'okul'=>$okul,
		'bolum'=>$bolum,
		'email'=>$email,
		'yetkinlikler'=>$yetkinlikler,
		'hobi'=>$hobi,
		'deneyim'=>$deneyim,
		'hakkimda'=>$hakkimda
		
	));

	if ($insert) 

	{
		header("Location:giris2.php");	# code...
	}
	else{
		header("Location:kayit2.php?nöööö");
	}

}




if (isset($_POST['girisyap']))

{
	$kullaniciadi= htmlspecialchars($_POST['kullaniciadi']);
	$sifre=md5(htmlspecialchars($_POST['sifre']));

$kullanicisor=$db->prepare("SELECT * FROM kullanicikayitlari where kullaniciadi=:kullaniciadi and sifre=:sifre");
$kullanicisor->execute(array(
	'kullaniciadi'=> $kullaniciadi,
	'sifre' => $sifre
)); 
echo $say=$kullanicisor->rowCount();

if ($say==1) 

{
	$_SESSION['kullaniciadi']=$kullaniciadi;

	header("Location:user.php");
}
else 
{
	header("Location:giris2.php?durum=no");
}
}

if (isset($_POST['guncelle'])) 
{

	$kullaniciadi= htmlspecialchars($_POST['kullaniciadi']);
	$isimsoyisim= htmlspecialchars($_POST['isimsoyisim']);
	$yas= htmlspecialchars($_POST['yas']);
	$ysehir= htmlspecialchars($_POST['ysehir']);
	$okul= htmlspecialchars($_POST['okul']);
	$yetkinlikler= htmlspecialchars($_POST['yetkinlikler']);
	$hobi= htmlspecialchars($_POST['hobi']);
	$deneyim= htmlspecialchars($_POST['deneyim']);
	$email= htmlspecialchars($_POST['email']);
	$hakkimda= htmlspecialchars($_POST['hakkimda']);
	$bolum= htmlspecialchars($_POST['bolum']);
	$telefon= htmlspecialchars($_POST['telefon']);

	$teklifguncelle=$db->prepare("UPDATE kullanicikayitlari SET isimsoyisim=?, yas=?, ysehir=?, okul=?, yetkinlikler=?, hobi=?,
		deneyim=?, email=?, hakkimda=?, bolum=?, telefon=? WHERE kullaniciadi=?");


	$update=$teklifguncelle->execute([$isimsoyisim, $yas, $ysehir,$okul,$yetkinlikler,$hobi,$deneyim,$email,$hakkimda,$bolum,	$telefon, $kullaniciadi]);

	if ($update) 
	{
		header("Location:user.php");
	}
	else
	{

		header("Location:user.php?durum=no");

	}

}





if (isset($_POST['hemenbasvur'])) 

{
$targetfolder = "image/gorseller/pdfler/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

 $ok=1;

$file_type=$_FILES['file']['type'];

if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") {

 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }

}

else {

 echo "You may only upload PDFs, JPEGs or GIF files.<br>";

}

$sirketkullaniciadi = htmlspecialchars($_POST["sirketkullaniciadi"]);
$isimsoyisim = htmlspecialchars($_POST["isimsoyisim"]);
$kullaniciadi = htmlspecialchars($_POST["kullaniciadi"]); 
$sirketadi = htmlspecialchars($_POST["sirketadi"]); 
$ilanid = htmlspecialchars($_POST["ilanid"]); 
$pozisyon = htmlspecialchars($_POST["pozisyon"]); 
$yas = htmlspecialchars($_POST["yas"]);
$ysehir = htmlspecialchars($_POST["ysehir"]);
$okul = htmlspecialchars($_POST["okul"]);
$yetkinlikler = htmlspecialchars($_POST["yetkinlikler"]);
$hobi = htmlspecialchars($_POST["hobi"]);
$deneyim = htmlspecialchars($_POST["deneyim"]);
$email = htmlspecialchars($_POST["email"]);
$hakkimda = htmlspecialchars($_POST["hakkimda"]);
$bolum = htmlspecialchars($_POST["bolum"]);

	$kaydet=$db->prepare("INSERT into basvurular set
		
		sirketkullaniciadi=:sirketkullaniciadi,
		isimsoyisim=:isimsoyisim,
		kullaniciadi=:kullaniciadi,
		sirketadi=:sirketadi,
		ilanid=:ilanid,
		pozisyon=:pozisyon,
		yas=:yas,
		ysehir=:ysehir,
		okul=:okul,
		yetkinlikler=:yetkinlikler,
		hobi=:hobi,
		deneyim=:deneyim,
		email=:email,
		hakkimda=:hakkimda,
		bolum=:bolum,
		pdf=:pdf
		");
	
	$insert=$kaydet->execute(array(

		'sirketkullaniciadi'=>$sirketkullaniciadi,
		'isimsoyisim'=>$isimsoyisim,
		'kullaniciadi'=>$kullaniciadi,
		'sirketadi'=>$sirketadi,
		'ilanid'=>$ilanid,
		'pozisyon'=>$pozisyon,
		'yas'=>$yas,
		'ysehir'=>$ysehir,
		'okul'=>$okul,
		'yetkinlikler'=>$yetkinlikler,
		'hobi'=>$hobi,
		'deneyim'=>$deneyim,
		'email'=>$email,
		'hakkimda'=>$hakkimda,
		'bolum'=>$bolum,
		'pdf' =>$targetfolder
	));

	if ($insert) 

	{
		header("Location:basvurularim.php");	# code...
	}
	else{
		header("Location:basvuru.php?nöööö");
	}

}






 ?>


