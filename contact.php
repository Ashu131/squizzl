<a href="magazines" class="btn side_btn button">Get A Free Magazine</a>

<div class="contact jarallax" id="contact">
	<div class="container">
		<h3 class="w3l-head text-center">contact us</h3>
		<div class="agileits_w3layouts-contact">
			<div class="col-md-6 col-sm-12 agileinfo-contact-left">
				<div class="w3ls-address ">
					<span class="fa fa-map-marker icon" aria-hidden="true"></span>
					<h6>Address:</h6><p class="yellow">281, AFNOE, Sector - 7, Dwarka</p>
				</div>
				<div class="w3ls-address mail">
					<span class="fa fa-envelope icon" aria-hidden="true"></span>
					<h6>Mail:</h6><a href="mailto:squizzlworld@gmail.com" class="yellow">squizzlworld@gmail.com</a>
				</div>
				<div class="w3ls-address">
					<span class="fa fa-phone icon" aria-hidden="true"></span>
					<h6>Phone:</h6><p class="yellow">+91-9953260467</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-12  agileits_w3layouts-map">
				<form  action="#" method="post" id="contact-form-popup" class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-sm-2" for="name">Name :</label>
						<div class="col-sm-10">
							<input type="text" name="name" placeholder="Name"  id="name" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="email">
							Email :
						</label>
						<div class="col-sm-10">
							<input type="email"  name="email" placeholder="Email"  id="email" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="phone">
							Phone :
						</label>
						<div class="col-sm-10">
							<input type="tel"  name="phone" pattern="[0-9]{10}" minlength="10" maxlength="13" oninvalid="setCustomValidity('Enter valid mobile number')" onchange="try{setCustomValidity('')}catch(e){}" placeholder="Phone"  id="phone" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="address">
							Address :
						</label>
						<div class="col-sm-10">
							<input type="text" name="address" placeholder="Address"  id="address" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="msg">
							Message :
						</label>
						<div class="col-sm-10">
							<textarea rows="4" placeholder="Your Message" name="message"  id="msg" class="form-control"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="g-recaptcha" data-sitekey="6LcqCVwUAAAAAIZE1nzY0sBuLgxqdNaGUbT0mFtj"></div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<input class="btn btn-primary" type="submit" name="submit" value="SEND" class="form-control">
						</div>
					</div>
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php
include('config.php');
if (!empty($_POST['submit']) && isset($_POST['submit'])) {
if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
$secret="6LcqCVwUAAAAAIzFIKRpkmtdioqm34Cof3OlkoF5";
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success){
	
$name 		= 	mysqli_real_escape_string($conn,$_POST['name']);
$email 		= 	mysqli_real_escape_string($conn,$_POST['email']);
$phone 		= 	mysqli_real_escape_string($conn,$_POST['phone']);
$address 	= 	mysqli_real_escape_string($conn,$_POST['address']);
$message 	=	mysqli_real_escape_string($conn,$_POST['message']);
// mail code 
$to = "squizzlworld@gmail.com";
$subject = "Squizzl- Contact form filled on Website";
$txt = "
<!doctype html>
<head>
		<title></title>
</head>
<body>
	
		<table>
				<tr><td>Name</td><td>".$name." </td></tr>
				<tr><td>Email</td><td>".$email." </td></tr>
				<tr><td>Phone</td><td>".$phone."</td></tr>
				<tr><td>Address</td><td>".$address."</td></tr>
				<tr><td>Message</td><td>".$message." </td></tr>
		</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: '.$email. "\r\n";
$headers .= 'Cc: yatinder.kataria@yocreativ.com; amit.khare@yocreativ.com' . "\r\n";

if(mail($to,$subject,$txt,$headers)){

$iq="INSERT INTO contact_form(name, email, phone,address, msg) VALUES ('".$name."','".$email."','".$phone."','".$address."','".$message."')";
$run=mysqli_query($conn, $iq);
echo '<script>window.alert("your query is submitted successfully! ");window.location.href="http://squizzlworld.com"</script>';
} else{
echo '<script>window.alert("your query is not submitted ! Please try again after some time.");window.location.href="http://squizzlworld.com"</script>';}
}
else {
echo '<script>window.alert("Captcha failed ! try again");window.location.href="http://squizzlworld.com"</script>';
} 
}else{
    echo '<script>window.alert("Please click on recaptcha box.");window.location.href="http://squizzlworld.com"</script>';
}
}
?>