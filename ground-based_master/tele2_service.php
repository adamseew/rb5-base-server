
<?php

if (isset($_GET['x']) && isset($_GET['y'])) {

    $format = strtolower($_GET['format']) == 'json' ? 'json' : 'xml';
    $x = intval($_GET['x']);
    $y = intval($_GET['y']);

    $fp = fopen('tele2_data', 'w');
    if (flock($fp, LOCK_EX)) {
        fwrite($fp,  'x:'.strval($x));
	fwrite($fp, ' y:'.strval($y));
	fflush($fp);
        flock($fp, LOCK_UN);
    }
    fclose($fp);

}

?>

