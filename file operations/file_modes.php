<?php
echo "<h2>PHP file modes </h2>";
$filename = "lab.txt";


$file = fopen($filename, "w");
fwrite($file, "This is Write Mode (w)\n");
fclose($file);
echo "Write Mode (w): File Created / Overwritten<br>"
$file = fopen($filename, "a");
fwrite($file, "This is Append Mode (a)\n");
fclose($file);
echo "Append Mode (a): Content Added<br>";


$file = fopen($filename, "r");
echo "<h3>Read Mode (r): File Content</h3>";
echo "<pre>" . fread($file, filesize($filename)) . "</pre>";
fclose($file);

$file = fopen($filename, "r+");
fwrite($file, "Added using r+ mode\n");
fclose($file);
echo "Read + Write Mode (r+): Content Updated<br>";

$file = fopen("write_read.txt", "w+");
fwrite($file, "This is w+ mode (write + read)\n");
rewind($file);
echo "<h3>w+ Mode Output:</h3>";
echo "<pre>" . fread($file, filesize("write_read.txt")) . "</pre>";
fclose($file);


$file = fopen("append_read.txt", "a+");
fwrite($file, "This is a+ mode (append + read)\n");
rewind($file);
echo "<h3>a+ Mode Output:</h3>";
echo "<pre>" . fread($file, filesize("append_read.txt")) . "</pre>";
fclose($file);

?>