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
height:50px;
margin-top: 90%;
margin-left: 112%;
border-collapse:collapse;
}
table {
	width:152%;
}
th {

    background-color: #04AA6D;
    color: white;
	}

.container{
width:500px;
transform:translate(-50%,-50%);
}
</style>
</head>
<center><h1>Results</h1></center>

<form action="" method="POST">
<input type="number" onblur="checkLength(this)" name="id" placeholder="Enter registered no. " style="font-size:20px; font-style:cambria; font-weight:bold; margin:5px; width:11em; width:500px; position:absolute;top:35%;left:45%; transform:translate(-50%,-49%); " autocomplete="off" maxlength="3" REQUIRED />
<input type="submit" name="search"  style=" position:absolute; top:35%; left:68%; transform:translate(-50%,-50%);font-size:20px;font-style:cambria; font-weight:bold; margin:5px; width:5em;" value="Submit">
<a href="portal.html"> <input type="button" name="back"  style=" position:absolute; top:35%; left:78%; transform:translate(-50%,-50%); font-size:20px; font-style:cambria; font-weight:bold; margin:5px; width:5em;" value="Back"></a></button>
</form>
<div class="container">
<table style="color:black;"><tr>
<th> Registration Number </th>
<th> Semester 1</th><th> Semester 2</th><th> Semester 3 </th><th>semester 4</th>
<th> semester 5</th><th>semester 6</th><th>Cumulative</th></tr><br>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'project');
if(isset($_POST['search'])){
$id=$_POST['id'];
$query="SELECT * FROM results WHERE rno='$id';";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==0){
echo "<script type='text/javascript'>alert(' ENTER VALID REGISTER NUMBER !!')</script>";
}
else{
while($row = mysqli_fetch_array($result))
{echo "<tr>";
echo "<td>".$row['rno']."</td>";echo"<td>".$row['sem1']."</td>";echo"<td>".$row['sem2']."</td>";echo "<td>".$row['sem3']."</td>";echo"<td>".$row['sem4']."</td>";echo"<td>".$row['sem5']."</td>";echo "<td>".$row['sem6']."</td>";echo"<td>".$row['total']."</td>";echo "</tr>";
}}}
?>
</table></div></body></html>
