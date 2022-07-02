<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Login</title>
<style>

body
{
background-image:url('p2.jpg');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:100% 100%;
}
input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}
input[type=number],input[type=password] {
  width: 90%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: white;
}
.container {
    position: absolute;
    margin-left: 400px;
    max-width: 437px;
    padding: 29px;
    border-radius: 20px;
    margin-top: 90px;
    font-size: 18px;
    background-color: #f5f5f530;
	
}
input[type=submit] {
	background-color: whitesmoke;
    border: 1px solid black;
    border-radius: 5px;
    color: black;
    font-style: normal;
    padding: 9px;
	width:83px;
	cursor: pointer;
}
input[type=submit]:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>
<form class="container"  method="post" action="">
<center><h1>Login</h1></center>
<label><b>user Id</b></label>
<input type="number" placeholder="Enter USER ID" id="user" name="user" required>
<label><b>Password</label>
<input type="password" placeholder="Enter Password" id="pass" name="pass" required> 
<center><input type="submit" name="submit"  value="Login"/><br>
<p style="text-align:right">New user?<a href="admreg.php">&nbspRegister</a></font></p>
</form>
</body>
<?php
if(isset($_POST["submit"])){
if(!empty($_POST['user']) && !empty($_POST['pass'])){
$user = $_POST['user'];
$pass = $_POST['pass'];
$conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
$db = mysqli_select_db($conn, 'project') or die("database error");
$query = mysqli_query($conn, "SELECT * FROM adminpass WHERE user='".$user."' AND pass='".$pass."'");
$numrows = mysqli_num_rows($query);
if($numrows !=0)
{
while($row = mysqli_fetch_assoc($query))
{
$dbusername=$row['user'];
$dbpassword=$row['pass'];
}
if($user == $dbusername && $pass == $dbpassword)
{
session_start();
$_SESSION['sess_user']=$user;
header("Location:adportal.html");
}
}
else
{
echo "<font color=white>Invalid Username or Password";
}
}
else
{
echo "<font color=white>Required All fields!";
}
}
?>
</html>
