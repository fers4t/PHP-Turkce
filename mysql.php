<?php 
// 
// 
// 
//		1 - GIRIS 	 
// 
// 
////////////////////////////

// // 1. mysqli oop
// 	$servername = "localhost";
// 	$username = "root";
// 	$password = "";

// 	// baglan 
// 	$connect = new mysqli($servername, $username, $password);

// 	// test et 
// 	if ($connect->connect_error){
// 		die("Connection failed:" . $connect->connect_error);
// 	}

// 	echo "Girdik dayi."

// // 2. mysqli procedural
// 	$servername = "localhost";
// 	$username = "root";
// 	$password = "";

// 	// baglan 
// 	$conn = mysqli_connect($servername, $username, $password);

// 	// test et 	
// 	if (!$conn) {
// 		die("Olmadi yar: " . mysqli_connect_error());
// 	}

// 	echo "Icerdeyiz kaptan!"

// // 3. PDO
// 	$servername = "localhost";
// 	$username = "root";
// 	$password = "";

// try {
// 	$conn = new PDO("mysql:host=$servername;dbname=linkbioda", $username,$password);
// 	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 	echo "Connected successfully";
// } catch (PDOException $e) {
// 	echo "Connection failed: " . $e->getMessage();
// }

///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////

// MYSQLI PROCEDURAL ILE DEVAM EDIYORUM 

///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
// 2. veritabani olusturma 
	// $servername = "localhost";
	// $username = "root";
	// $password = "";

	// // baglan 
	// $conn = mysqli_connect($servername, $username, $password);

	// // test et 	
	// if (!$conn) {
	// 	die("Olmadi yar: " . mysqli_connect_error());
	// }

	// // yarat
	// $sql = "CREATE DATABASE learn";
	// if (mysqli_query($conn, $sql)) {
	// 	echo "Tamamdir bro";
	// }else {
	// 	echo "Olmadi yar";
	// }

	// // kapat
	// mysqli_close($conn);

// 3. tablo olusturma 
	// // We will create a table named "MyGuests", with five columns: "id", "firstname", "lastname", "email" and "reg_date":
	// // CREATE TABLE MyGuests (
	// // id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	// // firstname VARCHAR(30) NOT NULL,
	// // lastname VARCHAR(30) NOT NULL,
	// // email VARCHAR(50),
	// // reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	// // ) 

	// // burada sadece $sql degiskenini degistirmemiz yetiyor. zira sql
	// // kodlari oraya yaziliyor

	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $db = "learn"; // <------ yarattigimiz tabloyu yaziyoruz 

	// // baglan 
	// $conn = mysqli_connect($servername, $username, $password, $db);// <------ yarattigimiz tabloyu yaziyoruz 

	// // test et 	
	// if (!$conn) {
	// 	die("Olmadi yar: " . mysqli_connect_error());
	// }

	// // yarat
	// $sql = "CREATE TABLE Users (
	// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	// adi VARCHAR(30) NOT NULL,
	// soyadi VARCHAR(30) NOT NULL,
	// email VARCHAR(50),
	// kayit_Tarihi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	// )";
	// if (mysqli_query($conn, $sql)) {
	// 	echo "Tamamdir bro";
	// }else {
	// 	echo "Olmadi yar";
	// }

// 4. tabloya veri ekleme 

	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $db = "learn"; // <------ yarattigimiz tabloyu yaziyoruz 

	// // baglan 
	// $conn = mysqli_connect($servername, $username, $password, $db);// <------ yarattigimiz tabloyu yaziyoruz 

	// // test et 	
	// if (!$conn) {
	// 	die("Olmadi yar: " . mysqli_connect_error());
	// }

	// // yarat
	
	// $sql = "INSERT INTO Users (adi, soyadi, email)
	// VALUES ('Fersat', 'The Gray', 'fertagram@gmail.com')";
	// if (mysqli_query($conn, $sql)) {
	// 	echo "Tamamdir bro";
	// 	$last_id = $conn->insert_id; // <----- son eklenen id'i tanimlama
	// 	echo "Son eklenen id:" .$last_id; // ------ ve ekrana cekme
	// }else {
	// 	echo "Olmadi yar";
	// }

// 5. coklu veri ekleme
	// burada mysqli_query'i mysqli_multi_query ile degisiyoruz. 
	// ve sql'de alt alta coklu veri ekliyoruz

	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $db = "learn"; // <------ yarattigimiz tabloyu yaziyoruz 

	// // baglan 
	// $conn = mysqli_connect($servername, $username, $password, $db);// <------ yarattigimiz tabloyu yaziyoruz 

	// // test et 	
	// if (!$conn) {
	// 	die("Olmadi yar: " . mysqli_connect_error());
	// }

	// // yarat
	
	// $sql = "INSERT INTO Users (adi, soyadi, email)
	// VALUES ('Iron', 'Maiden', 'iron@maiden.com');";
	// $sql .= "INSERT INTO Users (adi, soyadi, email)
	// VALUES ('Massaka', 'Diablo', 'massaka@diablo.com');";
	// $sql .= "INSERT INTO Users (adi, soyadi, email)
	// VALUES ('Ceza', 'Ayben', 'ceza@ayben.com')";
	// if (mysqli_multi_query($conn, $sql)) {
	// 	echo "Tamamdir bro";
	// }else {
	// 	echo "Olmadi yar";
	// }

// 6. hazir statements/tablolar 
	// // prepared statements, veritabanina veri eklerken surekli ayni islemleri yapmamiz gerektiginde hizlanmamizi saglar. prepared statements ile bir sablon olustururuz ve daha sonra bu sablona uygun verileri bu statement araciligiyla hizlica ekleriz 


	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $db = "learn";

	// // baglan 
	// $conn = mysqli_connect($servername, $username, $password, $db);

	// // test et 	
	// if (!$conn) {
	// 	die("Olmadi yar: " . mysqli_connect_error());
	// }

	// // prepare ediyoruz / taslak/sablon hazirliyoruz
	// $statement = $conn->prepare("INSERT INTO Users (adi, soyadi, email)
	// 	VALUES (?, ?, ?)");
	// $statement->bind_param("sss", $adi, $soyadi, $email);

	// // simdi hizlica veri girebiliriz
	// $adi = "Fersat";
	// $soyadi = "Ozcelik";
	// $email = "fertagram@gmail.com";
	// $statement->execute();

	// $adi = "Thiery";
	// $soyadi = "Henry";
	// $email = "henry@arsenal.com";
	// $statement->execute();

	// echo "Gayet de calisti ya.";

	// // kapatalim....

	// $statement->close();
	// $conn->close();

// 7. veritabanindan veri cekme 
	// // SELECT ifadesini bir ya da bircok tabloda veri secmek icin kullaniriz
	// // SELECT column_name(s) FROM table_name

	// // Ya da * isareti ile bir ya da bircok tablodaki tum verileri secebiliriz
	// // SELECT * FROM table_name 

	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $db = "learn";

	// // baglan 
	// $conn = mysqli_connect($servername, $username, $password, $db);

	// // test et 	
	// if (!$conn) {
	// 	die("Olmadi yar: " . mysqli_connect_error());
	// }

	// $sql = "SELECT id, adi, soyadi FROM Users"; // <------ onemli olan burasi
	// $sonuc = mysqli_query($conn, $sql);

	// if (mysqli_num_rows($sonuc) > 0) { // <------- burada 
	// 	while ($row = mysqli_fetch_assoc($sonuc)){ // <------ ve burada kullanilabilecek kodlar icin ekstra arastirma yapilirsa daha faydali olur sanirim
	// 		echo "Id: " .$row["id"]. "  //  " . "Adi ve Soyadi: <b>" . $row["adi"] . " " .$row["soyadi"] . "</b><br>";
	// 	}
	// } else {
	// 	echo "Sonuc yok...";
	// }


// 8. veritabaninda sonuc filtreleme/arama
	// // aslinda yukaridakinden pek bir farki yok. $sql degiskenini nasil degistirirsek ona gore cikti verecek zira. haliyle, filtrelemeyi dogrudan sql'de yapiyoruz ve php bize ona gore cikti veriyor. YALNIZCA $sql DEGISKENINI DEGISTIRMEK YETERLI OLUYOR.
	// // ingilizce bilmenin onemli oldugu noktalardan biri burasi. 
	// // zira veritabaninda veri filtrelerken "where" kullaniyoruz. where, bu baglam icinde "neredeyse orada" anlamina gelmekte. 
	// // yani; SELECT id, adi, soyadi FROM Users WHERE soyadi='Ozcelik' dedigimizde, "nerede soyadi sutununun degeri Ozcelik ise oradan cek" demis oluyoruz
	// // ornek sql kodu :  SELECT column_name(s) FROM table_name WHERE column_name operator value  

	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $db = "learn";

	// // baglan 
	// $conn = mysqli_connect($servername, $username, $password, $db);

	// // test et 	
	// if (!$conn) {
	// 	die("Olmadi yar: " . mysqli_connect_error());
	// }

	// $sql = "SELECT id, adi, soyadi FROM Users WHERE adi='Iron'"; // <------ onemli olan burasi
	// $sonuc = mysqli_query($conn, $sql);

	// if (mysqli_num_rows($sonuc) > 0) {
	// 	while ($row = mysqli_fetch_assoc($sonuc)){
	// 		echo "Id: " .$row["id"]. "  //  " . "Adi ve Soyadi: <b>" . $row["adi"] . " " .$row["soyadi"] . "</b><br>";
	// 	}
	// } else {
	// 	echo "Sonuc yok...";
	// }

	// // ciktisi soyle olur
	// 	// Id: 6 // Adi ve Soyadi: Iron Maiden
	// 	// Id: 9 // Adi ve Soyadi: Iron Maiden 


// 9. veri siralama / order by
	// // verileri artan-azalan(ascending-descending) sekilde siralamak icin kullaniyoruz 
	// // ornek kod -> SELECT column_name(s) FROM table_name ORDER BY column_name(s) ASC|DESC 

	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $db = "learn";

	// // baglan 
	// $conn = mysqli_connect($servername, $username, $password, $db);

	// // test et 	
	// if (!$conn) {
	// 	die("Olmadi yar: " . mysqli_connect_error());
	// }	

	// $sql = "SELECT id, adi, soyadi FROM Users ORDER BY adi "; // <------ DESC veya ASC kullanarak siralama yonunu degistirebiliyoruz. kullanmak zorunda da degiliz.
	// // ayrica burada ek olarak "WHERE adi='Iron' seklinde bir filtreleme yaparsak, adi Iron olan satirlar arasinda siralama yapacaktir 
	// // orn. kod -> SELECT id, adi, soyadi FROM Users WHERE adi='Fersat' ORDER BY adi 
	// $sonuc = mysqli_query($conn, $sql);

	// if (mysqli_num_rows($sonuc) > 0) {
	// 	while ($row = mysqli_fetch_assoc($sonuc)){
	// 		echo "Id: " .$row["id"]. "  //  " . "Adi ve Soyadi: <b>" . $row["adi"] . " " .$row["soyadi"] . "</b><br>";
	// 	}
	// } else {
	// 	echo "Sonuc yok...";
	// }

	// // ciktisi soyle olur 
	// // Id: 5 // Adi ve Soyadi: Fersat The Gray
	// // Id: 12 // Adi ve Soyadi: Fersat Ozcelik

// 10. veri silme / delete data 
	// // gorundugu uzere artik sadece $sql degiskeniyle ilgileniyoruz.
	// // orn. veri silme kodu -> DELETE FROM Users WHERE id=3
	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $db = "learn";

	// // baglan 
	// $conn = mysqli_connect($servername, $username, $password, $db);

	// // test et 	
	// if (!$conn) {
	// 	die("Olmadi yar: " . mysqli_connect_error());
	// }	

	// $sql = "DELETE FROM Users WHERE id=3"; 
	// // burada $sonuc degiskenine gerek yok. zira sonuc yok. siliyoruz :) ancak basari ciktisi verebiliriz.

	// if (mysqli_query($conn, $sql)) {
	// 	echo "Silindi";
	// }else {
	// 	echo "Su kayit silinemedi:" / mysqli_error($conn);
	// }

// 11. veri guncelleme / update data 
	// // burada UPDATE ifadesini/statement kullaniyoruz. WHERE statementi ile de hangi verilerin degistirilecegini belirtiyoruz. 
	// // WHERE KULLANMAZSAK TUM VERILER DEGISIR.
	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $db = "learn";

	// // baglan 
	// $conn = mysqli_connect($servername, $username, $password, $db);

	// // test et 	
	// if (!$conn) {
	// 	die("Olmadi yar: " . mysqli_connect_error());
	// }	

	// $sql = "UPDATE Users SET soyadi='Ozcelik' WHERE id=2"; // <--- Turkcesi: Users tablosunda, id'i 2 olan satirda soyadi kolonunu Ozcelik olarak degistir. Burada WHERE ile oynayarak toplu degisiklikler de yapabiliriz 

	// if (mysqli_query($conn, $sql)) {
	// 	echo "Degisti";
	// }else {
	// 	echo "Su kayit degismedi:" / mysqli_error($conn);
	// }

// 12. sql ciktisini sinirlama / limit data 
	// LIMIT ve OFFSET kavramlari burada karsimiza cikiyor.
	// LIMIT ile kac veri cikmasini istedigimizi belirtiyoruz.
	// OFFSET ile nereden baslamasi gerektigini belirtiyoruz. Or. OFFSET 15, 16. veriden basla demektir.
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "learn";

	// baglan 
	$conn = mysqli_connect($servername, $username, $password, $db);

	// test et 	
	if (!$conn) {
		die("Olmadi yar: " . mysqli_connect_error());
	}	

	$sql = "SELECT * FROM Users LIMIT 3"; // <--- Turkcesi: Users tablosunda, id'i 2 olan satirda soyadi kolonunu Ozcelik olarak degistir. Burada WHERE ile oynayarak toplu degisiklikler de yapabiliriz 

	$sonuc = mysqli_query($conn, $sql); // <-- ve tabi ki verileri goruntulememiz gerek. bunun icin buradan asagidaki kodlari yaziyoruz. yukarisi ile kiyaslayarak daha iyi anlayabilirsiniz.

	if (mysqli_num_rows($sonuc) > 0) {
		while ($row = mysqli_fetch_assoc($sonuc)){
			echo "Id: " .$row["id"]. "  //  " . "Adi ve Soyadi: <b>" . $row["adi"] . " " .$row["soyadi"] . "</b><br>";
		}
	} else {
		echo "Sonuc yok...";
	}





?>