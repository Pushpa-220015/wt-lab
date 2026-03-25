<?php
$uploadedFile = "";

if (isset($_POST['upload'])) {

    $folder = "uploads/";
    $filename = $_FILES['file']['name'];
    $tempname = $_FILES['file']['tmp_name'];

    if (move_uploaded_file($tempname, $folder . $filename)) {
        $uploadedFile = $filename;
        echo "<p style='color:green;'>File Uploaded Successfully!</p>";
    } else {
        echo "<p style='color:red;'>Upload Failed!</p>";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<title>File Upload & Download</title>
</head>
<body>

<h2>File Upload and Download System</h2>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <button type="submit" name="upload">Upload File</button>
</form>

<?php
if ($uploadedFile != "") {
    echo "<h3>Download Uploaded File:</h3>";
    echo "<a href='uploads/$uploadedFile' download>
            <button>Download File</button>
          </a>";
}
?>

</body>
</html>