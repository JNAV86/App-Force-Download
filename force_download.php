<?php
//if(isset($_POST['/ConsoleApplication1-Hello World.exe'])){
    //$file = $_POST['/ConsoleApplication1-Hello World.exe'];
	$file = '/ConsoleApplication1-Hello World.exe';
    // Add a file type check here for security purposes so that nobody can-
    // download PHP files or other sensitive files from your server by spoofing this script
    header('Content-type: application/exe');
    header('Content-Disposition: attachment; filename="'.$file.'"');
    readfile('mystery_folder/'.$file);
    exit();
//}
?>
