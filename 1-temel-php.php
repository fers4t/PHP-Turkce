<?php 

// 1. Variables / Degiskenler 
	// a. fonksiyon disinda yazilan global degiskenler fonksiyon icinde kullanilabilir. fakat fonksiyon icinde kullanilan degiskenler disariya cagirilamazlar.
	// b. fonksiyon icindeki degiskene disaridan da ulasabilmek icin basina "global yazilir.
	// 	bkz.    function myTest() {
	// 		    global $x, $y;
	// 		    $y = $x + $y;
	// 			}
	// 			myTest();
	// 			echo $y;
	// c. hicbir zaman degistirmeyecegimiz degiskenler icin de "static" ifadesini kullaniyoruz. pi sayisi gibi degiskenler belirlemek istedigimizde, bu ifadenin degismesine gerek olmadigi icin, degismesine de izin vermemek icin "static $pi = 3,14" seklinde bir tanimlama yapabiliriz

// 2. Ekrana Yazdirma | Echo / Print 
	// echo ve print farki
		// echo ile print arasinda oldukca basit farklar var. bunlarin ilki, echo ile deger donduremiyorken, print ile dondurebiliyor olmamiz. ayni zamanda echo ile bircok parametreyi tek seferde yazdirabiliyorken, print ile yalnizca bir ifade yazdirabiliyoruz. yazdikca ve okudukca, nerede ve neden kullanildiklarini daha iyi anlayacagiz 
	
	// orn.
	// 	echo "Hello world!<br>";

	// 	$yas = 1;
	// 	$isim = "Can";

	// 	echo "Bebegimiz" . $isim . "'in yasi henuz" . $yas;

	// 	ciktisi -> "Bebegimiz Can'in yasi henuz 1"
	// print'te de ayni sonucu verecektir. 

// 3. Veri Tipleri
	1. string
		tirnak icine yazilir. metin ifade eder. or -> "Merhaba"
	2. integer
		sayilar. tirnaksiz kullanilir. or: $x = 10
	3. float 
		kesirli sayilar. yine tirnaksiz. or: $x = 10.5
	4. boolean 
		true ve false
	5. array 
		diziler. or-> ["elma", "armut", "kiraz"];
	6. object 
		siniflarin(class) objeleri. or. agac sinifinin cinar objesi.

		class Araba {  // <-- sinif 
			function Araba(){
				$this->model = "ustu acilir"
			}
		}

		$fiat = new Car(); //<-- object
		echo $fiat->model; //<-- class'ta tanimlanana gore fiat modelini alir. yani "ustu acilir" 
	7. null 
		degeri belirtilmemis degisken null olarak tanimlanir. bos degiskene null ciktisi verir ozetle

// 4. Strings 
	burada string fonksiyonlari inceleniyor

	1. strlen() --> string uzunlugunu verir
		echo strlen("Merhaba"); --> ciktisi = 7
	2. str_word_count() --> kelime sayisini verir
		yukaridaki ornek ciktisi = 1
	3. strrev() --> string tersine cevirir
		ciktisi = abahrem
	4. strpos("aranacak kaynak", "aranacak kelime") --> kaynakta aranan kelimenin nerede oldugunu bulur 
		echo strpos("Dunyaya hosgeldin", "hosgeldin")
		ciktisi = 8
	5. str_replace(ara, degistir, kaynak)
		echo str_replace("Dunya", "Fersat", "Merhaba Dunya")
		ciktisi= "Merhaba Fersat"

// 5. Numbers / Sayilar 
	


?>