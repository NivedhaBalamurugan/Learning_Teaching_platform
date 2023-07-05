<?php
session_start();
$name=$_POST["name"];
$email=$_POST["email"];
$_SESSION["newemail"]=$email;
$mobile=$_POST["mobile"];
include 'config.php';
$db="kishore";
$conn=mysqli_connect($server,$user,$pass,$db);
$reg=rand(100000,10000000);
$sql="INSERT INTO kichu(name,email,mobile,course,regno) VALUES('$name','$email','$mobile','Front-End','$reg')";
$res=mysqli_query($conn,$sql);

$sql1 = "SELECT * FROM kichu WHERE email='$email'";
$res4 = mysqli_query($conn, $sql1);

$five="";
if($res4){
   
	while($row = mysqli_fetch_assoc($res4)){
	$one=$row["name"];
$two=$row["email"];
$three=$row["mobile"];
$four=$row["course"];
$five=$row["regno"];}
} else {
    echo "Error: " . $res4 . "<br>" . mysqli_error($conn);
}

?>

<html>
<head>
<style type="text/css">
body{
color:white;
background:linear-gradient(135deg,#05073a, #dc0606ca);
font-size:20px;
}

button
{
color:black;
border-width:5px;
border-color:blue;
text-decoration:italic;
font-weight:bold;
display:inline-block;
font-size:20px;
cusor:poiter;
padding:10px 10px;
border-radius:15px;
width:250px;
}

th
{
width:200px;
height:30px;
}

table,th
{
border:2px solid black;
border-collapse:collapse;
}

</style>
</head>    
<body>

<center><h1>B<sup>2</sup> TECH </h1>
<h2>Digitally and Truly Yours </center></h2>

<center><h2>
<table>
<tr><th>Name</th>
<th><?php echo $one; ?></th></tr>
<tr><th>E-mail</th>
<th><?php echo $two; ?></th></tr>
<tr><th>Mobile</th>
<th><?php echo $three; ?></th></tr>
<tr><th>Course</th>
<th><?php echo $four; ?></th></tr>
<tr><th>Register No.</th>
<th><?php echo $five; ?></th></tr>
</table></center></h2>





<center><button onclick="window.print()">Print</button></center>
<br>
<center><button><a href="homesignafter.php">Go Back</a></button></center>
</body>
</html>
