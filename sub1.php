<?php
 $connect=mysqli_connect("localhost","root"," ", "energyaudit") or die("Connection Failed");
   
   $sql = "insert into substation(scode,area,power,officer) values ('$scode' , '$area' , '$power', '$officer')";
      
 
   $retval = mysqli_query( $sql, $conn );
   
   if(!$retval )
    {
      die('Could not enter data: '  mysqli_error());
   }
   else{
   
   echo "Entered data successfully\n";
}
   
   mysqli_close($connect);
?>






