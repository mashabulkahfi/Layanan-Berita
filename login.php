<?php


//  Data for accessing database
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "berita";

	$email = $_POST['email'];
	$pwd = $_POST['password'];

try {
    $conn = new mysqli($host, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$stmt = $conn->prepare("SELECT * FROM user WHERE email ='$email'");
    //$stmt->execute();
    
    $sql =  "SELECT * 
            FROM user 
            WHERE email = '$email'";
        
    $result1 = $conn->query($sql);

    $row = $result1->fetch_assoc();
    $nama = $row['nama'];
    

    //$item = $stmt->fetchAll();
	
    if (count($row) == 0){
        echo count($row);
        header("Location: login.html");
        die();
    }else{ 
        $cookie_name = "email";
		$cookie_value = $email;
        setcookie($cookie_name, $cookie_value, time()+ 86400, "/");
        //echo ($row['pilihan_kategori']);
        if ($row['pilihan_kategori']== ""){
            header("Location: pilihkategori.php");
			die();
        }
        else{
            header("Location: home_success.php");
			die();
        }
		/*if ($item['pilihan_kategori'] == ""){
			header("Location: pilihkategori.php");
			die();
		}
		else {
			header("Location: home_success.php");
			die();
		}*/
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;

?>
