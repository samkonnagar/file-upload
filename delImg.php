<?php
$fileName = $_GET['delImg'];

unlink("uploads/$fileName");

echo "File Deleted";

?>