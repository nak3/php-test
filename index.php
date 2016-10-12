<html>
<head>
	<title>Test PHP</title>
</head>
<body>
<h1>PHP is working</h1>
<p>
<?php
    while(list($key, $value) = each($_SERVER)) {
        echo "<tr><td>$key</td><td>", $value, "</td></tr>\n";
    }
?>
</p>
</body>
</html>
