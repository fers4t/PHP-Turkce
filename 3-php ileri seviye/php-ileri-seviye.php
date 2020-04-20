<?php 
// 1. php tarih islemleri 
	// * date() fonksiyonu ile php'de tarih formatlayabilir ve diledigimiz gibi ekrana yansitabiliriz. 
	// * yazim sekli; date(format, zamandamgasi) seklindedir. 
	
	//  a. tarih icin kullanilan parametreler sunlardir;
	// 	d - gune tekabul eder 
	// 	m - ay 
	// 	Y - yil 
	// 	l (kucuk L) - gun 
	// * ".", "/", "." gibi karakterler de bu parametreler arasina eklenebilir.
	// 	orn;
	// 	echo "bugun tarih " .date("Y/m/d"); echo "<br>";
	// 	echo "bugun tarih " .date("Y m d"); echo "<br>";
	// 	echo "bugun tarih " .date("Y - m - d"); echo "<br>";
	// 	echo "yilimiz: " .date("Y"); echo "<br>";

	// 	b. zaman parametreleri ise su sekildedir;
	// 		H - 24 saat formati 
	// 		h - 12 saat formati 
	// 		i - dakika
	// 		s - saiye 
	// 		a - am ve pm 

	// 		echo "suan saat " .date("H:i:s"); echo "<br>";

	//  c. zaman dilimi belirleme 	
	//  		date_default_timezone_set fonksiyonuyla zaman dilimi belirlenebilir. 

	// 		 orn;
	// 		date_default_timezone_set('America/New_York');
	// 		echo "new york'ta suan saat: " . date("H:i:s"); echo "<br>";

	//  d. zaman yaratma
	// 		mktime() fonksiyonuyla zaman yaratabiliriz. 
	// 		kullanimi su sekildedir: 		mktime(saat, dakika, saniye, ay, gun, yil)

	// 		orn;
	// 		$tarih = mktime(11, 14, 25, 3, 5, 2014);
	// 		echo "yaratilmis arih: " . date("Y-m-d h:i:sa", $tarih);  echo "<br>";

	//  	e. stringden tarih yaratma 
	// 		strtotime() fonksiyonuyla stringden, yani yazidan tarih yaratabiliriz. 

	// 		orn;

	// 		$tarih = strtotime("tomorrow");
	// 		echo date("Y-m-d h:i:sa", $tarih) . "<br>";

	// 		$tarih = strtotime("next Friday");
	// 		echo date("Y-m-d h:i:sa", $tarih) . "<br>"		

	//////////////////////////////////////////////////////////////////////////////

	// 	* tarih dongulerini, for, foreach gibi dongulerde de kullanabiliriz. 

	// 	orn. 
	// 	$startdate=strtotime("Saturday");
	// 	$enddate=strtotime("+6 weeks", $startdate);

	// 	while ($startdate < $enddate) {
	// 	  echo date("M d", $startdate) . "<br>";
	// 	  $startdate = strtotime("+1 week", $startdate);
	// 	}

// 2. include & require
	// * include ve require fonksiyonlari, bir dosyanin baska bir dosyadan cagrilmasini saglar. farkli bir sekilde ifade etmek gerekirse, bu fonksiyonlarla, bir dosyaya istedigimiz dosyayi cagirabiliriz. 
	// * include ve require arasindaki fark oldukca basittir; include'da cagirdigimiz dosya gelse de gelmese de kod okunmaya ve calismaya devam eder, fakat require'da cagirdigimiz dosya gelmezse okuma durdurulur. 
	// * syntax ikisinde de ayni sekildedir: include/require 'dosyaadi.php';
	// * her kodu ayni sayfada yazmak cogu zaman mumkun olmadigi icin, kodlari parcalara ayiririz. menu, sidebar, icerik, reklam, header, footer gibi alanlar farkli dosyalarda toplanir mesela. bu noktada, menunun gelmesi gereken yere: include 'menu.php'; yazilir ve tum menu tek kodla cagrilmis olur. 

// 3. dosya islemleri 
	// bu bolumde php ile dosyalar uzerinde degisiklik yapmayi anlatiyorum.
	
	// a. yazdirma
	// 	* readfile() fonksiyonuyla dosyalari "okuyabiliyor" ve yazdiriyoruz. sadece okumak icin farkli bir fonksiyon kullanacagiz.
	// 		or: readfile("dosyaadi.txt");
	
	// b. acma 
	// 	* fopen() fonksiyonuyla dosyalari acabiliyoruz. readfile() fonksiyonu bize sadece yazma izni veriyorken, fopen() ile cok daha fazla imkana sahip oluyoruz. fopen() fonksiyonu iki parametreden olusur. ilki dosya adi, ikincisi yazma izni. orn: fopen("liste.txt", "r")
	// 	* izinler ise su sekildedir;
	// 		r = sadece okuma 
	// 		w = sadece yazma // dosya icerigini siler 
	// 		a = sadece yazma icin acma // veriler korunur 
	// 		x = sadece yazma icin dosya yarat // dosya varsa, false doner 
	// 		r+ = hem okuma hem yazma  // dosya sonundan yazmaya baslar
	// 		w+ = hem okma hem yazma // icerigi siler ve yaratilmamissa dosyayi yaratir. 
	// 		a+ = hem okuma hem yazma // icerigi korur. dosya sonundan yazmaya baslar. 
	// 		x+ = hem okuma hem yazma icin dosya yaratir. 
	
	// c. okuma 
	// 	fread() fonksiyonu ile acilmis dosyayi okuyabiliriz. ilk parametre ile okunacak dosyayi, ikinci parametre ile kac byte okunacagini soyluyoruz.
	// 	fread(dosyaadi, dosyaboyutu) seklinde. 
	
	// d. kapatma 
	// 	fclose() fonksiyonunu, acilmis dosyayi kapatmak icin kullaniyoruz. 
	
	// e. ilk satir okuma 
	// 	fgets() fonksiyonu ile bir dosyanin ilk satirini okuyabiliriz. her cagrildiginda yeni satiri yazar.
	
	// f. son satir okuma 
	// 	feof() fonksiyonu ile dosyanin sonuna gelinip gelinmedigini test edebiliriz. 
	// 	orn. kullaim;
	// 		$myfile = fopen("xxxx.txt", "r") or die;
	// 		while (!feof($myfile)) {
	// 			echo fgets($myfile);
	// 			echo "<br>";
	// 		}
	// 		fclose($myfile);

	// 		// ciktisinde xxx.txt'yi son satirina kadar donguleyerek yazdirir. 
	
	// g. tek karakter okuma 
	// 	fgetc() fonksiyonu ile karakter karakter okuma yapabiliriz. tipki fgets() gibi calisir. kullanim mantigi yukaridaki feof() orneginin aynisidir. 

	// ////////////////////////////////////////////////////////////////////////////////////////////////

	// h. dosya yaratma/yazma
	// 	fopen() fonksiyonu ayni zamanda dosya yaratma icin de kullanilir. $dosyam = fopen("dosya.txt", "w") yazdigimiz denklemde, yalnizca yazma iznine sahip bir dosya.txt yaratacaktir. 
	
	// i. dosyaya yazma 
	// 	fwrite() fonksiyonuyla bir veriyi bir dosyaya yazabiliriz. bu fonksiyonda ilk parametre yazilacak hedef, ikinci parametre hedefe yazilacak olan yazinin kaynagidir. 
	// 		or. kullanim;
	// 			$myfile = fopen("newfile.txt", "w") or die("Unable to open file!"); // <--- VAR OLAN BIR DOSYAYI BU SEKILDE ACMAK ICERIGINI TAMAMEN TEMIZLER. YANI, BU SEKILDE IKINCI KEZ YAZAMAZSINIZ. YUKARIDA IZINLERI INCELEMEKTE FAYDA VAR.
	// 			$txt = "John Doe\n";
	// 			fwrite($myfile, $txt);
	// 			$txt = "Jane Doe\n";
	// 			fwrite($myfile, $txt);
	// 			fclose($myfile);

	// ////////////////////////////////////////////////////////////////////////////////////////////////				

	// j. dosya yukleme 
	// 	* oncelikle, php.ini dosyasinda file_uploads'in 'on' oldugundan emin olun. 
	// 	* dosya yuklemek icin bir html formu olusturmak zorundayiz. 
	?>
	<!-- 			<!DOCTYPE html>
			<html>
			<body> -->

			<!-- <form action="<?php //echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"> -->
				<!-- normalde action kismina islem dondurecek olan php dosyasi yazilir. fakat ben bu dosya uzerinde devam etmek istedigim icin bu kodu kullandim.  -->
				<!--  metod post olmak zorunda. ve enctype bolumuyle form verilerinin sunucuya giderken nasil kodlanacagini belirtiyoruz.  -->
			    <!-- yuklenecek dosyayi secin:
			    <input type="file" name="uploadDosyasi" id="uploadDosyasi">
			    <input type="submit" value="Upload Image" name="submit">
			</form>

			</body>
			</html> -->
	<?php
			// $uploadKlasoru = "/";
			// $uploadDosyasi = $uploadKlasoru . basename($_FILES["uploadDosyasi"]["name"]);
			// $uploadTamam = 1;
			// $gorselTipi = strtolower(pathinfo($uploadKlasoru,PATHINFO_EXTENSION));
			// // fake gorsel testi
			// if (isset($_POST["submit"])) {
			// 	$test = getimagesize($_FILES["uploadDosyasi"]["tmp_name"]);
			// 	if ($test !== false) {
			// 		echo "Dosya gorseldir - " . $test["mime"] . ".";
			// 		$uploadTamam = 1;
			// 	} else {
			// 		echo "Dosya gorsel degil.";
			// 		$uploadTamam = 0;
			// 	}
			// }
			// // dosya var mi test et 
			// if (file_exists($uploadDosyasi)) {
			// 	echo "Bu dosya zaten var.";
			// 	$uploadTamam = 0;
			// }
			// // dosya boyutu sinirlandir
			// if ($_FILES["uploadDosyasi"]["size"] > 500000) {
			// 	echo "Dosya boyutu cok fazla";
			// 	$uploadTamam = 0;
			// }
			// // dosya tipi filtreleme
			// if ($gorselTipi != "jpg" && $gorselTipi != "png" && $gorselTipi != "jpeg" && $gorselTipi != "gif") {
			// 	echo "Uzgunum, sadece jpeg, png, jpg ve gif dosyalari kabul ediyoruz.";
			// 	$uploadTamam = 0;
			// }

// 4. cerezler / cokie
	// * cerez bir kullaniciyi tanimlamak icin kullanilan, sistemin kullanicinin bilgisayarina gomdugu bir dosyadir. boylece kullanici siteye cereziyle birlikte girer. 
	// * cerez, setcookie() fonksiyonuyla yaratilir. parametreleri sirayla sunlardir: isim, deger, bitis tarihi, dizin, domain, guvenlik, httponly. yalnizca isim parametresi zorunludur.

	// a. cerez yaratma / geri alma
	// 	* asagidaki ornekle, "kullanici" adinda ve "Fersat" degerinde bir cookie olusturacagiz. cerez 30 gun sonra yasamini yitirecek (86400 * 30). "/" isareti, cerezin tum sitede gecerli oldugu anlamina gelir. 
	// 	* ardindan yarattigimiz cerezi cekecegiz. bunun icin isset fonksiyonu kullanacagiz. boylece bir cerezin olup olmadigini test edip, ona gore cekecegiz. 

	// 	$cerez_adi = "user";
	// 	$cerez_degeri = "Fersat";
	// 	setcookie($cerez_adi, $cerez_degeri, time() + (86400 * 30), "/"); // 86400 = 1 gun

	// 	if (!isset($_COOKIE[$cerez_adi])) {
	// 		echo "Cerez adi '" . $cerez_adi . "' set edilmedi. ";
	// 	} else {
	// 		echo "Cerez '" . $cerez_adi . "' tamam!";
	// 		echo "Degeri :" . $cerez_degeri;
	// 	}
	// * setcookie() fonksiyonu, html taglerinden once olmalidir. 
	// * bir cerezi degistirmek icin, tekrar setcookie() fonksiyonu ile ayni cerezin uzerine yazabilirsiniz.
	// * bir ceresi silmek icin, yine setcookie() fonksiyonuyla gecmiste biten bir cerez yaratiriz. 
	// 	ornek: setcookie("user", "", time() - 3600) // burada - diyerek gecmis zamana donmus olduk.
	// * cerezlerin aktif olup olmadigini test etmek icin, once setcookie() fonksiyonuyla bir cerez yaratip ardindan test ederiz. 
	// 	test or. 
	// 		if(count($_COOKIE) > 0) {
	// 		    echo "Cerezler aktif.";
	// 		} else {
	// 		    echo "Cerezler aktif degil.";
	// 		}

// 5. sessions 
	* sessionlar, veri depolamak icin kullanilirlar. boylece bircok sayfada ayni veriler kullanilabilir. 
	* cerezden farkli olarak, sessionlar kullanici bilgisayarinda depolanmazlar. 
	* verileri kalici olarak saklamak icin, session veya cerez yerine veritabani kulanilmalidir. 

	a. sesion baslatma 
		* session_start() fonksiyonu ile session baslatilir. 
		* session degiskenleri, $_SESSION global degiskeni ile tanimlanirlar. 



		https://www.w3schools.com/php/php_sessions.asp



























?>