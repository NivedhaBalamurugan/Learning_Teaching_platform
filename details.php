<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
background-image:url("border.jpg");
	background-size:cover;
	color: black; 
	font-size: 16px; 
	font-family: Times new roman;;
}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

table,th,td{
border:2px solid black;
border-collapse:collapse;
width:70%;
height:40px;
text-align:center;
padding:10px;
table-layout: fixed ;
font-weight:bolder;

}

table{
position:absolute;
left:150px;
}

th
{
background-color: #FFCCFF;
}

tr:nth-child(even) {background-color: #f2f2f2;}
tr:nth-child(odd) {background-color: LightGray;}

#demo{
position:absolute;
bottom: 70px;
background-color: #FFCCFF;
width:20%;
  right: 140px;
}

#h1,#h3
{
color:black;
background-color: #FFCCFF;
width:25%;
}

a:hover {
  color: red;
}

a
{
position:absolute;
top:580px;
right:10px;
color:#FF66FF;
font-weight:bold;
font-size:25px;
}

</style>
</head>
<body>


<div id="h1"><h1>Programiming language </h1></div>
<div id="h3"><h3>Top Placed students list...</h3></div>
<table>
<tr><th>Name</th>
<th>Institute</th>
<th>Course</th>
<th>Placed At</th>
<th>Code</th></tr>

<tr><td>Nivedha</td>
<td>CEG</td>
<td>PHP</td>
<td>Amazon</td>
<td>00832</td></tr>

<tr><td>Varsha</td>
<td>MIT</td>
<td>Python Programming</td>
<td>Microsoft</td>
<td>00256</td></tr>

<tr><td>Balan</td>
<td>SSN</td>
<td>Python Programming</td>
<td>Infosys</td>
<td>00556</td></tr>

<tr><td>Sumathi</td>
<td>SVCE</td>
<td>C Programming</td>
<td>VTV Software</td>
<td>02564</td></tr>

<tr><td>Kishan</td>
<td>KIG</td>
<td>Java programming </td>
<td>Amazon</td>
<td>00676</td></tr>

<tr><td>Kavya</td>
<td>REC</td>
<td>Angular Programming</td>
<td>Pay Pall</td>
<td>00902</td></tr>

<tr><td>Selvam</td>
<td>ACT</td>
<td>Java Programming</td>
<td>Zoho</td>
<td>00971</td></tr>

<tr><td>Navin</td>
<td>CEG</td>
<td>Node Js</td>
<td>Webzschema</td>
<td>00430<td></tr>

<tr><td>Rithika</td>
<td>BGH</td>
<td>Software Testing</td>
<td>Wipro</td>
<td>08942</td></tr>

<tr><td>Sreenithi</td>
<td>DCE</td>
<td>Python Programming</td>
<td>Hyperlink Software</td>
<td>00569</td></tr>

<tr><td>Raaj</td>
<td>RIT</td>
<td>PHP</td>
<td>Tech Mahindra</td>
<td>06312</td></tr>

<tr><td>Viji</td>
<td>SSN</td>
<td>SQL</td>
<td>HCL Tech</td>
<td>00397</td></tr>

<tr><td>Swetha</td>
<td>St.Joseph</td>
<td>C++ Programming</td>
<td>TCS</td>
<td>09081</td></tr>


</table>
<br><br>
<p id="demo"><a href="homesign.php"><h4>To know more,<br> view the placement stats!</a></h4></p><br><br>

<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form action="/act.php" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" id="msg" required></textarea>
<br><br> <label for="msg"><b>Code</b></label>
<input type="text" id="code"><br><br><br>
    <button type="button" class="btn" onclick="func()">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function func()
{
alert("You will soon be invited by code to chat with him...");
document.getElementById("myForm").style.display = "none";
document.getElementById("msg").value=" ";
document.getElementById("code").value=" ";
}
</script>

</body>
</html>
