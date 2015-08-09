<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bardulfus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap-theme.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an
            <strong>outdated</strong>browser. Please
            <a href="http://browsehappy.com/">upgrade your browser</a>to improve your experience.</p>
    <![endif]-->

    <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
    	<tr>
    		<form name="login_form" method="post" action="php/check_login.php">
    			<td>
    				<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
    					<tr>
    						<td colspan="3">
    							<strong>Member Login</strong>
    						</td>
    					</tr>
    					<tr>
    						<td width="78">Username</td>
    						<td width="6">:</td>
    						<td width="294">
    							<input name="myusername" type="text" id="myusername">
    						</td>
    					</tr>
    					<tr>
    						<td>Password</td>
    						<td>:</td>
    						<td>
    							<input name="mypassword" type="text" id="mypassword">
    						</td>
    					</tr>
    					<tr>
    						<td>&nbsp;</td>
    						<td>&nbsp;</td>
    						<td>
    							<input type="submit" name="Submit" value="Login">
    						</td>
    					</tr>
    				</table>
    			</td>
    		</form>
    	</tr>
    </table>

    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>