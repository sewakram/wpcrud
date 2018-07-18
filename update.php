<?php
    //------insert.php------
     $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 


             $store=$_POST['store'];
             $time=$_POST['time'];
            $ref=uniqid();
            //echo "SELECT * FROM click_history where store='".$store."' AND date_time ='".$time."'";
            $result = mysqli_query($conn, "SELECT * FROM click_history where store='".$store."' AND date_time ='".$time."'");
            //$row = mysqli_fetch_array($result);
             $rowcount=mysqli_num_rows($result);
            if($rowcount==0){
              //print_r($row['store'].'!='.$store.'&&'.$row['date_time'].'!='.$time) ;exit;
             $sql= mysqli_query($conn,"INSERT INTO click_history(ref_id,store,date_time) VALUES('".$ref."','".$store."','".$time."')");
            }

 ?>
