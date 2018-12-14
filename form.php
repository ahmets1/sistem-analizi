<!DOCTYPE html>
<html>

<head>
<title> YANGIN RAPORU GİRİŞ FORMU </title>
<meta charset="utf8">

<link href="form.css" type="text/css" rel="stylesheet"/>
</head>


<body style="background-color:#dbe5e3;">


<div class="container">
<form class="form-signin" action="is_analizi.php" method="POST">
<h1 class="yazi">İtfaiye Yangın Raporu</h1>
<img src="C:\Users\TOSHIBA\Desktop\İş analiz(İtfaiye Projesi)/izmir.jpg" width="100" height="100"/>
<img src="C:\Users\TOSHIBA\Desktop\İş analiz(İtfaiye Projesi)/itfaiye.jpg" width="100" height="100"/>
<div>
 
<fieldset style="width:400px"><legend>Kayıt Bilgileri </legend>
 
<form>
<table border="10" width=650 height=450><tr>
 
<td>Kayıt No:</td><td><input type="number" name="kayit_no"></td>

<tr><td>Bildirim Sıra No:</td><td><input type="number" name="b.sira_no"></td></tr>
 
<tr><td>Olay Tarihi:</td><td><input type="date" name="olay_tarihi"></td></tr>
 
<tr><td>Kayıt Tarihi:</td><td><input type="date" name="kayit_tarihi"></td></tr>

<tr><td>Bildirilen Adres:</td><td><input type="text" name="b.adres"></td></tr>
<tr><td>Doğru Adres:</td><td><input type="text" name="d.adres"></td></tr>
<tr><td>Bildirim Saati:</td><td><input type="time" name="b.saati"></td></tr>
<tr><td>Telefon:</td><td><input type="tel" name="telefon"></td></tr>
<tr><td>Bildirimi Alan:</td><td><input type="text" name="b.alan"></td></tr>

</table>
 
 
</form>
 
</fieldset>
</div>

<div class="yangin">

<fieldset style="width:400px"><legend>Yangın Bilgileri</legend>
 
<form>
<table border="10" width=650><tr>
 
<td>Yangın Türü:</td><td><input type="select" name="yangin_türü"/></td>
<tr><td>Yangın Sınıfı:</td><td>
<input type="radio" name="yangin_sinifi" value="A">A 
<input type="radio" name="yangin_sinifi" value="B">B 
<input type="radio" name="yangin_sinifi" value="C">C 
<input type="radio" name="yangin_sinifi" value="D">D 
<input type="radio" name="yangin_sinifi" value="E">E</td></tr> 
<tr><td>Yangın Sebebi:</td><td><input type="text" name="yangin_sekli"></td></tr>
<tr><td>Yapının Şekli:</td><td><input type="text" name="yapi_sekil"></td></tr>
<tr><td>Kullanım Şekli:</td><td><input type="text" name="k.sekli"></td></tr>
<tr><td>Söndürme Türü:</td><td><input type="text" name="s.türü"></td></tr>
<tr><td>Söndürme Miktarı:</td><td><input type="text" name="s.miktari"></td></tr>
<tr><td>Olay Durumu:</td><td><textarea type="text" name="olay_dürümü"></textarea></td></tr>
<tr><td>Çıkış Nedeni:</td><td><input type="text" name="cikis_nedeni"></td></tr>
<tr><td>Söndürme Sonunda Hasar Durumu:</td><td>
<input type="text" name="hasar_dürümü"></td></tr>
<tr><td>Araç-gereç kaybı:</td><td><input type="text" name="arac_kaybi"></td></tr>
<tr><td>Yangın Yeri Kime Teslim Edildi:</td><td><input type="text" name="teslim"></td></tr>
<tr><td>Yangın Sahibi:</td><td><input type="text" name="yangin_sahibi"></td></tr>
<tr><td>Elektrik Arıza Geliş Saati:</td><td><input type="time" name="elektrik_gelis"></td></tr>
<tr><td>112 Acil Servis Geliş Saati:</td><td><input type="time" name="acil_gelis"></td></tr>
<tr><td>Doğalgaz Geliş Saati:</td><td><input type="time" name="d.gaz_gelis"></td></tr>
<tr><td>Emniyet-Jandarma Geliş Saati:</td><td><input type="time" name="polis_gelis"></td></tr>
</table>
 
 
</form>
 
</fieldset>


</div>

<div>
<fieldset style="width:400px"><legend>Ekip Bilgileri</legend>
 
<form>
<table border="10" width=650><tr>
 
<td>Ana Ekip Amiri:</td><td><input type="text" name="ana_ekip_amir"/></td>
<tr><td>Araç Sayısı:</td><td><input type="number" name="a_arac_sayisi"></td></tr> 
<tr><td>Araç plakası:</td><td><input type="text" name="a_arac_plakasi"></td></tr> 
<tr><td>Personel sayısı:</td><td><input type="number" name="a_personel_sayisi"></td></tr>
<tr><td>Çıkış saati:</td><td><input type="time" name="a_cikis_saati"></td></tr>
<tr><td>Varış Saati</td><td><input type="time" name="a_varis_saati"></td></tr>
<tr><td>Dönüş Saati:</td><td><input type="time" name="a_dönüs_saati"></td></tr>
<tr><td>Dönüş Tarihi:</td><td><input type="date" name="a_dönüs_tarihi"></td></tr>
<tr><td>Yardımcı Ekip Amiri</td><td><input type="text" name="yard_ekip_amir"></td></tr>
<tr><td>Araç Sayısı:</td><td><input type="number" name="y_arac_sayisi"></td></tr>
<tr><td>Araç plakası:</td><td><input type="text" name="y_arac_plakasi"></td></tr> 
<tr><td>Personel sayısı:</td><td><input type="number" name="y_personel_sayisi"></td></tr>
<tr><td>Çıkış saati:</td><td><input type="time" name="y_cikis_saati"></td></tr>
<tr><td>Varış Saati</td><td><input type="time" name="y_varis_saati"></td></tr>
<tr><td>Dönüş Saati:</td><td><input type="time" name="y_dönüs_saati"></td></tr>
<tr><td>Dönüş Tarihi:</td><td><input type="date" name="y_dönüs_tarihi"></td></tr>
</table>
 
 
</form>
 
</fieldset>


</div>

<div class="yarali">

<fieldset style="width:400px"><legend>Kayıp-Yaralı</legend>
 
<form>
<table border="10" width=650 height=150><tr>
 
<td>Ölen İtfaiyeci:</td><td><input type="textarea" name="ölen_itfaiye"></td>
<tr><td>Ölen Halk:</td><td><input type="text" name="ölen_halk"></td></tr>
<tr><td>Yaralı Halk:</td><td><input type="text" name="yarali_halk"></td></tr>
<tr><td>Yaralı İtfaiyeci:</td><td><input type="text" name="yarali_itfaiye"></td></tr>

</table>
 
 
</form>
 
</fieldset>
<br><br><br><br><br>
<button id="buton" type="submit" name="gonder" class="btn btn-lg btn-danger btn-block">Gönder</button>
</div>


</form>
</div>


</body>

</html>
















