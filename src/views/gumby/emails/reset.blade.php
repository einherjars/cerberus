<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Password Reset</h2>

		<p>To reset your password, <a href="{{ route('cerberus.reset.form', [$hash, urlencode($code)]) }}">click here.</a>  If you did not request a password reset, you can safely ignore this email - nothing will be changed.</p>
		<p>Or point your browser to this address: <br /> {{ route('cerberus.reset.form', [$hash, urlencode($code)]) }}</p>
		<p>Thank you, <br />
			~The Admin Team</p>
	</body>
</html>