<?php 
header("Content-type: application/text");
header("Content-Disposition: attachment; filename=book.txt");

$filename = 'bookInfo.txt';
$fp = fopen($filename,'r');
$content = fread($fp,filesize($filename));
echo $content;
fclose($fp);
?>