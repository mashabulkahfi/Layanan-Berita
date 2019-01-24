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
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-light">
    <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar12">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar12"> <a class="navbar-brand d-none d-md-block" href="#">
          <i class="fa d-inline fa-lg"></i>
          <b class="text-primary"> ITB</b>
        </a>
        <ul class="navbar-nav mx-auto"></ul>
        <ul class="navbar-nav">
          <li class="nav-item text-body"> <a class="nav-link text-primary" href="login.html">Log in</a> </li>
          <li class="nav-item text-dark"> <a class="nav-link text-dark" href="register.html">Register</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5">
    <div class="container">
      <div class="row">

        <?php 
        $query = "SELECT * FROM berita ORDER BY id_berita ASC";
        $result = mysqli_query($connect, $query);

        if(mysqli_num_rows($result)){
            while($row = mysqli_fetch_array($result)){

                echo "  <div class='col-md-3 flex-row d-flex'>
                            <div class='card'>"?> 
                                <img class='card-img-top' src="image/<?php echo $row['photo_berita'];?>" echo alt='akuaku' style="max-width: 100%; height: 150px;">
                                <?php echo "<div class='card-body'>
                                    <h4 class='card-title'>"; ?> <?php echo $row['judul_berita']; ?> <?php echo "</h4>
                                    <p class='card-text'>"; ?> <?php echo $row['konten_berita']; ?> <?php echo "</p> 
                                    <a href='#' class='btn btn-primary'>Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    ";
            }
        }
        ?>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous" style=""></script>
</body>

</html>