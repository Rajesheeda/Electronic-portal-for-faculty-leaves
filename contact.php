<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hexa Bokeh Theme - Contact Form</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2026 Hexa Bokeh
http://www.tooplate.com/view/2026-hexa-bokeh
-->
<link href="tooplate_styl.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="sampu/ddsmoothmenu.css" />
<script type="text/javascript" src="sampu/js/jquery.min.js"></script>
<script type="text/javascript" src="sampu/ddsmoothmenu.js">
/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/
</script>
<script type="text/javascript">
ddsmoothmenu.init({
	mainmenuid: "tooplate_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})
</script>
<link rel="stylesheet" type="text/css" href="sampu/css/jquery.lightbox-0.5.css" />    
<!-- Arquivos utilizados pelo jQuery lightBox plugin -->
<script type="text/javascript" src="sampu/js/jquery.js"></script>
<script type="text/javascript" src="sampu/js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="sampu/css/jquery.lightbox-0.5.css" media="screen" />
<!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->
<!-- Ativando o jQuery lightBox plugin -->
<script type="text/javascript">
$(function() {
$('#map a').lightBox();
});               
</script>
</head>
<body onload="preventBack();">
<?php
session_start();
if($_SESSION['u']=='null'||$_SESSION['u']=="")
{
 header("Location:index.html");
}
$u=$_SESSION['u'];
mysql_connect('localhost','root');
mysql_select_db('collage');
?>
<div id="tooplate_outer_wrapper">
	<div id="tooplate_wrapper">
       	<div id="tooplate_header">
		    <br>
            <div id="site_title"><h1 style="color:red">welcome to leaves portal</h1></div>
	            <div id="tooplate_menu" class="ddsmoothmenu">
                <ul>
                   <li><a href="#"><span></span><?php echo $u ?></a>
                      <ul style="font-size:15px;">
                            <li><a href="index1.php">Home</a></li>
                            <li><a href="http://www.lbrce.ac.in/" target="_blank">About collage</a></li>
                            <li><a href="#">Staff details</a></li>
                            <li><a href="logout.php">Logout</a></li>
                      </ul>
                   </li>
                </ul>
                <br style="clear: left" />
                </div> <!-- end of tooplate_menu -->
            <div class="cleaner"></div>
        </div> <!-- end of forever header -->
        <div style="background: url(ppm.jpg) center top no-repeat" id="tooplate_middle_sp">
            <div id="mid_title">
                    Please apply leaves here
                </div>
                 <div id="contact_form">
                    <form method="post" name="contact" action="Sender.php">
						<label for="author">From Date:</label> <input type="date" maxlength="40" id="author" class="input_field" name="fromdate" />
						<div class="cleaner h10"></div>
						<label for="email">To Date:(more than one day)</label> <input type="date" maxlength="40" id="email" class="input_field" name="todate" value=" "/>
						<div class="cleaner h10"></div>
						<label for="subject">list of all sending people</label>
						<table>
						<select size="10px" maxlength="50" id="subject" class="input_field" name="subject" disabled>
                         <?php
                            if(($_SESSION['a']!='null'))
							{
								$a=$_SESSION['a'];
								$qu="Select distinct * from $a where faculty!='$u'";
								$qr1=mysql_query($qu);
								while($row=mysql_fetch_array($qr1))
                                {
	                                   echo '<option value="'.$row["faculty"].'">'.$row["faculty"].$row["subname"].'</option>';
									   $m1=$row["faculty"];
									   $qp1="insert into gmail values('$m1')";
									   mysql_query($qp1);
                                }
							}
							if(($_SESSION['b']!=null))
							{
								$b=$_SESSION['b'];
								$qu1="Select distinct * from $b where faculty!='$u'";
								$qr2=mysql_query($qu1);
								while($row=mysql_fetch_array($qr2))
                                {
	                                   echo '<option value="'.$row["faculty"].'">'.$row["faculty"].$row["subname"].'</option>';
									   $m2=$row["faculty"];
									   $qp2="insert into gmail values('$m2')"; 
									   mysql_query($qp2);
                                }
							}
      						if(($_SESSION['c']!='null'))
		                    {
								$c=$_SESSION['c'];
								$qu2="Select distinct * from $c where faculty!='$u'";
								$qr3=mysql_query($qu2);
								while($row=mysql_fetch_array($qr3))
                                {
	                                   echo '<option value="'.$row["faculty"].'">'.$row["faculty"].$row["subname"].'</option>';
									   $m3=$row["faculty"];
									   $qp3="insert into gmail values('$m3')";
									   mysql_query($qp3);
                                }
							}
                        	if(($_SESSION['d']!='null'))
						    {
								$d=$_SESSION['d'];
								$qu3="Select distinct * from $d where faculty!='$u'";
								$qr4=mysql_query($qu3);
								while($row=mysql_fetch_array($qr4))
                                {
	                                   echo '<option value="'.$row["faculty"].'">'.$row["faculty"].$row["subname"].'</option>';
									   $m4=$row["faculty"];
									   $qp4="insert into gmail values('$m4')";
									   mysql_query($qp4);
                                }
							}
                            if(($_SESSION['e']!='null'))
							{							
							   $e=$_SESSION['e'];
							   $qu4="Select distinct * from $e where faculty!='$u'";
							   $qr5=mysql_query($qu4);
							   while($row=mysql_fetch_array($qr5))
                                {
	                                   echo '<option value="'.$row["faculty"].'">'.$row['faculty'].$row['subname'].'</option>';
									   $m5=$row["faculty"];
									   $qp5="insert into gmail values('$m5')";
									   mysql_query($qp5);
                                }
							}
       						if(($_SESSION['f']!='null'))
							{
								$f=$_SESSION['f'];
								$qu5="Select distinct * from $f where faculty!='$u'";
								$qr6=mysql_query($qu5);
								while($row=mysql_fetch_array($qr6))
                                {
	                                   echo '<option value="'.$row["faculty"].'">'.$row["faculty"].$row["subname"].'</option>';
									   $m6=$row["faculty"];
									   $qp6="insert into gmail values('$m6')";
									   mysql_query($qp6);
                                }
							}
						 ?>
						 </select>
						 </table>
			    		<div class="cleaner h10"></div>
	    				<label for="text">Reason:</label>
						<textarea id="text" name="reason" rows="0" cols="0" style="font-size:17px;" class="required"></textarea>
						<div class="cleaner h10"></div>
						<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
						<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
               		</form>
                </div>               
                <div class="cleaner"></div>
        </div> <!-- end of middle -->
        <div id="tooplate_main">
            <div class="col_w420 float_l">
            </div>
            <div class="col_w420 float_r">
                <div id="map">
              </div>                
                <div class="cleaner h30"></div>                  
            </div>
            <div class="cleaner"></div>
        </div><div id="tooplate_main_bottom"></div>
    	<div id="tooplate_footer">
			Copyright © 2048 <a href="#"></a>
        </div>
    </div> <!-- end of tooplate_wrapper -->
</div> <!-- end of tooplate_outer_wrapper -->
</body>
</html>