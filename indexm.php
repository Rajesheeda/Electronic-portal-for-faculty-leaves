<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hexa Bokeh Theme - Free Website Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<!--
Template 2026 Hexa Bokeh
http://www.tooplate.com/view/2026-hexa-bokeh
-->
<link href="./sampu/tooplate_style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="./sampu/js/swfobject.js"></script>
<script type="text/javascript">
	var flashvars = {};
	flashvars.xml_file = "photo_list.xml";
	var params = {};
	params.wmode = "transparent";
	var attributes = {};
	attributes.id = "slider";
	swfobject.embedSWF("flash_slider.swf", "flash_grid_slider", "440", "220", "9.0.0", false, flashvars, params, attributes);
</script>

<link rel="stylesheet" type="text/css" href="./sampu/ddsmoothmenu.css" />

<script type="text/javascript" src="./sampu/js/jquery.min.js"></script>
<script type="text/javascript" src="./sampu/ddsmoothmenu.js">

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
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
	var t = today.getDay();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s ;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};
    return i;
}
</script>
<style>
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
</head>
<body onload="startTime();">
<?php
                  session_start();
				  if($_SESSION['u']=='null'||$_SESSION['u']=="")
                  {
                       header("Location:index.html");
                  }
				  $u=$_SESSION['u'];
                  mysql_connect('localhost','root');
                  mysql_select_db('collage');
                  $insert_image="SELECT * from faculty where name='$u'";
                  $qr=mysql_query($insert_image);
                  $row=mysql_fetch_array($qr);
?>                
<div id="tooplate_outer_wrapper">
	<div id="tooplate_wrapper">
    	<div id="tooplate_header">
		        <div id="site_title"><h1 align="center" class="threed"  style="color:red;">welcome to Portal for applying leaves</h1></div>
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
                    </li>
                </ul>
				<br style="clear: left" />
            </div> <!-- end of tooplate_menu -->
			
            <div class="cleaner"></div>
        </div>
        <div id="tooplate_middle">
		    <div id="mid_right">
    	        <p><?php echo '<img height="180px" width="180px" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" alt='.$u.' />'; ?></p>
            </div>
            <div id="mid_right">
                <div id="mid_title">
                <?php echo $row['name']; ?><br>
    			<?php echo $row['designation']; ?>
                </div>
                <p>Teaching classes:<br>
				<?php
				$_SESSION['a']='null';
				$_SESSION['b']='null';
				$_SESSION['c']='null';
				$_SESSION['d']='null';
				$_SESSION['e']='null';
				$_SESSION['f']='null';
				$sq0=mysql_query("select * from btech1a where faculty='$u'");
			    while($qr=mysql_fetch_array($sq0))
				{ 
				  $_SESSION['a']="btech1a";
				  echo 'btech1A:'.$qr["subname"]."<br>";
				}
			    $sq1=mysql_query("select * from btech1b where faculty='$u'");
				while($qr=mysql_fetch_array($sq1))
				{
				  $_SESSION['b']="btech1b";
				  echo 'btech1B:'.$qr['subname']."<br>";
				}
			    $sq2=mysql_query("select * from btech2a where faculty='$u'");
				while($qr=mysql_fetch_array($sq2))
				{
				  $_SESSION['c']="btech2a";
				  echo 'BTech2A:'.$qr['subname']."<br>";
				}
			    $sq3=mysql_query("select * from btech2b where faculty='$u'");
				while($qr=mysql_fetch_array($sq3))
				{
					$_SESSION['d']="btech2b";
				    echo 'BTech3B:'.$qr['subname']."<br>";
				}
			    $sq4=mysql_query("select * from btech3a where faculty='$u'");
				while($qr=mysql_fetch_array($sq4))
				{
				    $_SESSION['e']="btech3a";
					echo 'BTech3A:'.$qr['subname']."<br>";
				}
			    $sq5=mysql_query("select * from btech3b where faculty='$u'");
				while($qr=mysql_fetch_array($sq5))
				{
				    $_SESSION['f']="btech3b";
				    echo 'BTech3B:'.$qr['subname']."<br>";
				}
			    ?>
				</p>
				<div id="learn_more"><a href="contact.php">Apply Leaves</a></div>
            
			</div>
			
            <div class="cleaner"></div>
        </div> <!-- end of tooplate_middle -->
        
        <div id="tooplate_main">
        	
            <div class="col_w900">
            <div class="col_allw280 fp_service_box">
                <h3>Leaves applied by teachers</h3>
                <img src="./sampu/images/tick-48px.png" alt="Tick Image" />
                <p> Maecenas blandit, ligula in commodo condimentum, velit est cursus mi, in interdum turpis orci turpis.</p>
                <a class="more" href="#">Detail</a>
            </div>
			<div class="cleaner"></div>
        </div>
        
        <div class="col_w900 col_w900_last">
            <div class="col_w580 float_l">
                
				<h2>Welcome To Hexa Bokeh</h2>
                <img src="./sampu/images/tooplate_image_01.png" alt="image" class="image_wrapper image_fl" />
                <p><em>Vestibulum mauris purus, tincidunt auctor pretium at, blandit vel nisi. Donec accumsan semper lobortis.</em></p>
                <p>Hexa Bokeh is one of the <a rel="nofollow" href="http://www.tooplate.com/free-templates">free templates</a> by tooplate. You may edit and apply this template for any purpose.  Credits go to <a rel="nofollow" href="http://www.photovaco.com">Free Photos</a> for photos and <a rel="nofollow" href="http://www.thewebdesignblog.co.uk">thewebdesignblog.co.uk</a> for icons. Quisque in diam a justo condimentum molestie.</p>	
                
            </div>
            <div class="col_w280 float_r">
            
                <h3>Testimonial</h3>
                <blockquote>
                <p>Fusce nec felis id lacus sollicitudin vulputate. Proin tincidunt, arcu id pellentesque accumsan, neque dolor imperdiet ligula, quis viverra tellus nulla a odio. Curabitur vitae enim risus, at placerat turpis. Mauris feugiat suscipit tempus fringilla, felis in velit.</p>
                
                <cite><a href="#">Van Miller</a> - <span>Web Designer</span></cite>
                </blockquote>
            
            </div>  
			
            <div class="cleaner"></div>   
		</div>
            
        </div><div id="tooplate_main_bottom"></div>
    
    	<div id="tooplate_footer">
		
            Copyright © 2048 <a href="#">Company Name</a>
            
        </div>
    
    </div> <!-- end of tooplate_wrapper -->
</div> <!-- end of tooplate_outer_wrapper -->
<h2 class="neon" align="right" id="txt"></h2>
</body>
</html>