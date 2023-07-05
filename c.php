<!--make a background image and do background-attachment:fixed-->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 80%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 5px solid orange;
  margin-bottom: 12px;
border-radius:20px;
color:red;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;

}
#myUL > ul{
background-color: #f1f1f1;
  
}

#myUL li a {
  border: 5px solid skyblue;
  margin-top: -1px; /* Prevent double borders */
  background-color: white;
  padding: 5px;
  text-decoration: none;
  font-size: 18px;
text-align:center;
  color: red;
display:block;
width:100%;
 }
#myUL li a:hover:not(.header) {
  background-color: #eee;

}
.text{
position:absolute;
top:30%;
left:55%;
font-size:35px;
color:yellow;
font-weight:bolder;
position:fixed;
font-style:italic;
}
body {
  display: grid;
  padding: 2rem;
  grid-template-columns: 300px 1fr;
  gap: 1rem;
  align-items: center;
background-image:url("best.png");
background-repeat:no-repeat;
background-attachment:fixed;
background-size:cover;
  max-width: 800px;
  margin: 0 auto;
  font: 500 100%/1.5 system-ui;
}
img {
  max-width: 100%;
  height: auto;
border:5px solid #555;
}
#one{
color:yellow;
}

</style>
</head>
<body>
<p class="text">C makes it easy to shoot yourself in the foot!!!<br>C++ makes it harder but when you do it blows your whole leg off!!!</p>
<h1 id="one">C / C++ ...</h1>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Books.." title="Type in a name">

<ul id="myUL"><center>
<li><a href="#">Virtual Machines by James E.smith<a href="virtual.pdf" download"><img src="virtual.png" width="75px" height="75px"></a></a></li>
<br><br> <li><a href="#">NIST Cloud Reference by Fanh Liu<a href="mastering.pdf" download"><img src="mastering.png" width="75px" height="75px"></img></a></a></li>

  <br><br><li><a href="#">Mastering Cloud computing by Rajkumar Buyya<a href="nist.pdf" download"><img src="nist.png" width="75px" height="75px"></img></a></a></li>
  <br><br><li><a href="#">Cloud Computing concepts by Thomas Erl<a href="prince.pdf" download"><img src="prince.png" width="75px" height="75px"></img></a></a></li>

 <br><br> <li><a href="#">Basics of Cloud Computing by Dan C.Mariniscu<a href="virtual.pdf" download"><img src="mastering.png" width="75px" height="75px"></img></a></a></li>
 <br><br><li><a href="#">Christina<a href="virtual.pdf" download"><img src="nist.png" width="75px" height="75px"></img></a></a></li>
 <br><br><li><a href="#">Cindy<a href="virtual.pdf" download"><img src="nist.png" width="75px" height="75px"></img></a></a></li>
</center> </ul>


<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>

</body>
</html>
