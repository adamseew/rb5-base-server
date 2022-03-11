	
<html><head>
<link rel="stylesheet" type="text/css" href="src/main.css" />
</head><body>
<h1>YTCG base server</h1>
<br>
<br><p><a href="#" onclick="window.open('editor.php','editor')">Setup next new agent</a></p>
<br>
<?php
$dir = array_filter(glob('*'), 'is_dir');

echo "<table class='pretty-table'><caption>List of available agents</caption><tr><th scope='col'></th><th scope='col'>Available agents</th><th scope='col'>Status</th></tr>";

foreach($dir as $item) {
  if ($item !== 'src') {
    echo "<tr><td scope='row'><a href='";
    echo $item;
    echo "/' style='display:block;'>";
    echo "<img src='src/eye_icon.png' /></a></td><td>";
    echo $item;
    echo "</td><td><img src='src/";

    $files = scandir($item . '/files', SCANDIR_SORT_DESCENDING);
    $dt = explode('-', $files[0])[0];
    $now = new DateTime();

    if (abs($dt - $now->getTimestamp()) < 60 * 60 * 2 /* (2 hours) */) {
      echo "filter-green.png' title='Agent contacted base recently!'";
    } else {
      echo "filter-red.png' title='Agent has not cantacted base for more than 2 hours!'";
    }

    echo "/></td></tr>";
  }
}
echo "</table>";
?>
</body></html>


