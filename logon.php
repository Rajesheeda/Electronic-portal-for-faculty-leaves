<script>

</script>
<body onload="">
<?php
        
        $conn = mysql_connect("localhost","root");
        $con=mysql_select_db("collage",$conn); 
        $user1=$_POST["username"];
        $password1=$_POST["password"];
        $found=0;
        $query1="select * from user";
        $sq=mysql_query($query1);
        while($row=mysql_fetch_array($sq))
        {
             $un=$row['username'];
             $pn=$row['password'];
             if($user1==$un && $password1==$pn)
             {
			   $found=1;
               session_start();
           	   $_SESSION['u'] = $row['name'];
		       header("Location: index1.php");
	         }
	    }
       if($found==0)
       {
	           include "login1.html";
       }
?>
