<?php
ini_set('display_errors', 1);
echo "Ping test tool";
echo "<form action=\"index.php\">
Hostname or IP to ping <input type=\"text\" name=\"host\" id=\"host\"></input>
<input type=\"submit\" value=\"Submit\">
</form>";
if(isset($_GET['host'])){$host = $_GET['host'];
$command = escapeshellcmd('python /var/www/html/scripts/web/checkifup.py '.$host);
$output = shell_exec($command);
echo $output;}
 ?>
