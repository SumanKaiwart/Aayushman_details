<!document html>
<html leng="en">
<title>R.k. Ayushman portal</title>
<head>
    <meta charset="utf-8">
<meta name "viewport" content = "width = device-width,initial-scale = 1.0" >
<link rel = "stylesheet" href="indexstyle.css">
<script type = "text/javascript">
  
 function cancle(){
    document.frm.cNAME.value = " ";
    document.frm.mo.value = " ";
 }
</script>
</head>
<?php include "detail.php"?>
<body>

    <div class="hed">
<div class="menu"><a href="index.php">Home</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="cusDetail.php">Customer Details</a></div>
    </div>
   <span > <?php echo "Today is :".date("d/m/Y")."<br>";?></span>
   
<div class = "formbox">
   <center> <img src="index.jpg" class="pic"></center>
  
<form name="frm" action="<?php $_PHP_SELF ?>" method="post">
<div class="input">
<input type = "text" placeholder ="Enter Customer Name" name ="cNAME"  onfocus= "checkname()" required ><br><p id="error"></p></div>
<div class="input">
<input type = "number" placeholder ="Enter Customer Mobile no." name = "mo" required ></div>
<div class = "btn"><center><input type ="submit" value = "save"  class = "submit" name ="submitbtn">
<input type ="button" value = "cancel"  class = "cancle" name = "canclebtn" onclick="cancle()"></center></div>
</form>
</div>
</body>
</html>