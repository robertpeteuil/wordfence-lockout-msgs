<?php
wfUtils::doNotCache();
header('HTTP/1.1 403 Forbidden');
header('Status: 403 Forbidden');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>403 Forbidden</title>
</head>

<body>
<h1><center>403 Forbidden</center></h1>
<hr>
<center>nginx</center>
</body>

</html>
<?php exit(); ?>
