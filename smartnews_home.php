<?php 
	$host 		= "localhost";
	$username	= "root";
	$password	= "";
	$dbname		= "berita";

	$link = mysqli_connect($host, $username, $password, $dbname)
	or die("Salah server, nama pengguna, atau passwordnya!"); 
	session_start();  
	$connect = $link;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Website Example</title>
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


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="home.php">ITB</a>

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link">ITB </a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Kategori
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="home.php">Gadget</a>
        <a class="dropdown-item" href="home.php">Fashion Pria</a>
        <a class="dropdown-item" href="home.php">Fashion Wanita</a>
        <a class="dropdown-item" href="home.php">Fashion Anak</a>
        <a class="dropdown-item" href="home.php">Olahraga</a>
        <a class="dropdown-item" href="home.php">Rumah Tangga</a>
      </div>
    </li>
  </ul>

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="orders.php">Order</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Mail/index.php">Message</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="cart.php">Cart</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="profile.php">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
  </ul>
</nav>
<?php 
  
?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h3 style="text-align:center;">Katalog Barang E-Toko</h3><br />  
               <div class="container" style="width:700px;">  
                <h3 style="text-align:center;"></h3><br />  
                <?php  
                $query = "SELECT * FROM berita ORDER BY tanggal_publish_berita ASC";  
                $result = mysqli_query($connect, $query);  
                $count = 0;
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  

                <?php 
                    $rowdetail[$count] = $row; 
                ?>

                <?php
                if($count % 3 == 0){
                    echo "<div class=\"row\" style=\"margin-bottom:20px\">";
                    $count_delimeter = $count + 2;
                }
                ?>
                <div class="col-sm-3">
                <div class="card text-center">
                   <div class="card-body d-flex flex-column justify-content-between" style="height:350px">
                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                    <div>
                      <img src="image/<?php echo $row["photo_berita"]; ?>"  style="max-width: 100%; height: 150px;" ><br />  
                      <h4 class="text-info"><?php echo $row["judul_barang"]; ?></h4>
                      <h4 class="text-danger">Rp <?php echo $row["harga"]; ?></h4>
                    </div>

                    <a href="pilihbarang.php?id_barang=<?php echo $row["id_barang"] ?>" class="btn btn-danger">Detail</a>
                  </div>
                </div>
                </div>                
                
                 <!-- <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; text-align: center;margin-bottom: 20px;width: 250px;margin-right: 0;" >
                    <img src="img/<?php echo $row["gambar"]; ?>"  style="max-width: 100%; height: 150px;" ><br />  
                        <h4 class="text-info"><?php echo $row["nama_barang"]; ?></h4>
                        <h4 class="text-danger">Rp <?php echo $row["harga"]; ?></h4>
                        <a href="pilihbarang.php?id_barang=<?php echo $row["id_barang"] ?>" class="btn btn-danger">Detail</a>                  
                </div>          -->
                <?php
  if($count == $count_delimeter){
    echo "</div>";
  }
?>
                  <div><?php $count++; ?></div>
                 
                <?php  
               
                     }  

                }  
                ?>  
                <div><?php  $_SESSION['var']=$rowdetail; ?></div> 
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>