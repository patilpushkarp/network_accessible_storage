<?php
$base_directory = "/var/www/webdav/usb0/";

if(unlink($base_directory.$_POST["delete"]))
    echo "File Deleted.";
else
	echo "Cant be deleted";
?>
