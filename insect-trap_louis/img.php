
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
<h1>YTCG base server</h1>
<br>
<br>
<h3>Agent's shots list</h3>
<br>
<p>Full list of uploaded shots by the agent. Each entry loads on click.</p>
<br>
<br>
<?php

echo "<table class='pretty-table'><tr><th scope='col'></th><th scope='col' width='200px'>Upload m/d/Y H:i:s</th><th scope='col'></th></tr>";

foreach (glob("files/*.jpg") as $file) 
{
  $dt = explode('/', explode('-', $file)[0])[1];
  echo "<tr style='cursor:pointer;' onclick=\"$('.item').css('display','none');$('#img";
  echo $dt;
  echo "').css('display','block');";
  echo "\">";
  echo "<td scope='row'><img src='../src/cam_icon.png' /></td><td><div>";
  echo date('m/d/Y H:i:s', $dt);
  echo "</div></td><td><div id='div";
  echo $dt;
  echo "'><img class='item' id='img";
  echo $dt;
  echo "' src='";
  print_r($file);
  echo "' style='display:none' /></div></td></tr>";
}
echo "</table>";
?>
</body></html>                 


