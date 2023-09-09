
<?php

$server = "localhost";
$username = "root";
$password = "";


$dbname = "ayushman";


$conn = mysqli_connect($server, $username, $password,$dbname);


if(!$conn){
echo "connection failed: ".mysqli_connect_error();
}
else {
	echo "" ;
	
}

if(isset($_POST["cNAME"]))
{
$name = $_POST["cNAME"];
$mobile = $_POST["mo"];
$sql = "INSERT INTO customer(cname,mobile) VALUES ('$name','$mobile')";  
if(mysqli_query($conn, $sql)){  
 echo "";  ?>
 <script>
	
    alert("Record saved ");
    window.location="index.php";
  
 </script>
 <?php
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  

// $sql = "INSERT INTO customer(cname,mobile) VALUES('$name','$mobile')";
// $iquery = mysqli_query($conn,$sql);
// 		if($iquery!=0)
// 			echo "" ;
//         else
//         echo "error";

}
?>
