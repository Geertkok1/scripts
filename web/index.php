<?php
echo "Ping test tool";
echo "<form action="index.php">
Hostname or IP to ping <input type="text" name="host" id="host"></input>
<input type="submit" value="Submit">
</form>";
$host = $_GET['host'];
$command = escapeshellcmd('python /var/www/html/checkifup.py \'$host\' ');
$output = shell_exec($command);
echo $output;
 ?>
