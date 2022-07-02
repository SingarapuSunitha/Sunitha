<html>
<head>
<title> student details</title>
<style>
body
{
background-image:url('p2.jpg');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:100% 100%;
}
table,th,td{
border:1px solid black;
border-collapse:collapse;
width:1134px;
height:50px;
margin-top: 110%;
margin-left:79%;
}
h1{
float:left
position:absolute;
top:10%;
left:50%;
transform:translate(-50%,-50%);
}
h2{
width:500px;
transform:translate(-50%,-50%);
}
.container{
width:500px;
transform:translate(-50%,-50%);
}
th {

    background-color: #04AA6D;
    color: white;
	}
center {
	font-size:50px;
}
</style>
</head>
<body>
<center>Attendance</center>
<form action="" method="POST">
<input type="number" onblur="checkLength(this)" name="id" placeholder="Enter registered no. " style="font-size:20px; font-style:cambria; font-weight:bold; margin:5px; width:11em; width:500px; position:absolute;top:35%;left:45%; transform:translate(-50%,-49%); " autocomplete="off" maxlength="3" REQUIRED />
<input type="submit" name="search"  style=" position:absolute; top:35%; left:68%; transform:translate(-50%,-50%);font-size:20px;font-style:cambria; font-weight:bold; margin:5px; width:5em;" value="Submit">
<a href="portal.html"> <input type="button" name="back"  style=" position:absolute; top:35%; left:78%; transform:translate(-50%,-50%); font-size:20px; font-style:cambria; font-weight:bold; margin:5px; width:5em;" value="Back"></a></button>
</form>
<div class="container">
<table style="color:black;">
<tr>
<th> Registration Number </th>
<th>Semester 1</th><th>Semester 2</th><th>Semester 3</th><th>Semester 4</th><th>Semester 5</th><th>Semester 6</th><th>Total</th></tr><br>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'project');
if(isset($_POST['search'])){
$id=$_POST['id'];
$query="SELECT * FROM attendance WHERE rno='$id';";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==0){
echo "<script type='text/javascript'>alert(' ENTER VALID REGISTER NUMBER !!')</script>";
}
else{
while($row = mysqli_fetch_array($result))
{echo "<tr>";
echo "<td>".$row['rno']."</td>";echo "<td>".$row['y1s1']."</td>";echo "<td>".$row['y1s2']."</td>";
echo "<td>".$row['y2s1']."</td>";echo "<td>".$row['y2s2']."</td>";echo "<td>".$row['y3s1']."</td>";
echo "<td>".$row['y3s2']."</td>";echo "<td>".$row['total']."</td>";echo "</tr>";
}}}
?>
</table>
</div></body></html>
