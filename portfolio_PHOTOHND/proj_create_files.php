<?php
$target_dir = "uploads/projects/";
$temp = explode(".", $_FILES["projects"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
$target_file = $target_dir . $newfilename;
// $target_file = $target_dir . basename($_FILES["projects"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["projects"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<br>Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["projects"]["size"] > 5000000) {
    echo "<br>Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<br>Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<br>Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["projects"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["projects"]["name"]). " has been uploaded.";
    } else {
        echo "<br>Sorry, there was an error uploading your file.";
    }
}
$filename= $_FILES["projects"]["name"];
$sql = "INSERT INTO `projects`(`img`, `img_dir`) VALUES ('$filename', '$target_file')";
?>