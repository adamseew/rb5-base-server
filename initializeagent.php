
<?php
if(isset($_POST["ip"])){
        file_put_contents('initializeagent.txt',
        	$_POST["ip"] . ';' .
                $_POST["agent"]
        );
        echo '<html><head><link rel="stylesheet" type="text/css" href="src/main.css" /></head><body>';
        echo '<p><b>done</b>, the next agent will be allocated on desired slot!</p>';
        echo "<script>var timer = setTimeout(function() {window.close();},3000); </script>";
        echo '</body></html>';
} else {
        $file_handle = fopen("initializeagent.txt", "r");
        while (!feof($file_handle)) {
		$ip = getenv('HTTP_CLIENT_IP')?:
		      getenv('HTTP_X_FORWARDED_FOR')?:
		      getenv('HTTP_X_FORWARDED')?:
		      getenv('HTTP_FORWARDED_FOR')?:
		      getenv('HTTP_FORWARDED')?:
		      getenv('REMOTE_ADDR');

		$fd = fgetss($file_handle);
		if (explode(';', $fd)[0] == $ip) 
		{
			echo "newagent:" . explode(';', $fd)[1];
		}
        }
        fclose($file_handle);
}
?>

