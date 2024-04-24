<?php

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the uploaded file
    $banner = $_FILES["banner"];
    $avatar = $_FILES["avatar"];

    // Get the uploaded file name
    $banner_name = $banner["name"];
    $avatar_name = $avatar["name"];

    // Get the uploaded file type
    // $image_type = $image["type"];

    // Get the uploaded file size
    // $image_size = $image["size"];

    // Get the uploaded file temporary name
    $banner_tmp_name = $banner["tmp_name"];
    $avatar_tmp_name = $avatar["tmp_name"];

    // Get the uploaded file error
    $banner_error = $banner["error"];
    $avatar_error = $avatar["error"];

   // Check if the uploaded file has no errors
if ($avatar_error != 0 || $banner_error != 0) {
    // Print an error message
    echo "Error uploading file: $image_error<br>";
} else {
    // Define upload directory
    $uploadDir1 = '/uplaods/';
    // $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';

    // Create the uploads directory if it doesn't exist
    if (!is_dir($uploadDir1)) {
        if (!mkdir($uploadDir1, 0755, true)) {
            die("Failed to create directory: $uploadDir1");
        }
    }

    // Move the uploaded files to the uploads directory
    if (!move_uploaded_file($avatar_tmp_name, $uploadDir1 . $avatar_name)) {
        die("Failed to move avatar file");
    }
    if (!move_uploaded_file($banner_tmp_name, $uploadDir1 . $banner_name)) {
        die("Failed to move banner file");
    }
}


    // Get the user's name
    $name = $_POST["name"];

    // Print a success message
    echo "File uploaded successfully: $image_name<br>";
    echo "Name: $name<br>";

}

?>