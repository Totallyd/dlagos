<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<div>
			Dear <?php //echo $name;?>,<br/><br/>
			You have filled in “Forgot password” form on DigitalLagos.tv. To reset your password, complete this form: {{ URL::to($redirect_route, array($token)) }}.
			<br/>
			<br/>
			<br/>
			<b>Regards,</b><br/>
			<b>Digitall.Tv Team</b>
			
		</div>
	</body>
</html>
