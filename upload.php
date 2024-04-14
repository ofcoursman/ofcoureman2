<?php
// Specify the directory where uploaded images will be saved
$uploadDirectory = 'uploads/';

// Check if the form was submitted
if(isset($_POST['submit'])) {
    // Check if there was an error uploading the image
    if($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Get the temporary location of the uploaded image
        $tempFile = $_FILES['image']['tmp_name'];
        
        // Get the original name of the uploaded image
        $imageName = $_FILES['image']['name'];

        // Move the image from the temporary location to the specified directory
        if(move_uploaded_file($tempFile, $uploadDirectory . $imageName)) {
            echo "Image uploaded successfully.";
        } else {
            echo "Error uploading image.";
        }
    } else {
        echo "Error: " . $_FILES['image']['error'];
    }
}
?>
<button><a href="upploadindex.php">Back to Upload</a></button>
