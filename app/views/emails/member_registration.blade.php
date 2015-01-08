<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<div>
			Dear <?php echo $name;?>,<br/><br/>
			To complete registration,please use link:<br/>
			{{ HTML::link( $clickUrl ) }}
			
			
			<br/>
			<br/>
			<b>Sincerely,</b><br/>
			<b>DigitalLagos.tv Administration</b>
			
		</div>
	</body>
</html>
