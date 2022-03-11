
<?php
if(isset($_POST["status"])){
	file_put_contents('toagent.txt', 
		'Status:' . $_POST["status"] . ';' .
		'capturerInterval:' . $_POST["capturerInterval"]
	);
	echo '<html><head><link rel="stylesheet" type="text/css" href="../src/main.css" /></head><body>';
	echo '<p><b>ok thank you</b>, the agent will be informed on the next scheduled update!</p>';
	echo "<script>var timer = setTimeout(function() {window.close();},3000); </script>";
	echo '</body></html>';
} else {
	$file_handle = fopen("toagent.txt", "r");
	while (!feof($file_handle)) {
		echo fgetss($file_handle);
	}
	fclose($file_handle);
}
?>


