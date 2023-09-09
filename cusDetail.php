<!document html>
<html leng="en">
<title>R.k. Ayushman portal</title>
<head>
    <meta charset="utf-8">
<meta name "viewport" content = "width = device-width,initial-scale = 1.0" >
<link rel = "stylesheet" href="indexstyle.css">
<link rel = "stylesheet" href="cusDetail.css">
<script>
	function sortTable(n)
	{
		var table, rows, switching, i, x, y, shouldSwitch, dir, switchCnt  = 0 ;
		table = document.getElementById("mytable");
		switching = true;
		dir = "asc";
		while(switching){
			switching = false ;
			rows = table.rows;
			for(i=1;i<(rows.length-1); i++){
				shouldSwitch = false;
				 x = rows[i].getElementsByTagName("TD")[n];
				y = rows[i + 1].getElementsByTagName("TD")[n];
				if(dir=="asc"){
					if(x.innerHTML.toLowerCase()>y.innerHTML.toLowerCase()){
						shouldSwitch = true;
						break;
					}
				}else if(dir = "desc"){
					if(x.innerHTML.toLowerCase()<y.innerHTML.toLowerCase()){
						shouldSwitch = true;
						break;
					}
				}
			} if(shouldSwitch){
				rows[i].parentNode.insertBefore(rows[i+1],rows[i]);
				switching = true;
				switchCnt++;
			}else{
				if(switchCnt == 0 && dir == "asc"){
					dir = "desc";
					switching = true;
				}
			}
		}
	}
 </script>
</head>
<body>
    <div class="hed">
    <div class="menu"><a href="index.php">Home</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="cusDetail.php">Customer Details</a></div>
    </div>
    <div class="search">
   <center> <form action="searchcos.php" method="GET">
    <input type = "text" placeholder = "Search...." class= "input" name = "namesearch"> 
    <input type = "submit" value = "Search..." name="custsearch" class= "searchbtn">
    
    </form></center>
    </div>
	<div class = "content" >
<table id = "mytable" style = "border-collapse:collapse;" class = "box">
<th onclick = "sortTable(0)">S.N. &#9662</th>
<th onclick = "sortTable(1)">Customer Name &#9662 </th>
<th onclick = "sortTable(2)">Mobile number &#9662 </th>
<th onclick = "sortTable(3)">Date &#9662 </th>
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
	$query = "SELECT * FROM customer";
	$qudis = mysqli_query($conn,$query);
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
	?>
<tbody>
</table>
 </div>
</body>
</html>