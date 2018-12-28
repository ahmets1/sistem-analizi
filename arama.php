<?php
include "baglan.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dosya Yeri Sayfası</title>
</head>
<body bgcolor="#f1f1f1">

<?php
require("baglan.php");
if(!$baglan){ 
	die("Bağlantı Başarısız".mysqli_connect_error());
}
else
{
	//echo "Bağlantı Başarılı";
}
$ara = $_POST["ara"];
if(isset($ara)){
		//$dosya_id=$_POST['dosya_id'];
		$musteri_id=$_POST['musteri_id'];
		//$musteri_ad=$_POST['musteri_ad'];
		//$musteri_soyad=$_POST['musteri_soyad'];
		//$dosya_ad=$_POST['dosya_ad'];
		//$dosya_yeri=$_POST['dosya_yeri'];
		
	
	
	
		$sql=("SELECT dosyalar.dosya_id, musteriler.musteri_id, musteriler.musteri_ad, musteriler.musteri_soyad, dosya_tur.dosya_ad, dosyalar.dosya_yeri
FROM musteriler, musteri_dosya, dosya_tur, dosyalar
WHERE musteriler.musteri_id=musteri_dosya.musteri_id AND dosya_tur.dosya_tur_id=dosyalar.dosya_tur_id AND  musteri_dosya.dosya_id=dosyalar.dosya_id AND musteriler.musteri_id='".$musteri_id."' ");
		
		
		
	
		
		$srg=mysqli_query($baglan,$sql) or die("MySQL error: " . mysqli_error($baglan));
		if(mysqli_num_rows($srg)>0){
				while($row=mysqli_fetch_array($srg)){



			
			echo "Dosya ID: ".$row["dosya_id"]."<hr>Musteri ID:".$row["musteri_id"]. "<hr>Musteri Ad:".$row["musteri_ad"]."<hr>Musteri Soyad:".$row["musteri_soyad"]."<hr>Dosya Ad :".$row["dosya_ad"]."<hr> Dosya Yeri:".$row["dosya_yeri"];"<hr>";
				}		
		}else{
			//echo "Kayıt Bulunamadı";
		} 
		
}
mysqli_close($baglan); 
?>

</body>
