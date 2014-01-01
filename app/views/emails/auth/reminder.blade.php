<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<h2>Password Reset</h2>

		<div>
            To reset your password, complete this form: {{ URL::to('password/reset', array($token)) }}.
		</div>
	</body>
</html>