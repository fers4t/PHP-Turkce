<?php 

// 1. variables / degiskenler 
	// a. fonksiyon disinda yazilan global degiskenler fonksiyon icinde kullanilabilir. fakat fonksiyon icinde kullanilan degiskenler disariya cagirilamazlar.
	// b. fonksiyon icindeki degiskene disaridan da ulasabilmek icin basina "global yazilir.
	// 	bkz.    function mytest() {
	// 		    global $x, $y;
	// 		    $y = $x + $y;
	// 			}
	// 			mytest();
	// 			echo $y;
	// c. hicbir zaman degistirmeyecegimiz degiskenler icin de "static" ifadesini kullaniyoruz. pi sayisi gibi degiskenler belirlemek istedigimizde, bu ifadenin degismesine gerek olmadigi icin, degismesine de izin vermemek icin "static $pi = 3,14" seklinde bir tanimlama yapabiliriz

// 2. ekrana yazdirma | echo / print 
	// echo ve print farki
		// echo ile print arasinda oldukca basit farklar var. bunlarin ilki, echo ile deger donduremiyorken, print ile dondurebiliyor olmamiz. ayni zamanda echo ile bircok parametreyi tek seferde yazdirabiliyorken, print ile yalnizca bir ifade yazdirabiliyoruz. yazdikca ve okudukca, nerede ve neden kullanildiklarini daha iyi anlayacagiz 
	
	// orn.
	// 	echo "hello world!<br>";

	// 	$yas = 1;
	// 	$isim = "can";

	// 	echo "bebegimiz" . $isim . "'in yasi henuz" . $yas;

	// 	ciktisi -> "bebegimiz can'in yasi henuz 1"
	// print'te de ayni sonucu verecektir. 

// 3. veri tipleri
	// 1. string
	// 	tirnak icine yazilir. metin ifade eder. or -> "merhaba"
	// 2. integer
	// 	sayilar. tirnaksiz kullanilir. or: $x = 10
	// 3. float 
	// 	kesirli sayilar. yine tirnaksiz. or: $x = 10.5
	// 4. boolean 
	// 	true ve false
	// 5. array 
	// 	diziler. or-> ["elma", "armut", "kiraz"];
	// 6. object 
	// 	siniflarin(class) objeleri. or. agac sinifinin cinar objesi.
	// 	class araba {  // <-- sinif 
	// 		function araba(){
	// 			$this->model = "ustu acilir"
	// 		}
	// 	}
	// 	$fiat = new araba(); //<-- object
	// 	echo $fiat->model; //<-- class'ta tanimlanana gore fiat modelini alir. yani "ustu acilir" 
	// 7. null 
	// 	degeri belirtilmemis degisken null olarak tanimlanir. bos degiskene null ciktisi verir ozetle

// 4. strings 
	// burada string fonksiyonlari inceleniyor

	// 1. strlen() --> string uzunlugunu verir
	// 	echo strlen("merhaba"); --> ciktisi = 7
	// 2. str_word_count() --> kelime sayisini verir
	// 	yukaridaki ornek ciktisi = 1
	// 3. strrev() --> string tersine cevirir
	// 	ciktisi = abahrem
	// 4. strpos("aranacak kaynak", "aranacak kelime") --> kaynakta aranan kelimenin nerede oldugunu bulur 
	// 	echo strpos("dunyaya hosgeldin", "hosgeldin")
	// 	ciktisi = 8
	// 5. str_replace(ara, degistir, kaynak)
	// 	echo str_replace("dunya", "fersat", "merhaba dunya")
	// 	ciktisi= "merhaba fersat"

// 5. numbers / sayilar 
	// php'de iki tip sayi vardir: float ve integer.
	// integer tam sayi, float kesirli sayidir.
	// --
	// bir verinin integer olup olmadigini test etmek icin php'de on tanimli olarak su fonksiyonlar vardir; 	
    
 //    1. integer 
	//     is_int()
	//     is_integer()
	//     is_long()
	//     orn. $x = 5985;
	// 		var_dump(is_int($x));
	// 2. float 
	// 	yukarida aciklamasini yaptim.
	// 	php'de yine bir verinin float olup olmadigini test etmek icin on tanimli olan fonksiyonlar su sekildedir;
	// 	is_float()
	// 	is_double()
	// 3. infinity 
	// 	bir sayisal verinin php_float_max(gosterilebilir en buyuk sayi)'dan buyuk olup olmadigini sorgular. bunun icin on tanimli fonksiyonlar su sekildedir:

	//     is_finite()
	//     is_infinite()
	// 4. nan
	// 	not a number (sayi degil) demektir. 
	// 	on tanimli fonksiyon: is_nan()
	// 5. sayisal stringler
	// 	tirnak icine alinmis ifadelerin, yani stringlerin sayisal olup olmadigini sorgular. fonksiyon: is_numeric()

// 6. sabitler
	// sabitler, adi ustunde, degiskenlerden farkli olarak, degistirilemez, sabit kalmak zorunda olan verilerdir. ne ise yaradigini, sagladigi kolayligi asagidaki ornekten gorebilirsiniz; 
	// define("pi", "3,1415926535897932384626433832795028841971693993751058209749445923078164062862089986280348253421170679821480865132823066470938446095505822317253594081284811174502841027019385211055596446229489549303819644288109756659334461284756482337867831652712019091456485669234603486104543266482133936072602491412737245870066063155881748815209209628292540917153643678925903600113305305488204665213841469519415116094330572703657595919530921861173819326117931051185480744623799627495673518857527248912279381830119491298336733624406566430860213949463952247371907021798609437027705392171762931767523846748184676694051320005681271452635608277857713427577896091736371787214684409012249534301465495853710507922796892589235420199561121290219608640344181598136297747713099605187072113499999983729780499510597317328160963185950244594553469083026425223082533446850352619311881710100031378387528865875332083814206171776691473035982534904287554687311595628638823537875937519577818577805321712268066130019278766111959092164201989");
	// echo pi;

// 7. operatorler
	// operatorler degerlerle islem/operasyon yapmaya olanak saglar.
	// operator cesitleri;
		// 1. aritmetik operatorler
		// 2. atama(assignment) operatorleri
		// 3. kiyaslama(comparison) operatorleri
		// 4. arttirma/azaltma(increment/decrement) operatorleri 
		// 5. mantiksal(logical) operatorler 
		// 6. string operatorleri 
		// 7. dizgi(array) operatorleri
		// 8. sartli atama (conditional assignment) operatorleri

	// ayrintilar 
		// 1. basit toplama islemleri / x 5, y 6 olsun. $x + $y = 11 ciktisi verir.
		
		// 2. atama(assignment) operatorleri
		// 	degiskenlere deger atamak icin kullanilir. bir degiskenin sonuna deger eklemekte vb. isimizi oldukca kolaylastirir. orneklerle daha iyi anlasilabilir
		// 	or;
			// $x = 10;
			// $y = 11;
			// $x += $y; // burada kafam surekli karisiyordu. zira 10 = 10+11 nasil olabilir diye dusunuyordum. oysa 10 = ... degil, yeni $x = 10+11 olarak dusunmemiz gerek. boylece hicbir sorun kalmaz. yani: yeni $x = eski $x (yani 10) + 11 // cevap 21
			// echo $x // 21 ciktisi verir. 
			// --
			// diger operatorler ise ozetle su sekilde. birinin acilimini yapacagim, digerlerinin mantigi ayni.
			// x += y // x = x + y
			// x -= y
			// x *= y
			// x /= y
			// x %= y

		// 3. kiyaslama(comparison) operatorleri
		// 	2 degiskeni ya da degeri kiyaslamak icin kullanilirlar. bunlari genelde if, foreach, while gibi yerlerde kullaniriz.
		// 	== // esit 
		// 	=== // tamamen ayni. ayni tipte ve ayni degerde. // or. string ve string, int ve int. float ve float ve 21 ve 21 gibi. ikisi ayni anda olmali.
		// 	!= // esit degil
		// 	<> // esit degil
		// 	!== // esit degil ya da ayni tipte(type) degil
		// 	> // buyuktur
		// 	< // kucuktur 
		// 	>= // buyuk ya da esittir
		// 	<= // kucuk ya da esittir 
		// 	<=> // orn. $x <=> y // x y'den kucuktur ya da buyuktur veya x, y'ye esittir
		
		// 4. arttirma/azaltma(increment/decrement) operatorleri 
		// 	degiskenin degerini arttirmak ya da azaltmak icin kullanilirlar.
		// 	++$x // pre-increment // degeri 1 arttirir ve sonra x dondurur
		// 	$x++ // post-increment // x dondurur ve sonra degeri 1 arttirir
		// 	--$x // pre-decrement
		// 	$x-- // post-decrement 
		// 	ornekle daha anlasilir olacak;
		// 	$i = 10;
		// 	$a = $i++;
		// 	// artik $a = 10, ve $i ise 11
		// 	$i = 10;
		// 	$a = ++$i;
		// 	// artik $a = 11, ve $i de 11

		// 5. mantiksal(logical) operatorler 
		// 	sartli ifadeleri kombine etmeye yararlar. matematik dersindeki klasik mantik konusunun aynisi.
		// 	operatorler su sekilde;
		// 	and // ve // $x ve $y ayni anda dogruysa 
		// 	or // veya 
		// 	xor // ikisi ayni anda dogru veya yanlissa
		// 	&& // ve
		// 	|| // veya 
		// 	! // degil // !$x yazdigimizda, $x yanlissa dogru doner. turkce dusunun: $x dogru degil, !(degil) $x(dogru degil) = dogru

		// 6. string operatorleri 
		// 	stringler icin hazirlanmis iki operator vardir. "." ve ".="
		// 	. // $x ve $y'yi baglamak icin kullanilir. $x = "hello"; $y = "world" ise $x . $y ciktisi "hello world" olur
		// 	.= // degiskenleri, atamalari baglamak icin kullanilir
		// 		or. 
		// 		$txt1 = "hello";
		// 		$txt2 = " world!";
		// 		$txt1 .= $txt2; // mevzu burada. bu $txt1 = $txt1 + $txt2 demek. cok ise yarayan bir sey bu. hafife almayin :)
		// 		echo $txt1;

		// 7. dizgi(array) operatorleri
		// 	dizgiler arasinda islem gerceklestirmek icin kullanilirlar.
		// 	operatorler su sekilde;
		// 		+ // iki dizgiyi birlestirmek icin kullanilir. $x + $y seklinde
		// 		== // $x == $y birbirine esitse "dogru" doner
		// 		=== // $x ve $y degiskenleri, veri tipi ve icerik olarak esitse dogru doner
		// 		!= // $x $y'ye esit degilse dogru doner
		// 		<> // $x $y'ye esit degilse dogru doner
		// 		!== // $x $y'ye tamamen esit degilse dogru doner. ayni degerde ve tipte olmalari gerek.

		// 8. sartli atama (conditional assignment) operatorleri
		 // todo

// 8. if & else & elseif
	// bazi islemlerin gerceklesmesini kosullara baglamak icin kullanilirlar.
	// yapisi su sekildedir: if (kosul) {calistirilacak kod};
	// else ise kosullara uymayan durumlarda calistirilacak kodu belirtmemizi saglar. or: if (kosul) {calistirilacak kod} else {kosula uymazsa calisacak kod}
	// elseif'i if'in yanlis oldugu durumlarda 2. 3. 4. ... kosullari yaratmak icin kullaniriz. ilk dogru degerde kod okumayi birakir ve dogru degerden sonraki kodlar okunmaz.
	// ornek yapalim; 
	// 	$t = 5;
	// 	if ($t < "10") {
	// 	    echo "have a good morning!";
	// 	} elseif ($t < "20") {
	// 	    echo "have a good day!";
	// 	} elseif ($t < "30") {
	// 	    echo "have a good daasfasfy!";
	// 	} 
	// 	else {
	// 	    echo "have a good night!";
	// 	}

// 9. switch case
	// switch case kullanirken acamimiz, degiskenin degerine gore calisabilecek kodlar yazmaktir. ornekle cok daha iyi anlasilacak.
	// $notu=68; 
	// switch ($notu){
	//    case 90<=$notu: // case'ler iki nokta ile biter
	//    echo "aa - aldınız"; // kodlardan sonra her zaman noktali virgul olur
	//    break; // her case "break" ile biter. break kodu ile kod sonlandirilir
	//    case 70<=$notu: 
	//    echo "cc - aldınız"; break;
	//    case 65<=$notu: 
	//    echo "dc - aldınız"; break;  //ekran ciktisi bu olacaktir. 
	//    case 50<=$notu:
	//    echo "df - aldınız"; break;
	//    case 10<=$notu:
	//    echo "ff - aldınız"; break;
	//    default: echo "başarısız"; // hicbiri olmazsa calisacak kod "default:" ile yazilir.
	// }

// 10. loops / donguler // for, while, foreach
	// bazen bazi kodlarin tekrar ve tekrar calismasini isteriz. bu durumda, kodu tekrar tekrar yazmak yerine loop yapariz.
	// php'de asagidaki loop/dongu tipleri vardir. bu bolum orneklerle anlasilmaya daha cok muhtactir;
	// while // belirlenen kosul dogruysa, bir kod blogu bastan sona calisir
	// do...while // dongu kosul gecerli olsun ya da olmasin bir kez calisir, en son kosulu kontrol eder. ornekle daha iyi anlasilabilir.
	// for // donguye uc parametre girilir: birinci parametrede degiskeni tanimlariz, sonra kosul belirlenir, sonra da her dongude ne olacagi yazilir 
	// foreach // array, dizgi dongusu de denebilir. dizi icindeki eleman sayisi kadar doner. her bir elemanla islem yapmamizi saglar.

	// while ornegi;
	// $x = 0;
	// while($x <= 100) {
	//     echo "Sayi: $x <br>";
	//     $x+=10;
	// } 

	// do..while ornegi;
	// $x = 1;
	// do {
	//     echo "Sayi: $x <br>";
	//     $x++;
	// } while ($x <= 5);

	// for ornegi;
	// for ($x = 0; $x <= 10; $x++) {
 //    echo "Sayi: $x <br>";
	// } 

	// foreach ornegi;
	// $renkler = array("kirmizi", "yesil", "mavi", "sari");
	// foreach ($renkler as $renk) {
	//   echo "renk: $renk <br>";
	// }

// 11. fonksiyonlar / functions
	// php'de dahili olarak 1000'den fazla fonksiyon bulunmaktadir ve elbette ki biz de kendi fonksiyonlarimizi yapabiliyoruz.
	// - fonksiyonlar sayfa yuklendiginde kendilinden calismazlar.
	// - bir fonksiyon ancak cagrildiginda calisir.
	// - fonksiyonlar, bir kod blogunun tek satirda ve defalarca calistirilabilmesini saglar.
	// - fonksiyonlar alt tire ya da harf ile baslamak zorundadir.
	// - fonksiyon adlar case sensitive degildir.

	// syntax su sekilde;
	// function fonksiyonAdi() {
	//    	calistirilacak kod;
	// } 

	// orn. fonksiyon;
	// function mesajYaz() {
	//     echo "Hello world!";
	// }
	// mesajYaz(); // fonksiyonu cagir

	// 11. a fonksiyon argumanlari / function arguments 
	// 	fonsksiyonlarin saginda bulunan parantezlerin icine diledigimiz kadar arguman ekleyebiliriz. 
		
	// 	orn. 
		// function aileAdi($adi){
		// 	echo "$adi Potter";
		// } // fonksiyonu hazirladik.

		// aileAdi("Fersat");
		// aileAdi("Harry");
		// aileAdi("Snape"); 
		// // Fersat Potter
		// // Harry Potter
		// // Snape Potter      	olarak cikti verir 

		// orn. 

		// function albumYili($albumadi, $albumyili){ // ihtiyacimiza gore iki arguman olusturduk
		// 	echo "$albumadi albumu, $albumyili yilinda cikmistir";
		// }
		// albumYili("Fersat", "1252");
		// albumYili("Dumbledore", "2364");
		// // Fersat albumu, 1252 yilinda cikmistir
		// // Dumbledore albumu, 2364 yilinda cikmistir  		seklinde cikti verir 

		# strict
			// TODO
		
		# return
			// TODO

?>