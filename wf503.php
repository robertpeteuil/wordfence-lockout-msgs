<?php
wfUtils::doNotCache();
header('HTTP/1.1 503 Service Temporarily Unavailable');
header('Status: 503 Service Temporarily Unavailable');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>503 Service Temporarily Unavailable</title>
</head>

<body>
<h1><center>503 Service Temporarily Unavailable</center></h1>
<hr>
<center>nginx</center>
</body>

</html>
<?php exit(); ?>
