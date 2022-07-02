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
border-collapse:collapse;
margin-top: 600px;
margin-left: 122%;
}
table {
	width:129%;
}
h1{
float:left;
font-size:40px;
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
position:absolute;
transform:translate(-50%,-50%);
}
 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
td, th {
  border: 1px solid #ddd;
  padding: 8px;
}



</style>
</head>
<body ><h1 style="color:black;"> STUDENT DETAILS</h1>
<form action="" method="POST">
<input type="number" onblur="checkLength(this)" name="id" placeholder="Enter registration number " style="font-size:20px; font-style:cambria; font-weight:bold; margin:5px; width:11em; width:500px; position:absolute;top:35%;left:45%; transform:translate(-50%,-49%); " autocomplete="off" maxlength="3" REQUIRED />
<input type="submit" name="search"  style=" position:absolute; top:35%; left:68%; transform:translate(-50%,-50%);font-size:20px;font-style:cambria; font-weight:bold; margin:5px; width:5em;" value="Submit">
<a href="portal.html"> <input type="button" name="back"  style=" position:absolute; top:35%; left:78%; transform:translate(-50%,-50%); font-size:20px; font-style:cambria; font-weight:bold; margin:5px; width:5em;" value="Back"></a></button>
</form><div class="container">
<table style="color:black;">
<tr>
<th> Register Number </th>
<th> Student Name </th>
<th> Father Name </th>
<th> Mother Name </th>
<th> Email </th>
<th> Department</th>
</tr><br>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'project');
if(isset($_POST['search']))
{
$id=$_POST['id'];
$query="SELECT * FROM studentdetails WHERE rno='$id';";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==0){
echo "<script type='text/javascript'>alert(' ENTER VALID REGISTER NUMBER !!')</script>";
}
else{
while($row = mysqli_fetch_array($result))
{echo "<tr>";
echo "<td>".$row['rno']."</td>";
echo "<td>".$row['sname']."</td>";
echo "<td>".$row['fname']."</td>";
echo "<td>".$row['mname']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['dept']."</td>";
echo "</tr>";
}}}
?>
</table>
</div></body>
</html>

