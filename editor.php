
<html><head>
<link rel="stylesheet" type="text/css" href="../src/main.css" />
</head><body>
<form action="initializeagent.php" method="POST">
<table class='pretty-table'>
<tr><td>
Agent:
</td><td>
<select name="agent">
<?php
$dir = array_filter(glob('*'), 'is_dir');

foreach($dir as $item) {
  if ($item !== 'src') {

    $files = scandir($item . '/files', SCANDIR_SORT_DESCENDING);
    $dt = explode('-', $files[0])[0];

    echo "<option value='" . $item . "'>" . $item;
    if($dt !== '..')
    {
        echo " (slot used!)";
    }
    echo "</option>";
  }
}
?>
</select>
</td></tr>
<tr><td>
Destination IPv4:
</td><td>
<?php
$ip = getenv('HTTP_CLIENT_IP')?:
      getenv('HTTP_X_FORWARDED_FOR')?:
      getenv('HTTP_X_FORWARDED')?:
      getenv('HTTP_FORWARDED_FOR')?:
      getenv('HTTP_FORWARDED')?:
      getenv('REMOTE_ADDR');
echo '<input type="text" name="ip" value="';
echo $ip;
echo '">';
?>
</td></tr>
<tr><td colspan="2">
<center>
<button type="submit" value="Submit">Submit</button>
</center>
</td></tr>
</table>
</form>
</body>
</html>

