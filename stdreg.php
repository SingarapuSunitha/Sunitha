<html>
<head>
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
input[type=number],input[type=password], input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: white;
}
.container {
    position: absolute;
    margin-left: 285px;
    max-width: 626px;
    padding: 29px;
    border-radius: 20px;
    margin-top: 50px;
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
	cursor: pointer;
}
input[type=submit]:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>
<div class="box">
<form action="" method="post" class = "container">
<center><h1>Register</h1></center>
<label><b>Registration Number</b></label>
<input type = "number" name = "user" required value = "">
<label><b>Email</b></label>
<input type = "email" name = "email" required onkeyup="this.setAttribute('value', this.value);" value="">
<label><b>Password</label>
<input type="password" name="pass" required value=""  onkeyup="this.setAttribute('value', this.value);"
pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
<center><input type="submit" name="submit" value="Create Account"></center>
<!--<div class="inputBox">
<label>Registration Number</label>
<input type="number" name="user" required value="">

</div>
<div class="inputBox">
<input type="email" name="email" required onkeyup="this.setAttribute('value', this.value);" value="">
<label>Email</label>
</div>
<div class="inputBox">
<input type="password" name="pass" required value=""  onkeyup="this.setAttribute('value', this.value);"
pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
<label>Password</label>
</div>
<center><input type="submit" name="submit" value="Create Account"></center>-->
</form>
<p style="text-align:right">Have an account?<a href="stdlogin.php">&nbsp Login</a></font></p>
</div>
<?php
if(isset($_POST["submit"])){
if(!empty($_POST['user']) && !empty($_POST['pass'])){
$user = $_POST['user'];
$pass = $_POST['pass'];
$conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); // DB Connection
$db = mysqli_select_db($conn, 'project') or die("DB Error"); // Select DB from database
//Selecting Database
$query = mysqli_query($conn, "SELECT * FROM userpass WHERE user='".$user."'");
$numrows = mysqli_num_rows($query);
if($numrows == 0)
{
//Insert to Mysqli Query
$sql = "INSERT INTO userpass(user,pass) VALUES('$user','$pass')";
$result = mysqli_query($conn, $sql);
//Result Message
if($result){
echo "<font color=white>Your Account Created Successfully.Please go back to login.";
}
else
{
echo "Failure!";
}
}
else
{
echo "<font color=white>That Username already exists! Please try again.";
}
}
else
{
?>
<script>alert('Required all fields');</script>
<?php
}
}
?>
</html>
