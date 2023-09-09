<!document html>
<html leng="en">
<title>R.k. Ayushman portal</title>
<head>
    <meta charset="utf-8">
<meta name "viewport" content = "width = device-width,initial-scale = 1.0" >
<link rel = "stylesheet" href="indexstyle.css">
<link rel = "stylesheet" href="cusDetail.css">

</head>
<body>
    <div class="hed">
    <div class="menu"><a href="index.php">Home</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="cusDetail.php">Customer Details</a></div>
    </div>
    <div class="search">
   <center> <form action="searchcos.php" method="post">
    <input type = "text" placeholder = "Search...." class= "input" name = "namesearch"> 
    <input type = "submit" value = "Search..." name="custsearch" class= "searchbtn">
    
    </form></center>
    </div>
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
 if(isset($_GET["custsearch"]))
 {
  $cosname = $_GET["namesearch"];
  $query = "SELECT * FROM customer where cname='$cosname'" ;
	$qudis = mysqli_query($conn,$query);
?>
<div class = "content" >
<table id = "mytable" style = "border-collapse:collapse;" class = "box">
<th >S.N. &#9662</th>
<th>Customer Name &#9662 </th>
<th>Mobile number &#9662 </th>
<th>Date &#9662 </th>
<?php
	while($result = mysqli_fetch_array($qudis))
	{
 ?>
 <tr>
 <td><?php echo $result['sn'];?></td>
 <td><?php echo $result['cname'];?></td>
 <td><?php echo $result['mobile'];?></td>
 <td><?php echo $result['date'];?></td>
 </tr>
	<?php } 
 }
 else 
  echo "<br><br><center><font style = 'font-size: 20px;
  font-family: cambira;color:red;'>Record not found<br>Click here for <a href='cusDetail.php' style ='color :blue;'>Customer Details</a></font></center>";
	?>
<tbody>
</table>
</body>
</html>