
<?php
$uploaddir = 'files/';

if (isset($_FILES['data']['name'])) {
  $now = new DateTime();
  $uploadfile = $uploaddir . $now->getTimestamp() . '-' . basename($_FILES['data']['name']);

  if (move_uploaded_file($_FILES['data']['tmp_name'], $uploadfile)) {
    echo "good job agent";
  } else
    print_r($_FILES);
} else
  echo "failed";
?>


