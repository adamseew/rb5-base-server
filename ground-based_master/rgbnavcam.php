
<?php
$files = scandir('files', SCANDIR_SORT_DESCENDING);
$newest_file = $files[0];
print_r($newest_file);
?>


