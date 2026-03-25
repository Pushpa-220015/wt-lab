<?php 
echo "<h2>PHP file functions</h2>";

$filename = "lab.txt";
$file = fopen($filename,"r");
echo "<h3> file contents:</h3>";
echo "<pre>".fread($file,filesize($filename)) . "</pre>";
fclose($file);
echo "<h3> using file_get_contents():</h3>";
echo "<pre>" . 
file_get_contents($filename) . "<pre>";

echo "<h3>Reading line by line using file():</h3>";
$lines = file($filename);
foreach ($lines as $line) {
    echo $line . "<br>";
}

echo "<h3>File Information:</h3>";

echo "File Exists: " . (file_exists($filename) ? "Yes" : "No") . "<br>";
echo "File Size: " . filesize($filename) . " bytes<br>";
echo "File Type: " . filetype($filename) . "<br>";
echo "Last Access Time: " . date("Y-m-d H:i:s", fileatime($filename)) . "<br>";
echo "Last Modified Time: " . date("Y-m-d H:i:s", filemtime($filename)) . "<br>";
echo "Last Change Time: " . date("Y-m-d H:i:s", filectime($filename)) . "<br>";

copy($filename, "copy_demo.txt");
rename("copy_demo.txt", "renamed_demo.txt");

echo "<h3>File & Folder Operations:</h3>";
echo "File Copied & Renamed Successfully.<br>";

mkdir("test_folder");
echo "Folder Created: test_folder<br>";

if (is_file($filename)) {
    echo "$filename is a file<br>";
}

if (is_dir("test_folder")) {
    echo "test_folder is a directory<br>";
}

?>
