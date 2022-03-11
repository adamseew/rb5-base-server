
<?php
putenv('TMPDIR=/var/www/html/tmp');
$uploaddir = '/var/www/html/fatman/files/';

if (is_uploaded_file($_FILES['file']['tmp_name']))
{
  $now = new DateTime();
  $uploadfile = $uploaddir . $now->getTimestamp() . '-' . basename($_FILES['file']['name']);
        
  if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile))
  {
    echo "good job agent";
  }
  else
    print_r($_FILES);
}
else
{
  echo "failed";
  print_r($_FILES);
}
?>

