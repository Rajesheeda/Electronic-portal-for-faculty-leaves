<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1" />
<?php
require 'C:\xampp\htdocs\miniproject\PHP_Mail_Project\PHPMailer-master\PHPMailerAutoload.php';
// table name 
if(isset($_POST['submit']))
{
session_start();
$u=$_SESSION['u'];
$subject="Lbrceleaves('$u')";
$from_name= $u;
$from_date=$_POST['fromdate'];
$to_date=$_POST['todate'];
$reason=$_POST['reason'];



							$mail = new PHPMailer;
							$mail->isSMTP();                                      // Set mailer to use SMTP
							$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
							$mail->SMTPAuth = true;                               // Enable SMTP authentication
							$mail->Username = 'sasi070419@gmail.com';                 // SMTP username
							$mail->Password = '9885003799sasi';                           // SMTP password
							$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
							$mail->Port = 587;                                    // TCP port to connect to
						    $mail->From = $from_name;
							$mail->FromName = 'LbrceAcadamy';
							//database code here ********************
							mysql_connect("localhost","root","");
							mysql_select_db("collage");
							$insert_image="SELECT * from faculty where name='$u'";
                            $qr=mysql_query($insert_image);
                            $row1=mysql_fetch_array($qr);
							$image='"data:image/jpeg;base64,' . base64_encode($row1['image']).'"';
                            echo "<img src='.$image.'>";
						    $sql = "select distinct mail from faculty where name in(select faculty from gmail)";
							$qry=mysql_query($sql);
							while($row=mysql_fetch_array($qry))	    
	    					{
	    						    $mailid = $row['mail'];
	    						    $mail->clearAddresses();
	    							$mail->addAddress($row['mail']);
							        $mail->AddEmbeddedImage('ppm.jpeg','logo_2u');
							    	//$mail->AddBCC($row['gmail']);
	    					
	    					//database code end here *****************
							//$mail->addAddress($to_name);               // Name is optional
/*
							$mail->addReplyTo('contact@imavijayawada.in', 'Contact Team');
*/
								
							
							$mail->isHTML(true);                                  // Set email format to HTML
						
							$mail->Subject = $subject;
							$mail->Body    = "<p>Dear Professor,</p><br><p align='justify'><b>i $u will be absent from $from_date to $to_date so please take my class if you are free thanking you<br><h3>Reason</h3><hr><p>$reason</p><img src='cid:logo_2u' alt='myimage'>";
							/*
							$mail->AltBody = "Welcome to " .$Sitename. " " .$Email;
*/
							if(!$mail->send())
							 {
								echo 'Message could not be sent. to:';
								echo $mailid;
								echo "</br>";
								//echo 'Mailer Error: ' . $mail->ErrorInfo;
								$sql2="insert into mailnsend values('".$mailid."')";
								$qry2=mysql_query($sql2);
							} 
							else
							 {
								echo 'Message has been sent to:';
								echo $mailid;
								echo "</br>";
							}
							
							
						}
	}
						
?>

