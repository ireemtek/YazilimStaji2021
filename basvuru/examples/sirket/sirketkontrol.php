<?php 

include "../baglan.php";
ob_start();
session_start();

if (isset($_POST['kayitol'])) 

{


$sirketkullaniciadi = htmlspecialchars($_POST["sirketkullaniciadi"]); 
$sirketadi = htmlspecialchars($_POST["sirketadi"]);
$ssehir = htmlspecialchars($_POST["ssehir"]); 
$sirketaciklama = htmlspecialchars($_POST["sirketaciklama"]);
$sifre= md5(htmlspecialchars($_POST['sifre']));
$email = htmlspecialchars($_POST["email"]);
$calisansayi= htmlspecialchars($_POST['calisansayi']);
$ilce = htmlspecialchars($_POST["ilce"]);
$kurulusyili= htmlspecialchars($_POST['kurulusyili']);
	$kaydet=$db->prepare("INSERT into sirketkayitlari set
		
		sirketkullaniciadi=:sirketkullaniciadi,
		sirketadi=:sirketadi,	
		ssehir=:ssehir,
		sirketaciklama=:sirketaciklama,
		sifre=:sifre,
		email=:email,
		calisansayi=:calisansayi,
		ilce=:ilce,
		kurulusyili=:kurulusyili
		
		");
	
	$insert=$kaydet->execute(array(

	
		'sirketkullaniciadi'=>$sirketkullaniciadi,
		'sirketadi'=>$sirketadi,
		'ssehir'=>$ssehir,
		'sirketaciklama'=>$sirketaciklama,
		'sifre'=>$sifre,
		'email'=>$email,
		'calisansayi'=>$calisansayi,
		'ilce'=>$ilce,
		'kurulusyili'=>$kurulusyili
		
	));

	if ($insert) 

	{
		header("Location:sirketgiris.php");	# code...
	}
	else{
		header("Location:sirketkayit.php?nöööö");
	}

}






if (isset($_POST['ilanver'])) 

{


$sirketkullaniciadi = htmlspecialchars($_POST["sirketkullaniciadi"]); 
$sirketadi = htmlspecialchars($_POST["sirketadi"]);
$pozisyon = htmlspecialchars($_POST["pozisyon"]); 
$sehir = htmlspecialchars($_POST["sehir"]);
$ozellik1 = htmlspecialchars($_POST["ozellik1"]);
$ozellik2 = htmlspecialchars($_POST["ozellik2"]);
$ozellik3 = htmlspecialchars($_POST["ozellik3"]);
$ozellik4 = htmlspecialchars($_POST["ozellik4"]);
$ozellik5 = htmlspecialchars($_POST["ozellik5"]);
$ozellik6 = htmlspecialchars($_POST["ozellik6"]);
$ozellik7 = htmlspecialchars($_POST["ozellik7"]);
$ilanaciklama= htmlspecialchars($_POST['ilanaciklama']);

	$kaydet=$db->prepare("INSERT into ilanlar set
		
		sirketkullaniciadi=:sirketkullaniciadi,
		sirketadi=:sirketadi,	
		pozisyon=:pozisyon,
		sehir=:sehir,
		ozellik1=:ozellik1,
		ozellik2=:ozellik2,
		ozellik3=:ozellik3,
		ozellik4=:ozellik4,
		ozellik5=:ozellik5,
		ozellik6=:ozellik6,
		ozellik7=:ozellik7,
		ilanaciklama=:ilanaciklama
		
		");
	
	$insert=$kaydet->execute(array(

	
		'sirketkullaniciadi'=>$sirketkullaniciadi,
		'sirketadi'=>$sirketadi,
		'pozisyon'=>$pozisyon,
		'sehir'=>$sehir,
		'ozellik1'=>$ozellik1,
		'ozellik2'=>$ozellik2,
		'ozellik3'=>$ozellik3,
		'ozellik4'=>$ozellik4,
		'ozellik5'=>$ozellik5,
		'ozellik6'=>$ozellik6,
		'ozellik7'=>$ozellik7,
		'ilanaciklama'=>$ilanaciklama
		
	));

	if ($insert) 

	{
		header("Location:ilanlarim.php");	# code...
	}
	else{
		header("Location:ilanver.php?nöööö");
	}

}



if ($_GET['teklifsil']=="ok") 

{


	$sil=$db->prepare("DELETE from ilanlar where ilanid=:id");
	$kontrol=$sil->execute(array(

		'id'=>	$_GET['teklif_id']
	));
	# code...

if ($kontrol) {
	header("Location:ilanlarim.php?sil=ok");

	# code...
}else {

	header("Location:ilandetay.php?sil=no");
}

}


















if (isset($_POST['giris']))

{
	$sirketkullaniciadi= htmlspecialchars($_POST['sirketkullaniciadi']);
	$sifre=md5(htmlspecialchars($_POST['sifre']));

$kullanicisor=$db->prepare("SELECT * FROM sirketkayitlari where sirketkullaniciadi=:sirketkullaniciadi and sifre=:sifre");
$kullanicisor->execute(array(
	'sirketkullaniciadi'=> $sirketkullaniciadi,
	'sifre' => $sifre
)); 
echo $say=$kullanicisor->rowCount();

if ($say==1) 

{
	$_SESSION['sirketkullaniciadi']=$sirketkullaniciadi;

	header("Location:sirketuser.php");
}
else 
{
	header("Location:sirketgiris.php?durum=no");
}
}





if (isset($_POST['guncelle'])) 
{

$sirketkullaniciadi= htmlspecialchars($_POST['sirketkullaniciadi']);
$sirketadi= htmlspecialchars($_POST['sirketadi']);
$email= htmlspecialchars($_POST['email']);
$calisansayi= htmlspecialchars($_POST['calisansayi']);
$ssehir= htmlspecialchars($_POST['ssehir']);
$ilce= htmlspecialchars($_POST['ilce']);
$kurulusyili= htmlspecialchars($_POST['kurulusyili']);
$sirketaciklama= htmlspecialchars($_POST['sirketaciklama']);

$teklifguncelle=$db->prepare("UPDATE sirketkayitlari SET


		sirketadi=:sirketadi,
		email=:email,
		calisansayi=:calisansayi,
		ssehir=:ssehir,
		ilce=:ilce,
		kurulusyili=:kurulusyili,
		sirketaciklama=:sirketaciklama

		WHERE sirketkullaniciadi={$_POST['sirketkullaniciadi']}");


$update=$teklifguncelle->execute(array(


'sirketadi'=> $_POST['sirketadi'],
'email'=> $_POST['email'],
'calisansayi'=> $_POST['calisansayi'],
'ssehir'=> $_POST['ssehir'],
'ilce'=> $_POST['ilce'],
'kurulusyili'=> $_POST['kurulusyili'],
'sirketaciklama'=> $_POST['sirketaciklama']
));

if ($update) 
{
header("Location:sirketuser.php");
}
else
{

header("Location:sirketuser.php?kullaniciadi=$kullaniciadi&durum=no");

}

}










 ?>