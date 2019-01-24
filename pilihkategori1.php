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
      
        $kat=""; 
        $kat=$_POST['kategori'];

        $sql =  "UPDATE user
                SET pilihan_kategori='$kat'
                WHERE email='$email'";

        if(mysqli_query($link,$sql)){
            header("Location: home_success.php");
            die();
            //echo "Records were updated successfully.";
           
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    
        // Close connection
        mysqli_close($link);
    ?>
    
    <!-- <div>
        <button onclick="location.href='home_success.php'" class="btn">
            <i class="fa fa-arrow-left" aria-hidden="true">
            </i>
        </button>
    </div> -->