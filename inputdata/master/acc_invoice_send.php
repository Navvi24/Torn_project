<?php

	include("../conn/conn.php");

?>

<!DOCTYPE html>

<html lang="en">

<head>

	<title>Send mail :: World Auto</title>



	<?php include('../head.php'); ?>



</head>



<body>

<?php

/*

*	find email id

*/

$query_01=mysql_query("SELECT * FROM bajaj_accident_job b

join  bajaj_survey_picklist b1 on b1.id=b.serveyer_id

where b.job_id='".$_GET['job_id']."';");

while($r_01=mysql_fetch_array($query_01))

{

	$email_id = $r_01['email_id'];

	$name = $r_01['survey_name'];

	$file_name = $r_01['job_code'].'_invoice.pdf';

	

}





?>

<br>



<div class="main">

    <div class="main-inner">

        <div class="container">

            <div class="row">

                <div class="span12">



					<!--============[ SEARCH ]==================-->

                    <div class="widget" >

                        <div class="widget-header">

                            <i class=" icon-envelope"></i>

                            <h3>Send mail</h3>

                        </div>

                        <!-- /widget-header -->



                        <div class="widget-content">

    					<form method="post">

                        <table>

                            <tr>

                                <th>Survey Name:</th>

                                <td><input type="text" id="survey_name" name="survey_name" value="<?php echo $name?>" readonly></td>

                            

                            </tr>

                            <tr>

                                <th>Survey E-mail ID:</th>

                                <td><input type="text" id="email_id" name="email_id" value="<?php echo $email_id?>" readonly></td>

                            

                            </tr>

                            <tr>

                            <th>View:</th>

                            <td><a href="../service/invoice/<?php echo $file_name?>" target="_blank"><?php echo $file_name?></a></td>

                            

                            </tr>

                            <tr>

                                <td><input type="hidden" id="job_id" name="job_id" value="<?php echo $_GET['job_id']?>" /></td>

                                <td><input type="submit" id="submit" name="submit" value="send mail" class="btn btn-success "/>

                                

                                <img src="../images/loader.gif" id="loder"/>

                                

                                

                                </td>

                            

                            </tr>

                        

                        </table>

                        

                        </form>

                        

                        <?php

						if($_POST['submit'] == 'send mail')

						{

						/*

						*	find email id

						*/

						$query_01=mysql_query("SELECT * FROM bajaj_accident_job b

						join  bajaj_survey_picklist b1 on b1.id=b.serveyer_id

						where b.job_id='".$_POST['job_id']."';");

						while($r_01=mysql_fetch_array($query_01))

						{

							$job_id=$r_01['job_id'];

							$to_email_id = $r_01['email_id'];

							$name = $r_01['survey_name'];

							$file_name = $r_01['job_code'].'_invoice.pdf';

						}

						

						

						?>

						

						<?php

						require 'PHPMailerAutoload.php';
						require_once('class.phpmailer.php');
						$query=mysql_query("SELECT * FROM `bajaj_company_master`") or die(mysql_error());

						$r=mysql_fetch_array($query);
				
						$email_id=$r['email_id'];
				
						$epass=$r['email_password'];
				
						$remail_id=$r['reply_email'];
				
						$FromName=$r['company_title'];

						$mail = new PHPMailer;

						$mail->SMTPDebug = 0;                               // Enable verbose debug output
						
						$mail->isSMTP();                                      // Set mailer to use SMTP
						$mail->Host = 'mail.worldauto.in';  // Specify main and backup SMTP servers
						$mail->SMTPAuth = true;                               // Enable SMTP authentication
						$mail->Username = $email_id;                 // SMTP username
						$mail->Password = $epass;                           // SMTP password
						$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
						$mail->Port = 587;       
													 // TCP port to connect to
						  
						
						$mail->From = $email_id;
						$mail->FromName = $FromName;

						$mail->addAddress($to_email_id);     // Add a recipient

						//$mail->addAddress('ellen@example.com');               // Name is optional

						$mail->addReplyTo($remail_id, 'Information');

						//$mail->addCC('next_software@rediffmail.com');

						//$mail->addBCC('srsurani@yahoo.com');

						

						$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

						echo $mail->addAttachment('../service/invoice/'.$file_name.'');         // Add attachments

						//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

						$mail->isHTML(true);                                  // Set email format to HTML

						

						$mail->Subject = 'World Auto';

						$mail->Body    = 'This is auto generated mail!!';

						$mail->AltBody = '';

						

						if(!$mail->send()) {

							echo 'Message could not be sent.';

							echo 'Mailer Error: ' . $mail->ErrorInfo;

						} else {

							

							//echo 'Message has been sent';

							?>

							<p class="label label-info"> Message has been sent</p>

							

							<?php

							

						}

						

						/*ststus update */

$query=mysql_query("update `bajaj_accident_job` set invoice_send_status='close' where job_id= '".$job_id."'");

						

						}//end if for submit

						?>



                        </div>

                        <!-- /widget-content -->



                    </div>

                    <!-- /widget -->

					<!--====[ end SEARCH ]==================-->





                </div>

                <!-- /span12 -->

            </div>

            <!-- /row -->

        </div>

        <!-- /container -->

    </div>

    <!-- /main-inner -->



</div>

<!-- /main -->



 <!-- Placed at the end of the document so the pages load faster --> 

<script src="../js/jquery-1.7.2.min.js"></script> 

<script src="../js/bootstrap.js"></script>



<link rel="stylesheet" href="../css/jquery.datetimepicker.css">

    

    <link rel="stylesheet" type="text/css" href="../css/jquery.autocomplete.css" />



    <script src="../js/jquery.js"></script>

    <script src="../js/jquery-1.8.2.js" type="text/javascript"></script>

  

    <script src="../js/jquery.datetimepicker.js"></script>

    <script type="text/javascript" src="../js/jquery.autocomplete.js"></script> 

    <script type="text/javascript" src="../js/jquery.validate.min.js"></script>

    <script src="../js/jquery.validate.js" type="text/javascript"></script>

	<script>

    $(document).ready(function()

    {

        $('#loder').hide();

        $('#submit').click(function(){

            

            $('#loder').show();

            })

        

    });

    

    

    </script>

  

</body>

</html>

