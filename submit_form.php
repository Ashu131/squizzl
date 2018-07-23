<?php
include('config.php');
error_reporting();
try {
if(isset($_POST['contactFrmSubmit']) && !empty($_POST['fname']) && !empty($_POST['email']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) && !empty($_POST['lname']) && !empty($_POST['phone']) && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['locality']) && !empty($_POST['zip'])) 
{
		$fname 		= 	mysqli_real_escape_string($conn,$_POST['fname']);
		$lname 		= 	mysqli_real_escape_string($conn,$_POST['lname']);
		$email 		= 	mysqli_real_escape_string($conn,$_POST['email']);
		$phone 		= 	mysqli_real_escape_string($conn,$_POST['phone']);
		$locality 	= 	mysqli_real_escape_string($conn,$_POST['locality']);
		$city 		= 	mysqli_real_escape_string($conn,$_POST['city']);
		$state 		= 	mysqli_real_escape_string($conn,$_POST['state']);
		$zip 		= 	mysqli_real_escape_string($conn,$_POST['zip']);
// mail code
$to = "squizzlworld@gmail.com";
$subject = "Squizzl- [New customer order]";
$txt = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #f5f8fa; color: #74787E; height: 100%; hyphens: auto; line-height: 1.4; margin: 0; -moz-hyphens: auto; -ms-word-break: break-all; width: 100% !important; -webkit-hyphens: auto; -webkit-text-size-adjust: none; word-break: break-word;">
		<style>
		@media  only screen and (max-width: 600px) {
		.inner-body {
		width: 100% !important;
		}
		.footer {
		width: 100% !important;
		}
		}
		@media  only screen and (max-width: 500px) {
		.button {
		width: 100% !important;
		}
		}
		</style>
		<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #f5f8fa; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
			<tr>
				<td align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
					<table class="content" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
						<tr>
							<td class="header" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 25px 0; text-align: center;">
								<a href="http://www.squizzlworld.com" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #bbbfc3; font-size: 19px; font-weight: bold; text-decoration: none; text-shadow: 0 1px 0 white;">
									Squizzl
								</a>
							</td>
						</tr>
						<!-- Email Body -->
						<tr>
							<td class="body" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #FFFFFF; border-bottom: 1px solid #EDEFF2; border-top: 1px solid #EDEFF2; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
								<table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #FFFFFF; margin: 0 auto; padding: 0; width: 570px; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px;">
									<!-- Body content -->
									<tr>
										<td class="content-cell" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 35px;">
											<h1 style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #2F3133; font-size: 19px; font-weight: bold; margin-top: 0; text-align: left;">You have received an order from '.$fname.'&nbsp;'.$lname.'. The order is as follows</h1>
											<table class="action" align="center" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 30px auto; padding: 0; text-align: center; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
												<tr>
													<td align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
														<table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
															<tr>
																<td align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
																	<table border="0" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
																		<tr>
																			<td>Name</td><td>'.$fname.'&nbsp;'.$lname.'</td>
																		</tr>
																		<tr>
																			<td>Phone No.</td><td>'.$phone.'</td>
																		</tr>
																		<tr>
																			<td>Email</td><td>'.$email.'</td>
																		</tr>
																		<tr>
																			<td>Locality</td><td>'.$locality.'</td>
																		</tr>
																		<tr>
																			<td>City</td><td>'.$city.'</td>
																		</tr>
																		<tr>
																			<td>State</td><td>'.$state.'</td>
																		</tr>
																		<tr>
																			<td>Zip</td><td>'.$zip.'</td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
											<p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787E; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;">Regards,<br>Squizzl</p>
											<table class="subcopy" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; border-top: 1px solid #EDEFF2; margin-top: 25px; padding-top: 25px;">
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
								<table class="footer" align="center" width="570" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 0 auto; padding: 0; text-align: center; width: 570px; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px;">
									<tr>
										<td class="content-cell" align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 35px;">
											<p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; line-height: 1.5em; margin-top: 0; color: #AEAEAE; font-size: 12px; text-align: center;">© 2018 Squizzl. All rights reserved.</p>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>
';
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: '.$email. "\r\n";
$headers .= 'Cc: amit.khare@yocreativ.com' . "\r\n";
if(mail($to,$subject,$txt,$headers)){

$iq="INSERT INTO `checkoutform`(`fname`, `lname`, `email`, `phone`, `locality`, `city`, `state`, `zip`) VALUES ('".$fname."','".$lname."','".$email."','".$phone."','".$locality."','".$city."','".$state."','".$zip."')";
if($run=mysqli_query($conn, $iq)){
	$tocustomer = $email;
	$sub = "CONFIRMED - Your Order for Free Squizzl Magazine is being Processed!";
	$msg = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #f5f8fa; color: #74787E; height: 100%; hyphens: auto; line-height: 1.4; margin: 0; -moz-hyphens: auto; -ms-word-break: break-all; width: 100% !important; -webkit-hyphens: auto; -webkit-text-size-adjust: none; word-break: break-word;">
		<style>
		@media  only screen and (max-width: 600px) {
		.inner-body {
		width: 100% !important;
		}
		.footer {
		width: 100% !important;
		}
		}
		@media  only screen and (max-width: 500px) {
		.button {
		width: 100% !important;
		}
		}
		</style>
		<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #f5f8fa; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
			<tr>
				<td align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
					<table class="content" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
						<tr>
							<td class="header" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 25px 0; text-align: center;">
								<a href="http://www.squizzlworld.com" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #bbbfc3; font-size: 19px; font-weight: bold; text-decoration: none; text-shadow: 0 1px 0 white;">
									Squizzl
								</a>
							</td>
						</tr>
						<!-- Email Body -->
						<tr>
							<td class="body" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #FFFFFF; border-bottom: 1px solid #EDEFF2; border-top: 1px solid #EDEFF2; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
								<table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #FFFFFF; margin: 0 auto; padding: 0; width: 570px; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px;">
									<!-- Body content -->
									<tr>
										<p>Dear '.ucfirst($fname).'&nbsp;'.ucfirst($lname).'</p>
										<p>Your order free magazine has been confirmed and being processed.Your order will be delivered on given address.</p>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
								<table class="footer" align="center" width="570" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 0 auto; padding: 0; text-align: center; width: 570px; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px;">
									<tr>
										<td class="content-cell" align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 35px;">
											<p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; line-height: 1.5em; margin-top: 0; color: #AEAEAE; font-size: 12px; text-align: center;">© 2018 Squizzl. All rights reserved.</p>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>
';
// Always set content-type when sending HTML email
$headrs = "MIME-Version: 1.0" . "\r\n";
$headrs .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headrs .= 'From: squizzlworld@gmail.com' ."\r\n";
mail($tocustomer,$sub,$msg,$headrs);
}
echo mysqli_error($conn);
$status = 'ok';
}
else {
$status = 'err';
}
// Output status
echo $status;die;
}
} catch (Exception $e) {
	echo $e;
}
?>