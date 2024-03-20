<?php
// Define variables
$target_dir = "uploads/"
$target_file = target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadok = 1;
$imageFileType = strolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is selected 
if(isset ($_POST[ "submit"])) f
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if ($check !== false) {
echo "File is an image - " . $check["mime"];
$uploadOk = 1;
} else {
echo "File is not an image.";
$uploadOk = 0;
 } 
}
 
//Check if file already exist
if (file_exists (Starget_file)) {
echo "Sorry, file already exists.";
$uploadok = 0;
}

// Check File size
if ($_FILES["fileToUpload"]["size"] > 500000) {
echo "Sorry, your file is too large.";
$uploadok = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
$uploadok = 0;
}

// Check if $uploadok is set to © by an error
if (Suploadok == 0) {
echo "Sorry, your file was not uploaded.";


//if everything is ok, try to upload file
} else {
｝

if (move_uploaded_fileS_FILES["fileroUpload"]["tmp_name"], $target_file)) {
echo "The file". basename $_FILES["fileToUpload"|[name"1). " has been uploaded.";
} else {
echo "Sorry, there was an error uploading your file.";
 } 
}
‹form action="" method-"post" enctype="multipart/form-data"›
Select image to upload:
<input type="file" name="fileToUpload" id="fileToUpload"> ‹input type="submit" value="Upload Image" name=" submit">
</form>