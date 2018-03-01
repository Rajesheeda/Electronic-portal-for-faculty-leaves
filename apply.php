<html>
<style>
body {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	font-family: verdana, arial, helvetica, sans-serif;
	color: #ccc;
	background-color: #333;
	}
.threed 
{
    color: #CCCCCC;
    text-shadow: 0 1px 0 #999999, 0 2px 0 #888888,
             0 3px 0 #777777, 0 4px 0 #666666,
             0 5px 0 #555555, 0 6px 0 #444444,
             0 7px 0 #333333, 0 8px 7px rgba(0, 0, 0, 0.4),
             0 9px 10px rgba(0, 0, 0, 0.2);
}
.neon {
    color: #D0F8FF;
    text-shadow: 0 0 5px #A5F1FF, 0 0 10px #A5F1FF,
             0 0 20px #A5F1FF, 0 0 30px #A5F1FF,
             0 0 40px #A5F1FF;
}
</style>
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};
    return i;
}
</script>
</head>
<body onload="startTime()">
<h2 class="neon" align="right" id="txt"></h2>
<p id="demo"></p>
<script>
document.myform.name.value = Date();
</script>
<h1 align="center" class="threed"  style="color:red;">welcome to Portal for applying leaves</h1>
<h2 align="center">Select Starting date</h2>
<form name="myform" align="center">
<input type="date" name="sasi"/>
<h2>Select ending date</h2>
<input type="date" name="raj"/>
<br><br><br>
<button>Send to apropriate teachers</button>
<h2>Send to a specific set of teachers</h2>
<select>
<?php
  session_start();
  $u=$_SESSION['u'];
  mysql_connect('localhost','root');
  mysql_select_db('collage');
  $insert_image="SELECT name from faculty";
  $qr=mysql_query($insert_image);
  while($row=mysql_fetch_array($qr))
  {
	  echo '<option value="'.$row["name"].'">'.$row["name"].'</option>';
  }
?>
</select>
</form>
</body>
</html>