<?php
session_start();
$sname=$_POST["signname"];
$smobile=$_POST["signmobile"];
$sins=$_POST["signins"];
$sdob=$_POST["signdob"];
$saddress=$_POST["signaddress"];
$sgen=$_POST["signgen"];
$semail=$_POST["signemail"];
$_SESSION["nivedha"]=$semail;

include 'config.php';
$db="kishore";
$conn=mysqli_connect($server,$user,$pass,$db);

$sql="INSERT INTO signup(name,email,mobileno,dob,ins,gen,address,country) VALUES('$sname','$semail','$smobile','$sdob','$sins','$sgen','$saddress','India')";
$res=mysqli_query($conn,$sql);

$sql1 = "SELECT * FROM signup WHERE email='$semail'";
$res4 = mysqli_query($conn, $sql1);
$name="";
$email="";
$mobile="";
$dob="";
$ins="";
$gen="";
$address="";
$country="";
$row="";
if($res4){
   
	while($row = mysqli_fetch_assoc($res4)){
	$name=$row["name"];
$email=$row["email"];
$mobile=$row["mobileno"];
$dob=$row["dob"];
$ins=$row["ins"];
$gen=$row["gen"];
$address=$row["address"];
$country=$row["country"];}
} else {
    echo "Error: " . $res4 . "<br>" . mysqli_error($conn);
}

?>

<html>
<head>
<meta name="viewport" content="width=device-width", intial-scale=1.0">
<title>new</title>
<style type="text/css">
body{ 
 
	height: 100%;
	background-image:url("border.jpg");
	background-size:cover;
	color: black; 
	font-size: 16px; 
	font-family: Times new roman;
} 
pre{
font-family: Times new roman;}

h1 { font-size: 32px; }
h2 { font-size: 26px; }
h3 { font-size: 20px; }
p { margin: 0 0 15px; line-height: 24px; color: black; }
a { color: dodgerblue; text-decoration: none; border-bottom: 1px dotted; }
a:hover { color: tomato; }
.container { 
	max-width:1300px; 
	max-height:1300px;
	margin: 0 auto; 
	padding: 20px;
}
.tabs {
	position: relative;
	display: flex;
	min-height: 1750px;
	border-radius: 20px 20px 0 0;
	overflow: hidden;
}

.tabby-tab {
	flex: 1;
}
.tabby-tab label {
	display: block;
	box-sizing: border-box;
		height: 40px;
		padding: 10px;
	text-align: center;
	background: #FF66FF;
	cursor: pointer;
	transition: background 0.5s ease;
}
.tabby-tab label:hover {
	background: #FF00FF;
 box-shadow: 0px 15px 20px #FFCCFF;
transform: translateY(-7px);

}
.tabby-content {
	position: absolute;
	left: 0; bottom: 0; right: 0;
		top: 40px; 
	padding: 20px;
	border-radius:0 0 20px 20px;
	background: #FFCCFF;
	
	transition: 
		opacity 0.8s ease,
	transform 0.8s ease		;
		opacity: 0;
		transform: scale(0.1);
		transform-origin: top left;
}
.tabby-content img {
	float: left;
	margin-right: 20px;
	border-radius: 8px;
}
.tabby-tab [type=radio] { display: none; }
[type=radio]:checked ~ label {
	background: #FFCCFF;
	z-index: 2;
}
[type=radio]:checked ~ label ~ .tabby-content {
	z-index: 1;
	
	/* show/hide */
		opacity: 1;
		transform: scale(1);
}
@media screen and (max-width: 767px) {
	.tabs { min-height: 400px;}
}
@media screen and (max-width: 480px) {
	.tabs { min-height: 580px; }
	.tabby-tab label { 
		height: 60px;
	}
	.tabby-content { top: 60px; }
	
	}
}


#login{
position:absolute;
left:1350px;
color:#FF66FF;
background-color:#FFCCFF;
border-width:5px;
border-color:blue;
padding:10px 10px;
text-decoration:italic;
font-weight:bold;
display:inline-block;
font-size:20px;
cursor:poiter;
width:300px;
border-radius:15px;
}
#register{
color:#FF66FF;
background-color:#FFCCFF;
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

#register:hover{
background-color:#FFF0F5;
 box-shadow: 0px 15px 20px #FFF0F5;
transform: translateY(-7px);
}
#login:hover{
background-color:#FFF0F5;
 box-shadow: 0px 15px 20px #FFF0F5;
transform: translateY(-7px);
}

#short1,#short2{
width: 300px;
  padding: 12px 20px;
  margin: 8px 0;

  border: 1px solid #ccc;
  box-sizing: border-box;
}



input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button:hover {
  opacity: 0.8;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.containers {
  padding: 16px;
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 30px;
}

/* Modal Content/Box */
.modal-content {
  background-color:#FFCCFF;
  margin: 5% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 60%; /* Could be more or less, depending on screen size */
}

.details {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color:red; /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 30px;
}

.detcon {
  background-color: #FFCCFF;
  margin: 5% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 5px solid #FF66FF;
  width: 50%;
border-radius:15px;
height:50%;
text-align:center; /* Could be more or less, depending on screen size */
}



/* The Close Button (x) */
.close {
  position: absolute;
  right: 100px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 200px) {
  .cancelbtn {
     width: 100%;
  }
}

#choose{
position:absolute;
top:600px;
left:50px;
font-size:20px;
font-style:italic;
font-weight:bold;
line-height:26pt;
float:left;
}

#bt{
background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
 
#crsjava{
width:50px;
height:50px;
position:absolute;
left:250px;
top:35px;
}

#child{
border-width:5px;
border-color:blue;
background-color:white;
padding:5px;
width:300px;
height:280px;
border-radius:10px;
position:relative;
float:left;
margin:40px;
}

#title
{
position:absolute;
top:35px;
left:100px;
}
#top{
text-align:center;
color:#FFCCFF;
}

#indus{
position:relative;
float:left;
margin:50px;
padding:5px;
border-width:5px;
border-color:#FFCCFF;
background-color:#FFCCFF;
width:300px;
height:280px;
}

#ind
{
position:absolute;
top:40px;
left:25px;
}
#goal
{
position:absolute;
top:40px;
left:80px;
}
#indp{
position:absolute;
top:40px;
left:45px;
}
#impart1 {
position:absolute;
top:150px;
right:100px;
}
#part
{
position:absolute;
top:500px;
left:35px;
}

#partition
{
position:absolute;
float:left;
line-height:200%;
left:20px;
}
#offer
{
position:relative;
top:500px;
left:35px;
}
#place
{
border-radius:100px;
border-color:blue;
background-color:white;
padding:5px;
height:200px;
width:200px;
position:relative;
float:left;
margin:30px;
}
#prenext{
position:absolute;
top:620px;
left:500px;
}
.link {
   text-decoration: none;
   display: inline-block;
   padding: 8px 16px;
   font-size: 35px;
   width: 40px;
   text-align: center;
border-color:#FF66FF;
}

.link:hover{
background-color:#ddd;
color:black;
border-color:#FF66FF;
}
.back:hover {
   background-color: #FF66FF;
   color: black;
border-color:#FF66FF;
}
.next:hover {
   background-color: red;
   color: black;
border-color:#FF66FF;
}
.back {
  
   background-color: #FF66FF;
color: black;
width:100px;
}
.next {

   background-color: rgb(68, 30, 112);
   color: black;
}
#btn{
color:#FF66FF;
background-color:#FFCCFF;
border-width:2px;
border-color:blue;
text-decoration:italic;
font-weight:bold;
display:inline-block;
font-size:12px;
cusor:poiter;
}

#of2,#of3,#of4,#of5,#of6{
display:none;}

#quiz
{
border: 5px solid red;
  border-radius: 20px;
  padding: 5px;
}

#line{
line-height:200%;
}


.disabled
{
opacity:0.6;
cursor:not-allowed;
}

#Top_Rated{
diplay:block;
}

#Programming ,#Skill ,#Tool ,#Web_Development ,#Data_Science ,#AWS_Certification{
display:none;
}

#myselect
{
width:200px;
background-color:#FFCCFF;
color:#FF1493;
height:30px;
boder:5px solid black;
font-weight:bolder;
font-size:15px;
}

#new_register
{
height:30px;
width:200px;
cusor:poiter;
background-color:#FFCCFF;
color:#FF1493;
boder:5px solid black;
border-radius:15px;
font-size:15px;
font-weight:bolder;
}

#new_register:hover{
background-color:#FFF0F5;
 box-shadow: 0px 15px 20px #FFF0F5;
transform: translateY(-7px);
}

.split {
  height: 400px;
  width: 500px;
  position: fixed;
  z-index: 1;
  top: 80px;
  overflow-x: hidden;
	margin:10px;
  padding-top: 20px;
}


.left {
position:absolute;
	top:80px;
left:100px;
border-right:2px solid #FF66FF;
  background-color: pink;
}


.right {
position:absolute;
	top:80px;
border-left:2px solid #FF66FF;
  left: 600px;
  background-color: pink;
}

#abt{
position:absolute;
top:1050px;
left:10px;}



#display{
display:none;
}

.box{
border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
position:absolute;
top:230px;
left:200px;
width:250px;
}

.box::after {
  content: "";
  clear: both;
  display: table;
}

.box img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.return{
border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
position:absolute;
top:100px;
left:100px;
width:300px;
height:250px;
}

.return::after {
  content: "";
  clear: both;
  display: table;
}

.return img {
  float: left;
  max-width: 60px;
  width: 50px;
height:50px;
  margin-right: 20px;
  border-radius: 50%;
}

#box,#return{
display:none;
}

 #close{
float:right;
}

.close2{
  position: absolute;
  right: 10px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}


.close2:hover,
.close2:focus 
{
  color: red;
  cursor: pointer;
}

#cd{
font-sixe:18px;
font-weight:bolder;
font-style:italic;
color:black;
}

#bk1{position:absolute;
top:50px;
left:200px;
border-radius:25px;
}
#bk2{
position:absolute;
top:50px;
border-radius:25px;
right:200px;
}

#login1{
position:absolute;
left:1180px;
color:#FF66FF;
background-color:#FFCCFF;
border-width:5px;
border-color:blue;
padding:8px 8px;
text-decoration:italic;
font-weight:bold;
display:inline-block;
font-size:20px;
cursor:poiter;
width:130px;
border-radius:15px;
}

#login2{
position:absolute;
left:1350px;
color:#FF66FF;
background-color:#FFCCFF;
border-width:5px;
border-color:blue;
padding:8px 8px;
text-decoration:italic;
font-weight:bold;
display:inline-block;
font-size:20px;
cursor:poiter;
width:130px;
border-radius:15px;
}



.leftn, .rightn {
      height: 32%;
      width: 50%;
      position: fixed;
      overflow-x: hidden;
      padding-top: 20px;
position:absolute;
top:400px;
border:45px solid #FFCCFF;
}
.leftn {
      left: 0;
      background-color: #FF66FF;
}
.rightn {
      right: 0;
      background-color: #FF66FF;
}

.circle {
        width:20px;
        line-height: 20px;
        border-radius: 50%;
        text-align: center;
        font-size: 15px;
        border: 3px solid #000;
background-color:white;
}

#sp1{
position:absolute;
top:185px;
left:80px;
}

#sp2{
position:absolute;
top:228px;
left:80px;
}

#sp3{
position:absolute;
top:271px;
left:80px;
}

#sp4{
position:absolute;
top:314px;
left:80px;
}

#sp5{
position:absolute;
top:357px;
left:80px;
}

#sp6{
position:absolute;
top:400px;
left:80px;
}

#ul{
color:#FFCCFF;
}

#f1,#f2,#f3,#f4,#f5,#f6{
display:none;
}

#nivi{
display="block";
}

#f1,#f2,#f3,#f4,#f5,#f6 {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

#nivi img {
vertical-align: middle;
text-align:center;
position:absolute;
top:20px;
left:70px;}

#f1 img {
vertical-align: middle;
text-align:center;
position:absolute;
top:0;
left:70px;}
#f2 img {
vertical-align: middle;
text-align:center;
position:absolute;
top:0;
left:70px;}
#f3 img {
vertical-align: middle;
text-align:center;
position:absolute;
top:0;
left:70px;}
#f4 img {
vertical-align: middle;
text-align:center;
position:absolute;
top:0;
left:70px;}
#f5 img {
vertical-align: middle;
text-align:center;
position:absolute;
top:0;
left:70px;}
#f6 img {
vertical-align: middle;
text-align:center;
position:absolute;
top:0;
left:70px;}

#nivi .content{
position: absolute;
  top: 400px;
left:70px;
}

#f1 .content {
  position: absolute;
  top: 300px;
left:70px;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 430px;
  padding: 10px;
}
#f2 .content {
  position: absolute;
  top: 300px;
left:70px;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 430px;
  padding: 10px;
}
#f3 .content {
  position: absolute;
  top: 300px;
left:70px;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 430px;
  padding: 10px;
}
#f4 .content {
  position: absolute;
  top: 300px;
left:70px;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 430px;
  padding: 10px;
}
#f5 .content {
  position: absolute;
  top: 300px;
left:70px;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 430px;
  padding: 10px;
}
#f6 .content {
  position: absolute;
  top: 300px;
left:70px;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 430px;
  padding: 10px;
}

#od{
position:absolute;
top:1100px;
left:300px;
}

#varsh{
display:none;
}



#news{
background-color:violet;
color:black;
font-size:20px;
font-weight:bold;
font-style:italic;
text-align:center;
}

.mySlides {display:none;}

#tea, #trans, #mar{
position:absolute;
top:630px;
left:150px;
}
#teacon1, #transcon1, #marcon1{
position:absolute;
top:730px;
left:650px;
}

#teacon2, #transcon2, #marcon2{
position:absolute;
top:780px;
left:650px;
}

.w3-content
{
line-height:30px;
}

#display{
position:absolute;
top:100px;
}

#abt_register{
color:#FF66FF;
background-color:#FFCCFF;
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

#hidlogin2,#hidlogin21{
position:absolute;
left:1350px;
color:#FF66FF;
background-color:#FFCCFF;
border-width:5px;
border-color:blue;
padding:8px 8px;
text-decoration:italic;
font-weight:bold;
display:inline-block;
font-size:20px;
cursor:poiter;
width:130px;
border-radius:15px;

}

.profile{ 
display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color:red; /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 30px;
}


.nivitab{
  position:absolute;
top:100px;
left:50px;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 500px;
}

.nivitab1{
  position:absolute;
top:100px;
left:50px;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 500px;
}
/* Style the buttons inside the tab */
.nivitab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

.nivitab1 button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}



/* Change background color of buttons on hover */
.nivitab button:hover {
  background-color: #ddd;
}

.nivitab1 button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */





/* Style the tab content */
.nivitabcontent {
  position:absolute;
top:100px;
left:450px;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 1000px;
  border-left: none;
  height: 500px;
color:black;
background-color:white;
}

.nivitabcontent1 {
  position:absolute;
top:100px;
left:450px;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 1000px;
  border-left: none;
  height: 500px;
color:black;
background-color:white;
}


#input{
position:absolute;
left:600px;
top:100px;

}

#prob{
position:absolute;
left:200px;
top:100px;
}


table,th,td{
border:2px solid black;
border-collapse:collapse
}

th{
height:40px;
width:50px;
padding:10px;
text-align:center;
}

table{
width:800px;
position:absolute;
top:100px;
left:150px;
}

td{
text-align:center;
height:40px;
width:50px;
padding:10px;
}


#c1{
background-color:white;
border:5px solid grey;
width:400px;
height:570px;
position:absolute;
top:950px;
text-align:center;
left:200px;
}

#c2
{
background-color:white;
border:5px solid grey;
position:absolute;
width:300px;
top:950px;
left:750px;
text-align:center;

}

#c3{
position:absolute;
top:150px;
background-color:#FF99FF;
left:200px;
width:800px;
border:5px solid grey;
padding:10px;
}



#int
{
position:absolute;
top:1300px;
left:300px;
Tect-align:center;
font-size:25px;
font-style:italic;
font-weight:bolder;
}

</style>
</head>
<body onload="message()"><br><br><br>

<img src="nini.jpg" width="150px" height="150px" id="title">
<button id="hidlogin21" onclick="document.getElementById('prod2').style.display='block'">Profile</button>




<div id="top"><h1><center>B<sup>2</sup> TECH</h1>
<h2>Creating a Finer World....</h2>
<h3>Learn future ready skills on your schedule</h3></center></div>


<div class="container">	<div class="tabs">
		
		<div class="tabby-tab">
			<input type="radio" id="tab-2" name="tabby-tabs" checked>
			<label for="tab-2"><b>About</b></label>
			<div class="tabby-content">

<img src="abt.png" width="100% height="300px">
<div id="news">b<sup>2</sup> TECH currently looks for </div><br><br>
<center><h1>Changing learning for the better</h1>
<h3><pre>Whether you want to learn or to share what you know, you’ve come to the right place. 
As a global destination for online learning, we connect people through knowledge.</h3></center></pre>

<br>

<div class="w3-content" style="max-width:400px">
  <div class="mySlides">
<img id="tea" src="tea.png" width="400px" height="400px">
<div id="teacon1"><h1>Our instructors</h1></div>
<div id="teacon2"><h3>B<sup>2</sup> TECH instructors are real people who are passionate about <br>sharing what they know with the students al over the world...</h3></div>
  </div>

  <div class="myslides">
<img id="trans" src="trans.png" width="400px" height="400px">
<div id="transcon1"><h1>Transforming Lives</h1></div>
<div id="transcon2"><h3>Talented people are everwhere, but opportunities can be harder to find.<br>With B<sup>2</sup> TECH - a Syrian refugee- was able to<br> start a new carrer and a new life in Germany...</h3></div>
</div>

  <div class="mySlides">
<img id="mar" src="market.jpg" width="400px" height="400px">
<div id="marcon1"><h1>Our Marketplace</h1></div>
<div id="marcon2"><h3>Wahtever your learning style, we have a course that fits. <br>Coming from instructors all over the world, our courses teach you<br> anything you'd want to know...</h3></div>
  </div>  
</div>



<div id="abt"><center><h2>HELP DESK</h2></center>
<br><h2><center>
Come on, interact and get to know more about us</h2>
<button onclick="document.getElementById('display').style.display='block'" style="width:auto;" id="abt_register">Click</button>
</center>			

<div id="display">

<div class="split left">
<span onclick="document.getElementById('display').style.display='none'" class="close2" title="Close Modal">&times;</span>
  <h2><center>User</center></h2>
    <p>
<center><h3>Chat :</h3>
</center><br><h4> &nbsp;&nbsp;&nbsp;&nbsp;<textarea rows="2" cols="50" id="chat"></textarea>
&nbsp;&nbsp;&nbsp;</h4>
<button onclick="chat()">SEND</button>

<div class="box" id="box">
<img src="loginimage.png">
<p id="come"></p> 
</div>
</p>
</div>

<div class="split right">
<span onclick="document.getElementById('display').style.display='none'" class="close2" title="Close Modal">&times;</span> 
<center> <h2>B<sup>2</sup> TECH</h2></center>
    <p>
<div class="return" id="return">
<img src="nini.jpg">
<p id="come2"></p>
</div>
</p>
</div></div>
</div></div>
		</div>	

		<div class="tabby-tab">
			<input type="radio" id="tab-3" name="tabby-tabs">
			<label for="tab-3"><b>Courses</b></label>
			<div class="tabby-content">
			<h1><center>Courses</h1><h2><center>You got what it takes to earn a place here?</h2></center>
<select id="myselect">
<option id="myselect">Top_Rated</option>
<option id="myselect">Skill</option>
<option id="myselect">Tool</option>
<option id="myselect">AWS_Certification</option>
<option id="myselect">Data_Science</option>
<option id="myselect">Web_Development</option>
<option id="myselect">Programming</option></select>&nbsp;&nbsp;
<button onclick="filter()" id="new_register">Filter</button>

<div id="Top_Rated"><div class="grid-container">
<div id="child"><img id="crsjava" src="crsjava.png"><h2>Java programming<br> Language</h2><br>Java is a software framework developed by Sun MicroSystems , offers Development across different Operating Systems...<br><br><center><button onclick="check()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="and.jpg"><h2>Android <br>Development</h2><br>Android software development is the process by which new applcations are created for devices running the android operating system...<br><br><center><button onclick="check()" id="register"><b>Details</button></center></b></div>  
<div id="child"><img id="crsjava" src="pydat.jpg"><h2>Python for <br>Data science</h2><br>Python is one of the valuable skills needed for a data science career. Though it hasn't always been, Python is the programming language of choice for data science....<br><br><center><button onclick="check()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="aws.jpg"><h2>Amazon Web Services</h2><br>Amazon Web Services, Inc. is a subsidiary of Amazon that provides on-demand cloud computing platforms and APIs to individuals, companies, and governments...<br><br><center><button onclick="check()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="crsc++.jpg"><h2>C++ programming <br>Language</h2><br>C++ is a general-purpose programming language created by Danish computer scientist Bjarne Stroustrup as an extension of the C programming language...<br><br><center><button onclick="check()" id="register"><b>Details</button></center></b></div>  
<div id="child"><img id="crsjava" src="or.png"><h2>Oracle SQL</h2><br>Oracle Dtabase is a proprietary multi-modle database and marketed by Oracle Corporation.It is a database commonly used for running online transaction...<br><br><center><button onclick="check()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="cldp.jpg"><h2>AWS Cloud<br> Practitioner</h2><br>AWS certified cloud practitioner is defined as a technical professional who is well-versed with cloud computing and has foundational knowledge of AWS to support cloud operations...<br><br><center><button onclick="check()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="datpro.jpg"><h2>Data Science for <br>Professionals</h2><br>Data scientists Professionals examine which questions need answering and where to find the related data. They have business acumen and analytical skills....<br><br><center><button onclick="check()" id="register"><b>Details</button></center></b></div>  
<div id="child"><img id="crsjava" src="devops.png"><h2>DEV Ops</h2><br>DevOps is a set of practices that automates the processes between software development and IT teams in order that they can build, test and release software faster...<br><br><center><button onclick="check()" id="register"><b>Details</button></center></b></div> 


<p id="int">Want to interact with the placed students!
<br><a href="details.php">Here is the Way</a></p>
</div></div>


<div id="Programming"><div class="grid-container">
<div id="child"><img id="crsjava" src="crsjava.png"><h2>Java programming <br>Language</h2><br>Java is a software framework developed by Sun MicroSystems , offers Development across different Operating Systems...<br><br><center><button onclick="check()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="crsangularjs.jpg"><h2>Angular <br>programming<br> Language</h2><br>AngularJS was a JavaScript-based open-source front-end web framework for developing single-page applications...<br><br><center><button onclick="check()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="crsmysql.png"><h2>MYSQL<br> programming <br>Language</h2><br>MySQL Cluster enables users to meet the database challenges of next generation web, cloud, and communications services with uncompromising scalability...br><br><center><button onclick="check()" id="register"><b>Details</button></b></center></div> 
<div id="child"><img id="crsjava" src="crsc.png"><h2>C programming<br> Language</h2><br>C is a general-purpose computer programming language. It was created in the 1970s by Dennis Ritchie, and remains very widely used and influential...<br><br><center><button onclick="check()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="crsc++.jpg"><h2>C++ programming<br> Language</h2><br>C++ is a general-purpose programming language created by Danish computer scientist Bjarne Stroustrup as an extension of the C programming language...<br><br><center><button onclick="check()" id="register"><b>Details</button></center></b></div>  
<div id="child"><img id="crsjava" src="crsphp.jpg"><h2>PHP programming <br>Language</h2><br>PHP is a general-purpose scripting language geared toward web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994...<br><br><center><button onclick="check()" id="register"><b>Details</button></b></center></div> 
<div id="child"><img id="crsjava" src="crssql.png"><h2>SQL programming<br> Language</h2><br>SQL is a domain-specific language used in programming and designed for managing data held in a relational database management system...<br><br><center><button onclick="check()" id="register"><b>Details</button></center></b></div>  
<div id="child"><img id="crsjava" src="crspython.jpg"><h2>Python<br> programming <br>Language</h2><br>Python is a high-level, interpreted, general-purpose programming language. Its design philosophy emphasizes code readability...<br><br><center><button onclick="check()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="crsnodejs.png"><h2>Nodejs <br>programming<br> Language</h2><br>Node.js is an open-source, cross-platform, back-end JavaScript runtime environment that runs on the V8 engine and executes JavaScript code outside a web browser...<br><br><center><button onclick="check()" id="register"><b>Details</button></center></b></div>  

<p id="int">Want to interact with the placed students!
<br><a href="details.php">Here is the Way</a></p>
</div></div>


<div id="Skill"><div class="grid-container">
<div id="child"><img id="crsjava" src="graphic.jpg"><h2>Graphics Designing</h2><br>Graphicd designing is the process of visual communication and problem solvind through the use of typography,photography and illuatration...<br><br><center><button onclick="check5()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="video.jpg"><h2>Video Editing</h2><br>Video Editing is used to structure and present all video information including films and television shows , video ads and video essays...<br><br><center><button onclick="check5()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="iad.jpg"><h2>IAD Graphics</h2><br>IAD graphics creates interior designers with great visual communication skills and trains them graphics , models and presentation to be established professinals...<br><br><center><button onclick="check5()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="red.jpg"><h2>REdhat system Administrator</h2><br>A Redhat system adminitartor is able to perform the core system administration skills required in Red Hat Enterprise inux environments...<br><br><center><button onclick="check5()" id="register"><b>Details</button></b></center></div> 
<div id="child"><img id="crsjava" src="e.jpg"><h2>E-Publishing</h2><br>Electronic publishing includes the digital publication of e-books ,digital magazines and the development of digital libraries and catalogues...<br><br><center><button onclick="check5()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="and.jpg"><h2>Android<br> Development</h2><br>Android software development is the process by which new applcations are created for devices running the android operating system...<br><br><center><button onclick="check5()" id="register"><b>Details</button></center></b></div>  
<div id="child"><img id="crsjava" src="stest.jpg"><h2>Software Testing</h2><br>Any software that is developed need to be tested rigouresly to ensure that it fulfills the defined project requirements...<br><br><center><button onclick="check5()" id="register"><b>Details</button></b></center></div> 
<div id="child"><img id="crsjava" src="pydat.jpg"><h2>Python with <br>DataScience</h2><br>Pyhton beig the widely used general purpose high level , interpreted dynamic programming language with which you can become a data scientist...<br><br><center><button onclick="check5()" id="register"><b>Details</button></center></b></div>  
<div id="child"><img id="crsjava" src="tab.jpg"><h2>Tableau Training</h2><br>Tableau software is a software company headquartered in Seattle,Washington,United States that provides interactive data visualization products focused on business intelligence...<br><br><center><button onclick="check5()" id="register"><b>Details</button></center></b></div> 

<p id="int">Want to interact with the placed students!
<br><a href="details5.php">Here is the Way</a></p>
</div></div>


<div id="Tool"><div class="grid-container">
<div id="child"><img id="crsjava" src="ac.png"><h2>Microsoft Access</h2><br>Microsoft access is a database management system that combines the realational Microsoft Jet Database Engine with a graphical user interface...<br><br><center><button onclick="check4()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="ex.png"><h2>Ms-Excel</h2><br>Microsoft Excel is a spredsheet developed by Microsoft for Windows...<br><br><center><button onclick="check4()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="or.png"><h2>Oracle SQL</h2><br>Oracle Dtabase is a proprietary multi-modle database and marketed by Oracle Corporation.It is a database commonly used for running online transaction...<br><br><center><button onclick="check4()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="vba.png"><h2>VBA</h2><br>Visual basic for application is an implementation of Microsoft's event driven programming language Visual Basic 6,which was declared legacy in 2008...<br><br><center><button onclick="check4()" id="register"><b>Details</button></b></center></div> 
<div id="child"><img id="crsjava" src="devops.png"><h2>DEV Ops</h2><br>DevOps is a set of practices that automates the processes between software development and IT teams in order that they can build, test and release software faster...<br><br><center><button onclick="check4()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="tally.png"><h2>Tally</h2><br>Tally is a complete Enterprise Resource Planning system with a excellent grip in accounting...<br><br><center><button onclick="check4()" id="register"><b>Details</button></center></b></div>  
<div id="child"><img id="crsjava" src="mpro.jpg"><h2>Microsoft Project</h2><br>Microsoft Project is designed to assist a project manager in developing a plan, assigning resources to tasks,tracking progress, managing the budget...<br><br><center><button onclick="check4()" id="register"><b>Details</button></b></center></div> 
<div id="child"><img id="crsjava" src="lr.png"><h2>Abode Lighroom</h2><br>Adobe lightroom is a family of image organization and image manipulation software developed by Adobe Systems.It allows importing, viewing, organizing large number of digital images...<br><br><center><button onclick="check4()" id="register"><b>Details</button></center></b></div>  
<div id="child"><img id="crsjava" src="lu.jpg"><h2>Lumion Pro</h2><br>Lumion is the world's fastest 3D rendering software for architects.In seconds, you can visulaize CAD models in a video or image with real life environments...<br><br><center><button onclick="check4()" id="register"><b>Details</button></center></b></div> 

<p id="int">Want to interact with the placed students!
<br><a href="details4.php">Here is the Way</a></p>
</div></div>

<div id="Web_Development"><div class="grid-container">
<div id="child"><img id="crsjava" src="web.jpg"><h2>Web Development<br> from Scratch</h2><br>Art of developing a simple static page of plain text to complex web based internet applications...<br><br><center><button onclick="check1()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="html.png"><h2>HTML</h2><br>The HyperText Markup Language or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages ...<br><br><center><button onclick="check1()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="css.png"><h2>CSS</h2><br>Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML or XML...<br><br><center><button onclick="check1()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="js.jpg"><h2>Java Script</h2><br>JavaScript, often abbreviated JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS....<br><br><center><button onclick="check1()" id="register"><b>Details</button></b></center></div> 
<div id="child"><img id="crsjava" src="php.png"><h2>PHP</h2><br>PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages...<br><br><center><button onclick="check1()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="sql.png"><h2>SQL</h2><br>SQL is structured query language. This language is used for interacting with database. In web development also same...<br><br><center><button onclick="check1()" id="register"><b>Details</button></center></b></div>  
<div id="child"><img id="crsjava" src="front.jpg"><h2>Frontend <br>Development</h2><br>A front-end developer builds the front-end portion of websites and web applications—that is, the part that users actually see and interact with...<br><br><center><button onclick="check1()" id="register"><b>Details</button></b></center></div> 
<div id="child"><img id="crsjava" src="back.jpg"><h2>Backend <br>Dvelopment</h2><br> Backend Development is also known as server-side development. It is everything that the users don't see...<br><br><center><button onclick="check1()" id="register"><b>Details</button></center></b></div>  


<p id="int">Want to interact with the placed students!
<br><a href="details1.php">Here is the Way</a></p>
</div></div>

<div id="Data_Science"><div class="grid-container">
<div id="child"><img id="crsjava" src="dat.jpg"><h2>Data Science from<br>Scratch</h2><br>Data science is the domain of study that deals with vast volumes of data using modern tools and techniques to find unseen patterns, derive meaningful information, and make business decisions...<br><br><center><button onclick="check2()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="mac.jpg"><h2>Machine Learning</h2><br>Machine learning is a branch of artificial intelligence (AI) and computer science which focuses on the use of data and algorithms to imitate the way that humans learn and field of inquiry devoted to understanding...<br><br><center><button onclick="check2()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="neu.png"><h2>Data Science: <br>Neural network</h2><br>Neural networks are computing systems with interconnected nodes that work much like neurons in the human brain. Using algorithms...<br><br><center><button onclick="check2()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="r.jpg"><h2>R programming</h2><br>R is a programming language for statistical computing and graphics supported by the R Core Team and the R Foundation for Statistical Computing.....<br><br><center><button onclick="check2()" id="register"><b>Details</button></b></center></div> 
<div id="child"><img id="crsjava" src="pydat.jpg"><h2>Python for <br>Data science</h2><br>Python is one of the valuable skills needed for a data science career. Though it hasn't always been, Python is the programming language of choice for data science....<br><br><center><button onclick="check2()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="macda.jpg"><h2>Machine Learning <br>for Data science</h2><br>Machine learning is only as good as the data it is given and the ability of algorithms to consume it. Going forward...<br><br><center><button onclick="check2()" id="register"><b>Details</button></center></b></div>  
<div id="child"><img id="crsjava" src="sta.png"><h2>Statics for Data<br>and Business Analysis</h2><br>Statistical research in business enables managers to analyze past performance, predict future business practices and lead organizations effectively. ...<br><br><center><button onclick="check2()" id="register"><b>Details</button></b></center></div> 
<div id="child"><img id="crsjava" src="datpro.jpg"><h2>Data Science <br>for Professionals</h2><br>Data scientists Professionals examine which questions need answering and where to find the related data. They have business acumen and analytical skills....<br><br><center><button onclick="check2()" id="register"><b>Details</button></center></b></div>  
<div id="child"><img id="crsjava" src="ai.jpg"><h2>Artificial Intelligence</h2><br>Artificial intelligence (AI) is the ability of a computer or a robot controlled by a computer to do tasks that are usually done by humans because they require human intelligence and discernment....<br><br><center><button onclick="check2()" id="register"><b>Details</button></center></b></div>  

<p id="int">Want to interact with the placed students!
<br><a href="details2.php">Here is the Way</a></p>
</div></div>

<div id="AWS_Certification"><div class="grid-container">
<div id="child"><img id="crsjava" src="aws.jpg"><h2>Amazon Web<br> Services</h2><br>Amazon Web Services, Inc. is a subsidiary of Amazon that provides on-demand cloud computing platforms and APIs to individuals, companies, and governments...<br><br><center><button onclick="check3()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="sec.jpg"><h2>AWS Security <br>Speciality</h2><br>AWS Security Specialists understand of specialized data classifications and AWS data protection mechanisms, data-encryption methods and AWS mechanisms to implement them...<br><br><center><button onclick="check3()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="sol.jpg"><h2>AWS Solution <br>Architect</h2><br>An AWS Solutions Architect designs, builds, deploys, and maintains business applications and critical infrastructure inside the AWS Cloud....<br><br><center><button onclick="check3()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="adnet.jpg"><h2>AWS Advanced<br> Networking</h2><br>The objective of the course is to familiarize students with basics and Advance Networking. This course is job oriented course and designed to produce networking professionals...<br><br><center><button onclick="check()" id="register"><b>Details</button></b></center></div> 
<div id="child"><img id="crsjava" src="cldp.jpg"><h2>AWS Cloud<br> Practitioner</h2><br>AWS certified cloud practitioner is defined as a technical professional who is well-versed with cloud computing and has foundational knowledge of AWS to support cloud operations...<br><br><center><button onclick="check3()" id="register"><b>Details</button></center></b></div> 
<div id="child"><img id="crsjava" src="deveng.jpg"><h2>AWS Certified <br>DevOps Engineer</h2><br>A DevOps Engineer does everything behind the scenes to ensure software works during and after deployment. They are responsible for the deployment processes...<br><br><center><button onclick="check3()" id="register"><b>Details</button></center></b></div>  
<div id="child"><img id="crsjava" src="tess.jpg"><h2>AWS Techinical<br> Essentils</h2><br>AWS Technical Essentials introduces you to the fundamental concepts of compute, database, storage, networking, monitoring, and security...<br><br><center><button onclick="check3()" id="register"><b>Details</button></b></center></div> 
<div id="child"><img id="crsjava" src="sysad.jpg"><h2>AWS SysOps <br>Administration</h2><br>Administrators are mainly responsible for deploying, managing, and operating various required systems on the given AWS platform....<br><br><center><button onclick="check3()" id="register"><b>Details</button></center></b></div>  


<p id="int">Want to interact with the placed students!
<br><a href="details3.php">Here is the Way</a></p>
</div></div>


</div></div>
	<div class="tabby-tab">
			<input type="radio" id="tab-4" name="tabby-tabs">
			<label for="tab-4"><b>E-Quiz</b></label>
			<div class="tabby-content">
			<p><center><h1>E - Quizing</h1><h2>Come and engage your time with us</h2></center><br><br>

<video width="100%" height="50%" controls>
  <source src="quizvideo.mp4" type="video/mp4">
  <source src="quizvideo.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>

<br><br><br><br>
<h1>Wish to participate in the quiz !!!</h1>
<h2>Go through the following rules before you take up the quiz:</h2>
<h3><ul>
<li>You will have a total time of 3 minutes to complete the quiz.</li>
<br><li>You are also allowed to go to the previous qusetion to change your answer.</li>
<br><li>Once the time gets over your answers will be validatrd only for the quastions that you have attended.</li>
<br><li>You cant exit from the quiz whilw you are playing.</li>
<br><li>You will be awarded points on the basis of your correct answer.</li></ul>
</h3>
</p>

<form action="quiz.php" method=POST">
<center><input type="submit" id="register" value="start Quiz">
</form></center>



</div>
		</div>
		<div class="tabby-tab">
			<input type="radio" id="tab-5" name="tabby-tabs">
			<label for="tab-5"><b>E-Resources</b></label>
			<div class="tabby-content"><br>
<img id="bk1" src="book.jpg" width="300px" height="300px">
<span id="arrow" style='font-size:100px; position:absolute; top:10%; left:45%;'>&#8608;</span>
<img id="bk2" src="eb.jpg" width="300px" height="300px">

<div class="leftn">
<h1>&nbsp;&nbsp;&nbsp;6 FEATURES OF
<br>&nbsp;&nbsp;&nbsp;E BOOKS OFFERED
<br>&nbsp;&nbsp;&nbsp;BY B<sup>2</sup> TECH:</h1>
<hr>

&nbsp;&nbsp;&nbsp;<div class="circle"><b>1</b></div><h2 id="sp1" onmouseover="book('f1')" onmouseout="nobook('f1')">One Device , Many Books</h2>
&nbsp;&nbsp;&nbsp;<div class="circle"><b>2</b></div><h2 id="sp2" onmouseover="book('f2')" onmouseout="nobook('f2')">Varities at one Click</h2>
&nbsp;&nbsp;&nbsp;<div class="circle"><b>3</b></div><h2 id="sp3" onmouseover="book('f3')" onmouseout="nobook('f3')">Accessible Everywhere</h2>
&nbsp;&nbsp;&nbsp;<div class="circle"><b>4</b></div><h2 id="sp4" onmouseover="book('f4')" onmouseout="nobook('f4')">Sharable Content</h2>
&nbsp;&nbsp;&nbsp;<div class="circle"><b>5</b></div><h2 id="sp5" onmouseover="book('f5')" onmouseout="nobook('f5')">Interactive Elements</h2>
&nbsp;&nbsp;&nbsp;<div class="circle"><b>6</b></div><h2 id="sp6" onmouseover="book('f6')" onmouseout="nobook('f6')">Read Aloud Feature</h2>

</div>

<div class="rightn">
<div id="nivi"><img src="img.jpg" width="450px" height="450px">
<div class="content"><h2>E-Books are just digital copies of analog<br> books , Convenient Yes , But we have<br> the technology now to rethink what a <br>book is!</h2>
</div></div>


<div id="f1"><img src="oneone.jpg" width="450px" height="450px">
<div class="content"><h2>One Device , Many Books</h2>
&nbsp;&nbsp;&nbsp;&nbsp;<h3>
E-books can be downloaded at any time by any user all around the world. B<sup>2</sup> TECH does not impose any restriction towards it.</h3></div></div>

<div id="f2"><img src="vari.jpg" width="450px" height="450px">
<div class="content"><h2>Varities on one Click</h2>
&nbsp;&nbsp;&nbsp;&nbsp;<h3>
Different kinds of topics can be viewed by just a click. B<sup>2</sup> TECH supports a digital search facility to sort out books.</h3></div></div>

<div id="f3"><img src="acc.jpg" width="450px" height="450px">
<div class="content"><h2>Accessible Everywhere</h2>
&nbsp;&nbsp;&nbsp;&nbsp;<h3>
Offline E-books can be made available everywhere. B<sup>2</sup> TECH provides a way to download the books to be made offline.</h3></div></div>

<div id="f4"><img src="share.png" width="450px" height="450px">
<div class="content"><h2>sharable Content</h2>
&nbsp;&nbsp;&nbsp;&nbsp;<h3>
E-books can revolve around the world. B<sup>2</sup> TECH allows anyone to share the E-Book without any copyright.</h3></div></div>

<div id="f5"><img src="int.png" width="450px" height="450px">
<div class="content"><h2>Interactive Elements</h2>
&nbsp;&nbsp;&nbsp;&nbsp;<h3>
Interactive E-Books have elements with which audience can interact. B<sup>2</sup> TECH inhibits various interactive elements in most of the books.</h3></div></div>

<div id="f6"><img src="read.png" width="450px" height="450px">
<div class="content"><h2>Read Aloud Feature</h2>
&nbsp;&nbsp;&nbsp;&nbsp;<h3>
E-Book is read aloud to the user to have better interest towards it. B<sup>2</sup> TECH alos helps in certain chapters with read aloud facility.</h3></div></div>


</div>

<div id="od">
<center><p><h2>Study hard, for the well is deep, and our brains are shallow.<br>
Get access to all E-Books here.</h2></p></center>

<h3><center><button id="register" onclick="disp()">Click Here For Access</button></center>
<div id="varsh">
<p><ul><li><a href="python.html">Python Programming</a></li><br>
<li><a href="c.php">C / C++ Programming</a></li><br>
<li><a href="os.php">Operating System</a></li><br>
<li><a href="web.php">Web Development</a></li><br>
<li><a href="wire.php">Wireless Networks</a></li><br>
<li><a href="data.php">Database Management System</a></li><br>
<li><a href="cloud.php">Cloud Computing</a></li><br>
<li><a href="net.php">Computer Networks</a></li></ul></p></div></h3>

</div>

		</div>
		</div>
		<div class="tabby-tab">
			<input type="radio" id="tab-6" name="tabby-tabs">
			<label for="tab-6"><b>Placements</b></label>
			<div class="tabby-content">
			
			<p><center><h1>Our Placements Stats</h1><br><h2>The companies Ready to hire you!</h2></center>
<div id="indus"><img id="ind" src="ind.png" width="50px" height="50px"><br><br><h3><center>Industrial Training</h3></center><h4><center>
Our students have been placed in top leading company. We focus on Job oriented training programs which helps our students to get a job as soon as they complete our placement trainings in chennai.</h4></center></div>
<div id="indus"><img id="goal" src="goal.png" width="50px" height="50px"><br><br><h3><center>Goal</center></h3><h4><center>Our goal is to transform an engineering graduate to industry-ready working professional. Our training programs include real time projects experience which will be shared our real time trainers working on the major projects.</h4></center></div>
<div id="indus"><img id="indp" src="indp.png" width="50px" height="50px"><br><br><h3><center>Independence</center></h3><h4><center>Students will get hands on experience with business standards to face the interview confidently. Our skilled students performed in all interviews and they deliver what the companies are looking for and attain their carrer start easily.</h4></center></div>		


<div id="part"><center><h2>Partnerships...</center><hr style="height: 15px;border: 0;width:75%;box-shadow: inset 0 12px 12px -12px rgb(9,84,132)"></h2>
<br><div id="partcon"><img src="part.png" id="impart1"><img src="partimg.jpg" id="impart2" width="1300px" height="450px">
<div id="partition"><h3>Right from the inception, we have been identifying <br>
and craving for the right partners to drive our <br>
next-generation strategists and to answer the <br>
prevalent business needs. Our teaching and <br>
service offerings across the world are <br>
complimented by our partners.Our partner <br>
ecosysytem includes top most software technical <br>
industries and partnerships for specific student requirements.<br>
 This system allows us to proide best-in-class guidance for the students.  </h3></div>
</div></div></p>
<br><br><br>
<div id="offer"><p><h2><center>Our offers</center></h2>
<div id="of1">
<div id="place"><br><br><br><center><h3>National Plastics</h3><a href="https://nationalgroup.in/" target="blank"><h5>Read more</h5></a></center></div>
<div id="place"><br><br><br><center><h3>ENA Gaming Studio </h3><a href="https://www.enagamestudio.com/" target="blank"><h5>Read more</h5></a></center></div>
<div id="place"><br><br><br><center><h3>DollyRasa </h3><a href="http://trackit.aero" target="blank"><h5>Read more</h5></a></center></div>
<div id="place"><br><br><br><center><h3>Tracks IT Solutions </h3><a href="http://trackit.aero" target="blank"><h5>Read more</h5></a></center></div>
<br><br><br><div id="prenext"><center>
<a class="link" class="back">&laquo;<button id="btn" class="backe disabled">Back</button></a>&nbsp;
<a class="link" class="next">&raquo;<button id="btn" onclick="next('of1')">Next</button></a></div></center>
</div>

<div id="of2">
<div id="place"><br><br><br><center><h3>DSRC </h3><a href="http://dsrc.com" target="blank"><h5>Read more</h5></a></center></div>
<div id="place"><br><br><br><center><h3>Finix Info Solutions</h3><a href="http://finixinfo.com" target="blank"><h5>Read more</h5></a></center></div>
<div id="place"><br><br><br><center><h3>Click N Shoot </h3><a href="http://finixinfo.com" target="blank"yu><h5>Read more</h5></a></center></div>
<div id="place"><br><br><br><center><h3>Yu Flow Engineering Pvt Ltd </h3><a href="http://finixinfo.com" target="blank"><h5>Read more</h5></a></center></div>
<br><br><br><div id="prenext"><center>
<a class="link" class="back">&laquo;<button id="btn" onclick="back('of2')">Back</button></a>&nbsp;
<a class="link" class="next">&raquo;<button id="btn" onclick="next('of2')">Next</button></a></div></center>
</div>

<div id="of3">
<div id="place"><br><br><br><center><h3>Stead Fast Technologies</h3><a href="http://sulekha.com" target="blank"><h5>Read more</h5></a></center></div>
<div id="place"><br><br><br><center><h3> RUD India Chain Pvt Ltd</h3><a href="http://rud.co.uk" target="blank"><h5>Read more</h5></a></center></div>
<div id="place"><br><br><br><center><h3>Infoplus Technologies</h3><a href="http://infoplusltd.co.uk" target="blank"><h5>Read more</h5></a></center></div>
<div id="place"><br><br><br><center><h3>Dawn Shine Technologies</h3><a href="http://finixinfo.com" target="blank"><h5>Read more</h5></a></center></div>
<br><br><br><div id="prenext"><center>
<a class="link" class="back">&laquo;<button id="btn" onclick="back('of3')">Back</button></a>&nbsp;
<a class="link" class="next">&raquo;<button id="btn" onclick="next('of3')">Next</button></a></div></center>
</div>

<div id="of4">
<div id="place"><br><br><br><center><h3>Aster Hr Solutions Pvt Lts</h3><a href="http://zaubacorp.com" tarhet="blank"><h5>Read more</h5></a></center></div>
<div id="place"><br><br><br><center><h3>Easton Media</h3><a href="http://eastonmedia.com" target="blank"><h5>Read more</h5></a></center></div>
<div id="place"><br><br><br><center><h3>Orbitz It Solution</h3><a href="http://orbitzit.co.in" target="blank"><h5>Read more</h5></a></center></div>
<div id="place"><br><br><br><center><h3>People Carrer</h3><a href="http://orbitzit.co.in" target="blank"><h5>Read more</h5></a></center></div>
<br><br><br><div id="prenext"><center>
<a class="link" class="back">&laquo;<button id="btn" onclick="back('of4')">Back</button></a>&nbsp;
<a class="link" class="next">&raquo;<button id="btn" onclick="next('of4')">Next</button></a></div></center>
</div>

<div id="of5">
<div id="place"><br><br><br><center><h3>Infosys Technologies</h3><a href="https://infosys.com" target="blank"><h5>Read more</h5></a></center></div>
<div id="place"><br><br><br><center><h3>Five star business Credits Ltd</h3><a href="https://fivestargroup.in" target="blank"><h5>Read more</h5></a></center></div>
<div id="place"><br><br><br><center><h3>Infinte Computer Solutions</h3><a href="https://infinte.com" target="blank"><h5>Read more</h5></a></center></div>
<div id="place"><br><br><br><center><h3>cherrbye Group of company</h3><a href="https://www.ccct.org.cn" target="blank"><h5>Read more</h5></a></center></div>
<br><br><br><div id="prenext"><center>
<a class="link" class="back">&laquo;<button id="btn" onclick="back('of5')">Back</button></a>&nbsp;
<a class="link" class="next">&raquo;<button id="btn" onclick="next('of5')">Next</button></a></div></center>
</div>

<div id="of6">
<div id="place"><br><br><br><center><h3>Niral Cube</h3><a href="https://infosys.com" target="blank"><h5>Read more</h5></a></center></div>
<div id="place"><br><br><br><center><h3>Skylink Technologies</h3><a href="https://skulinktechsolutions.com" target="blank"><h5>Read more</h5></a></center></div>
<div id="place"><br><br><br><center><h3>RGS Construction</h3><a href="https://www.viskartech.com" target="blank"><h5>Read more</h5></a></center></div>
<div id="place"><br><br><br><center><h3>Travarena</h3><a href="https://travarena.com" target="blank"><h5>Read more</h5></a></center></div>
<br><br><br><div id="prenext"><center>
<a class="link" class="back">&laquo;<button id="btn" onclick="back('of6')">Back</button></a>&nbsp;
<a class="link" class="next">&raquo;<button id="btn" class="backe disabled">Next</button></a></div></center>
</div>


</p></div>

</div></div>





<div class="tabby-tab">
			<input type="radio" id="tab-7" name="tabby-tabs">
			<label for="tab-7"><b>Contact</b></label>
			<div class="tabby-content">			
			
<h1><center>Want to Contact us</h1></center>
<div id="contact">

<div id="c1">
<center><h2>Office address</h2></center>
<hr><h3>
<img src="conadd.png" width="25px" height="25px" id="con">
Our branches are available at<br></h3>
<h4>Chennai-Trichy-Banagalore-Calcutta-New Delhi-Mumbai-Karnataka-Kerala-Utthar Pradesh-Haryana-Gujarat-Punjab<br><br></h4>
<h3><img src="conmail.png" width="25px" height="25px" id="con"> 
Mail us<br></h3>
<h4>b2tech@gmail.com<br><br></h4>
<h3><img src="conland.png" width="25px" height="25px" id="con">
LandLine<br></h3>
<h4>044 42500506<br><br></h4>
<h3><img src="conmob.png" width="25px" height="25px" id="con">
Mobile<br></h3>
<h4>+91 7859632145<br>
+91 7859632148<br>
+91 7859632150<br></h4><br><br>
</div>


<div id="c2">
<h3><img src="contime.png" width="25px" height="25px">
Monday - Saturday </h3>
<h4>08:30 AM - 9:00 PM</h4>
<h3><img src="contime.png" width="25px" height="25px">
Sunday</h3>
<h4>09:00 AM - 3:00 PM</h4>
</div>

<div id="c3"><h2>
We'd love to hear from you!<br></h2>
<h4>Brief us of our requirements below, and let's connect...</h34> 
<h3><label for="name">Full Name</label>
<input type="text" placeholder="Full name">
<label for="email">Email</label>
<input type="text" placeholder="Email">
<label for="sub">Subject</label>
<input type="text" placeholder="Subject">
<label for="call">Email</label>
<input type="text" placeholder="Mobile No.">
<label for="call">Opinion</label><br>
<textarea rows="4" cols="78"></textarea><br><br>
<button onclick="get()">Post</button></h3>





</div>


</div>
<center><button><a href="homeadp.php" target="blank">Know More</a></button></center>


</div>
		</div>

</div>







<div id="iddet" class="details">
<div class="detcon"><p><center>
<h3>Course : Python Programming</h3>
<h3>Duration : 6 months</h3>
<h3>Syllabus : <a href="cddet.php">Click here</a></h3>
<h3>Fees : Free of cost</h3>
</p></center>
<center><button id="register">Register</button>
<button onclick="document.getElementById('iddet').style.display='none'" id="register">Cancel</button></center>
</div></div>


<div id="iddet1" class="details">
<div class="detcon"><p><center>
<h3>Course : Frontend Development</h3>
<h3>Duration : 8 months</h3>
<h3>Syllabus : <a href="cddet1.php">Click here</a></h3>
<h3>Fees : Free of cost</h3>
</p></center>
<center><button id="register">Register</button>
<button onclick="document.getElementById('iddet1').style.display='none'" id="register">Cancel</button></center>
</div></div>

<div id="iddet2" class="details">
<div class="detcon"><p><center>
<h3>Course : Machine Learning</h3>
<h3>Duration : 6 months</h3>
<h3>Syllabus : <a href="cddet2.php">Click here</a></h3>
<h3>Fees : Free of cost</h3>
</p></center>
<center><button id="register">Register</button>
<button onclick="document.getElementById('iddet2').style.display='none'" id="register">Cancel</button></center>
</div></div>


<div id="iddet3" class="details">
<div class="detcon"><p><center>
<h3>Course : AWS Cloud Practitioner</h3>
<h3>Duration : 6 months</h3>
<h3>Syllabus : <a href="cddet3.php">Click here</a></h3>
<h3>Fees : Free of cost</h3>
</p></center>
<center><button id="register">Register</button>
<button onclick="document.getElementById('iddet3').style.display='none'" id="register">Cancel</button></center>
</div></div>


<div id="iddet4" class="details">
<div class="detcon"><p><center>
<h3>Course : MS Excel</h3>
<h3>Duration : 5 months</h3>
<h3>Syllabus : <a href="cddet4.php">Click here</a></h3>
<h3>Fees : Free of cost</h3>
</p></center>
<center><button id="register">Register</button>
<button onclick="document.getElementById('iddet4').style.display='none'" id="register">Cancel</button></center>
</div></div>

<div id="iddet5" class="details">
<div class="detcon"><p><center>
<h3>Course : Android Development</h3>
<h3>Duration : 7 months</h3>
<h3>Syllabus : <a href="cddet5.php">Click here</a></h3>
<h3>Fees : Free of cost</h3>
</p></center>
<center><button id="register">Register</button>
<button onclick="document.getElementById('iddet5').style.display='none'" id="register">Cancel</button></center>
</div></div>






<div id="prod2" class="profile">
<div class="prodet">


<div class="nivitab1">
  <button class="tablinks" onclick="openCity1(event, 'India')" id="defaultOpen1">My Profile</button>
  <button class="tablinks" onclick="openCity1(event, 'Japan')">My Courses</button>
  <button class="tablinks" onclick="openCity1(event, 'Ausi')">My Transactions</button>
</div>

<div id="India" class="nivitabcontent1">
  <h3>Profile</h3>
<span onclick="document.getElementById('prod2').style.display='none'" class="close" title="Close Modal">&times;</span>
<img class="proimage" src="loginimage.png" width="150px" height="150px">
 <br><br>

<h4><div id="prob">
<label for="name">Name </label><br><br>
<textarea rows="1" cols="30"><?php echo $name; ?></textarea><br><br>
<label for="mobile">Mobile Num </label><br><br>
<textarea rows="1" cols="30"><?php echo $mobile; ?></textarea><br><br>
<label for="dob"> Date of Birth </label><br><br>
<textarea rows="1" cols="30"><?php echo $dob; ?></textarea><br><br>
<label for="ctry">Country </label><br><br>
<textarea rows="1" cols="30"><?php echo $country; ?></textarea><br><br></div>


<div id="input">
<label for="mail">E-Mail </label><br><br>
<textarea rows="1" cols="30"><?php echo $email; ?></textarea><br><br>
<label for="ins">Institute </label><br><br>
<textarea rows="1" cols="30"><?php echo $ins; ?></textarea><br><br>
<label for="gen">Gender </label><br><br>
<textarea rows="1" cols="30"><?php echo $gen; ?></textarea><br><br>
<label for="add">Adddress </label><br><br>
<textarea rows="1" cols="30"><?php echo $address; ?></textarea><br><br></div></h4>

</div>

<div id="Japan" class="nivitabcontent1">
  <h3>Registered Courses</h3><br><br>

 <span onclick="document.getElementById('prod2').style.display='none'" class="close" title="Close Modal">&times;</span>
<table>
<tr><th>Name</th>
<th>E-Mail</th>
<th>Course</th>
<th>Fee</th>
<th>Details</th></tr>
<tr><td></td>
<td></td>
<td></td>
<td></td>
<td></td></tr>
<tr><td></td>
<td></td>
<td></td>
<td></td>
<td></td></tr>
<tr><td></td>
<td></td>
<td></td>
<td></td>
<td></td></tr>
<tr><td></td>
<td></td>
<td></td>
<td></td>
<td></td></tr>
<tr><td></td>
<td></td>
<td></td>
<td></td>
<td></td></tr>
</table>

</div>

<div id="Ausi" class="nivitabcontent1">
  <h3>Transactions</h3>
<span onclick="document.getElementById('prod2').style.display='none'" class="close" title="Close Modal">&times;</span>
<table>
<th>Transaction Id</th>
<th>Amount</th>
<th>Status</th>
<th>Completion Time</th></tr>
<tr><td></td>
<td></td>
<td></td>
<td></td></tr>
<tr><td></td>
<td></td>
<td></td>
<td></td></tr>
<tr><td></td>
<td></td>
<td></td>
<td></td></tr>
<tr><td></td>
<td></td>
<td></td>
<td></td></tr>
<tr><td></td>
<td></td>
<td></td>
<td></td></tr></table>



</div>


</div></div>












<script type="text/javascript">



var reg=0;
function next(x)
{
if(x=="of1")
{
document.getElementById("of1").style.display="none";
document.getElementById("of2").style.display="inline-block";
document.getElementById("of3").style.display="none";
document.getElementById("of4").style.display="none";
document.getElementById("of5").style.display="none";
document.getElementById("of6").style.display="none";
}

if(x=="of2")
{
document.getElementById("of1").style.display="none";
document.getElementById("of2").style.display="none";
document.getElementById("of3").style.display="inline-block";
document.getElementById("of4").style.display="none";
document.getElementById("of5").style.display="none";
document.getElementById("of6").style.display="none";
}

if(x=="of3")
{
document.getElementById("of1").style.display="none";
document.getElementById("of2").style.display="none";
document.getElementById("of3").style.display="none";
document.getElementById("of4").style.display="inline-block";
document.getElementById("of5").style.display="none";
document.getElementById("of6").style.display="none";
}

if(x=="of4")
{
document.getElementById("of1").style.display="none";
document.getElementById("of2").style.display="none";
document.getElementById("of3").style.display="none";
document.getElementById("of4").style.display="none";
document.getElementById("of5").style.display="inline-block";
document.getElementById("of6").style.display="none";
}

if(x=="of5")
{
document.getElementById("of1").style.display="none";
document.getElementById("of2").style.display="none";
document.getElementById("of3").style.display="none";
document.getElementById("of4").style.display="none";
document.getElementById("of5").style.display="none";
document.getElementById("of6").style.display="inline-block";
}


}

function back(x)
{


if(x=="of2")
{
document.getElementById("of1").style.display="inline-block";
document.getElementById("of2").style.display="none";
document.getElementById("of3").style.display="none";
document.getElementById("of4").style.display="none";
document.getElementById("of5").style.display="none";
document.getElementById("of6").style.display="none";
}

if(x=="of3")
{
document.getElementById("of1").style.display="none";
document.getElementById("of2").style.display="inline-block";
document.getElementById("of3").style.display="none";
document.getElementById("of4").style.display="none";
document.getElementById("of5").style.display="none";
document.getElementById("of6").style.display="none";
}

if(x=="of4")
{
document.getElementById("of1").style.display="none";
document.getElementById("of2").style.display="none";
document.getElementById("of3").style.display="inline-block";
document.getElementById("of4").style.display="none";
document.getElementById("of5").style.display="none";
document.getElementById("of6").style.display="none";
}

if(x=="of5")
{
document.getElementById("of1").style.display="none";
document.getElementById("of2").style.display="none";
document.getElementById("of3").style.display="none";
document.getElementById("of4").style.display="inline-block";
document.getElementById("of5").style.display="none";
document.getElementById("of6").style.display="none";
}

if(x=="of6")
{
document.getElementById("of1").style.display="none";
document.getElementById("of2").style.display="none";
document.getElementById("of3").style.display="none";
document.getElementById("of4").style.display="none";
document.getElementById("of5").style.display="inline-block";
document.getElementById("of6").style.display="none";
}

}

function filter()
{

var clicked=document.getElementById("myselect").value;
if(clicked=="Programming")
{
document.getElementById("Top_Rated").style.display="none";
document.getElementById("Programming").style.display="block";
document.getElementById("Skill").style.display="none";
document.getElementById("Tool").style.display="none";
document.getElementById("Data_Science").style.display="none";
document.getElementById("Web_Development").style.display="none";
document.getElementById("AWS_Certification").style.display="none";
}

if(clicked=="Skill")
{
document.getElementById("Top_Rated").style.display="none";
document.getElementById("Programming").style.display="none";
document.getElementById("Skill").style.display="block";
document.getElementById("Tool").style.display="none";
document.getElementById("Data_Science").style.display="none";
document.getElementById("Web_Development").style.display="none";
document.getElementById("AWS_Certification").style.display="none";
}

if(clicked=="Tool")
{
document.getElementById("AWS_Certification").style.display="none";
document.getElementById("Top_Rated").style.display="none";
document.getElementById("Programming").style.display="none";
document.getElementById("Skill").style.display="none";
document.getElementById("Tool").style.display="block";
document.getElementById("Web_Development").style.display="none";
document.getElementById("Data_Science").style.display="none";
}

if(clicked=="Web_Development")
{
document.getElementById("Top_Rated").style.display="none";
document.getElementById("AWS_Certification").style.display="none";
document.getElementById("Programming").style.display="none";
document.getElementById("Skill").style.display="none";
document.getElementById("Tool").style.display="none";
document.getElementById("Data_Science").style.display="none";
document.getElementById("Web_Development").style.display="block";
}

if(clicked=="Data_Science")
{
document.getElementById("Top_Rated").style.display="none";
document.getElementById("Programming").style.display="none";
document.getElementById("Skill").style.display="none";
document.getElementById("Tool").style.display="none";
document.getElementById("AWS_Certification").style.display="none";
document.getElementById("Data_Science").style.display="block";
document.getElementById("Web_Development").style.display="none";
}

if(clicked=="AWS_Certification")
{
document.getElementById("Top_Rated").style.display="none";
document.getElementById("Programming").style.display="none";
document.getElementById("Skill").style.display="none";
document.getElementById("Tool").style.display="none";
document.getElementById("AWS_Certification").style.display="block";
document.getElementById("Data_Science").style.display="none";
document.getElementById("Web_Development").style.display="none";
}

if(clicked=="Top_Rated")
{
document.getElementById("Top_Rated").style.display="block";
document.getElementById("Programming").style.display="none";
document.getElementById("Skill").style.display="none";
document.getElementById("Tool").style.display="none";
document.getElementById("AWS_Certification").style.display="none";
document.getElementById("Data_Science").style.display="none";
document.getElementById("Web_Development").style.display="none";
}

}

function chat()
{
var res=document.getElementById("chat").value;
var crs="<br>&diams;Java Programming<br>&diams;Android Development<br>&diams;Backend Development<br>&diams;C++ Programming<br>&diams;Amazon Web Services<br>&diams;Python for Data Science<br>&diams;Oracle SQL<br>&diams;DEV Ops...";
var de="All the courses offered by B<sup>2</sup> TECH are of free of cost...<br>";
var el="Anybody who wishes to join any of the courses sholud have completed standard 12 or anyother equivalent degree...";
var q="Anyone can play the quiz and improve their knowledge. They need not be a registered user of B<sup>2</sup> TECH...";
var log="Only those who have signed up using their account can register for any of the courses subjected to privacy policies...";
var b="E-Resources can be accessed by any use and can be downloaded for offline view...";
var of="The details of the placed students along with the interactivity can be viewed on the placement teb...";
document.getElementById("come").innerHTML=res;
if ((res.includes("course")) && (res.includes("login")))
{
document.getElementById("come2").innerHTML=log;
} 
if ((res.includes("fees")) || (res.includes("cost")))
{
document.getElementById("come2").innerHTML=de;
}
if ((res.includes("course")) || (res.includes("class")))
{
document.getElementById("come2").innerHTML="The top most courses offered by B<sup>2</sup> TECH are"+crs;
} 
if ((res.includes("eligibility")) || (res.includes("degree")))
{
document.getElementById("come2").innerHTML=el;
} 
if ((res.includes("quiz")) || (res.includes("play")))
{
document.getElementById("come2").innerHTML=q;
} 

if ((res.includes("book")) || (res.includes("resource")))
{
document.getElementById("come2").innerHTML=b;
} 
if ((res.includes("placement")) || (res.includes("offer")))
{
document.getElementById("come2").innerHTML=of;
} 
document.getElementById("box").style.display="block";
document.getElementById("return").style.display="block";
document.getElementById('chat').value =" ";
}


function book(x)
{
document.getElementById(x).style.display="block";
document.getElementById("nivi").style.display="none";
}

function nobook(x)
{
document.getElementById(x).style.display="none";
document.getElementById("nivi").style.display="block";
}

function disp()
{
document.getElementById("varsh").style.display="block";
}

function go()
{
document.getElementById("log").style.display="none";
document.getElementById("signin").style.display="block";
}

var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 2000); 
}

function logfunc()
{
name=document.getElementById("uname").value;
pass=document.getElementById("pass").value;
reg=1;

if((name=="nivi") && (pass=="123"))
{
document.getElementById('id01').style.display='none'; 
alert("Login Successfully!!!");
document.getElementById("login1").style.display="none";
document.getElementById("login2").style.display="none";
document.getElementById("hidlogin21").style.display="none";
document.getElementById("hidlogin2").style.display="block";
}
else if((name=="varsha") && (pass=="var123"))
{
document.getElementById('id01').style.display='none'; 
alert("Login Successfully!!!");
document.getElementById("login1").style.display="none";
document.getElementById("login2").style.display="none";
document.getElementById("hidlogin2").style.display="block";
document.getElementById("hidlogin21").style.display="none";
}
else
{
alert("Incorrect Username and Password!!!");
}

}

function nologfunc()
{

reg=1;
document.getElementById('id02').style.display='none'; 
alert("Sign In Successfully!!!");
document.getElementById("login1").style.display="none";
document.getElementById("login2").style.display="none";
document.getElementById("hidlogin21").style.display="block";
document.getElementById("hidlogin2").style.display="none";



}




function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("nivitabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}



function openCity1(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("nivitabcontent1");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks1");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}





document.getElementById("defaultOpen1").click();

function check()
{

document.getElementById("iddet").style.display="block";

}

function check2()
{


document.getElementById("iddet2").style.display="block";

}

function check1()
{

document.getElementById("iddet1").style.display="block";

}


function check3()
{

document.getElementById("iddet3").style.display="block";

}


function check5()
{

document.getElementById("iddet5").style.display="block";
}

function check4()
{

document.getElementById("iddet4").style.display="block";

}

function message()
{
alert("Thanks for signing up!");
}


</script>






</body>
</html>
