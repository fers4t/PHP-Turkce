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


// 8. veritabaninda sonuc filtreleme 
	// aslinda yukaridakinden pek bir farki yok. $sql degiskenini nasil degistirirsek ona gore cikti verecek zira. haliyle, filtrelemeyi dogrudan sql'de yapiyoruz ve php bize ona gore cikti veriyor. YALNIZCA $sql DEGISKENINI DEGISTIRMEK YETERLI OLUYOR.
	// ingilizce bilmenin onemli oldugu noktalardan biri burasi. 
	// zira veritabaninda veri filtrelerken "where" kullaniyoruz. where, bu baglam icinde "neredeyse orada" anlamina gelmekte. 
	// yani; SELECT id, adi, soyadi FROM Users WHERE soyadi='Ozcelik' dedigimizde, "nerede soyadi sutununun degeri Ozcelik ise oradan cek" demis oluyoruz

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

	$sql = "SELECT id, adi, soyadi FROM Users"; // <------ onemli olan burasi
	$sonuc = mysqli_query($conn, $sql);

	if (mysqli_num_rows($sonuc) > 0) {
		while ($row = mysqli_fetch_assoc($sonuc)){
			echo "Id: " .$row["id"]. "  //  " . "Adi ve Soyadi: <b>" . $row["adi"] . " " .$row["soyadi"] . "</b><br>";
		}
	} else {
		echo "Sonuc yok...";
	}










?>