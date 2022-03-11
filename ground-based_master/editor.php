
<html><head>
<link rel="stylesheet" type="text/css" href="../src/main.css" />
</head><body>
<form action="toagent.php" method="POST">
<table class='pretty-table'>
<tr><td>
Status:
</td><td>
<select name="status">
  <option value="Active">Active</option>
  <option value="Sleep">Sleep</option>
</select>
</td></tr>
<tr><td>
Capture interval:
</td><td>
<input type="number" name="capturerInterval" value="1">
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


