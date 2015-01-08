<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<div>
			Dear <?php echo $name;?>,<br/><br/>
			You have successfully registered your account on DigitalLagos.tv website.<br/><br/>

			Your login details are as as follows:<br/>
			Email: <?php echo $email;?><br/>
			Password: Used during registration<br/><br/>

			Your membership details are as follows:<br/>
			Initial Payment: <?php echo $initial_payment;?><br/>
			Available credits: <?php echo $credits;?><br/>
			Next payment date: <?php echo $next_payment;?><br/>
			Subscription Start Date: <?php echo date('Y-m-d');?><br/>
			
			<br/>
			<br/>
			<b>Sincerely,</b><br/>
			<b>DigitalLagos.tv Administration</b>
			
		</div>
	</body>
</html>
