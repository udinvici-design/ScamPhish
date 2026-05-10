<?php

$date = date('dMYHis');
$imageData=$_POST['cat'];

if (!empty($_POST['cat'])) {
    error_log("Received" . "\r\n", 3, "Log.log");
}

$filteredData=substr($imageData, strpos($imageData, ",")+1);
$unencodedData=base64_decode($filteredData);

// Direct save in existing Pictures folder (assume folder already exists)
$fp = fopen( 'Pictures/cam'.$date.'.png', 'wb' );
fwrite( $fp, $unencodedData);
fclose( $fp );

exit();
?>
