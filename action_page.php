<?php
    $uname=$_POST['uname'];
    $psw=$_POST['psw'];
    echo"uname";
    
   $conn = new mysqli('localhost','root','','energyaudit');
    if($conn->connect_error)
    {
      die("connection failed :" .mysqli_connect_error();

    }
      else
      {
        $stmt = $conn->prepare("Insert into login(uname,psw)values(?,?)");
        $stmt->bind_param("si",$uname,$psw);
        $stmt->execute();
        echo "sucessfull";
        $stmt->close();
        $conn->close();

      }
    
    ?>
    

    