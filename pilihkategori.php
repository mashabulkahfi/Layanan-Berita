<?php
//  Data for accessing database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "berita";

    

    $link = mysqli_connect($servername, $username, $password, $dbname);
	
	// Check connection
    if($link == false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    if ($_COOKIE['email'] == ""){
        header("Location: login.html");
    }
    
    $email = $_COOKIE['email'];
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .fakeimg {
        height: 200px;
        background: #aaa;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-sm-12">
            <h3 style ="text-align:center;" >Pilih Kategori Berita<br />
                <form action='pilihkategori1.php' method="POST">
                    <select name= "kategori">
                        <option value="Lomba">Lomba</option>
                        <option value="Seminar">Seminar</option>
                        <option value="Internship">Internship</option>
                        <option value="Beasiswa">Beasiswa</option>
                        <option value="Kegiatan/Acara">Acara/Kegiatan Mahasiswa</option>
                    </select>
                <input type=submit>
            </form>
        </div>
    </div>

    


</body>
</html>