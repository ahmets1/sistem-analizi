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
		$dosya_id=$_POST['dosya_id'];
		//$musteri_id=$_POST['musteri_id'];
		//$tur_ad = $_POST['tur_ad'];
		//$deger = $_POST['deger'];
		//$deger1 = $_POST['deger1'];
	
	
		$sql="SELECT dosyalar.dosya_id, musteriler.musteri_id, musteriler.musteri_ad, musteriler.musteri_soyad, dosyalar.dosya_yeri, dosya_tur.dosya_ad
		FROM dosyalar, musteri_dosya, musteriler, dosya_tur
		WHERE musteriler.musteri_id=musteri_dosya.musteri_id and musteri_dosya.dosya_id=dosyalar.dosya_id AND dosyalar.dosya_tur_id=dosya_tur.dosya_tur_id='".$dosya_id."'";
		
	//WHERE kitap_tur.kitap_id=kitaplar.kitap_id and kitap_tur.tur_id=turler.tur_id and kitap_tur.tur_id='".$tur_ad."' and kitaplar.sayfa<'".$deger."' and kitaplar.fiyat<'".$deger1."'";
		
		$srg=mysqli_query($baglan,$sql) or die("MySQL error: " . mysqli_error($baglan));
		if(mysqli_num_rows($srg)>0){
				while($row=mysqli_fetch_array($srg)){ 
			
			//	echo "<hr>Kitap Adı: ".$row["kitap_ad"]."</br>Kitap Türü:".$row["tur_ad"]. "</br>Fiyatı:".$row["fiyat"]."</br>Sayfası: ".$row["sayfa"];"<hr></br>";
			echo "<hr>Dosya ID: ".$row["dosya_id"]."</br>Musteri ID:".$row["musteri_id"]. "</br>Fiyatı:".$row["fiyat"]."</br>Sayfası: ".$row["sayfa"];"<hr></br>";
				}		
		}else{
			//echo "Kayıt Bulunamadı";
		} 
		
}
mysqli_close($baglan); 
?>
