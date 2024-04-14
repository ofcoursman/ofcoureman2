<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Image Upload</title>
</head>
<body>
    <header>
        <h1>Image Upload</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </nav>

    <h2>Upload an Image</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label id="custom-file-upload" for="image">Choose File</label>
        <input type="file" name="image" id="image">
        <span id="file-label">Nie je vybratý žiadny súbor</span>
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <h2>Images Stored</h2>
    <div class="img-container">
        <?php
        // Specify the directory where uploaded images are stored
        $uploadDirectory = 'uploads/';
        
        // Get list of images in the directory
        $images = glob($uploadDirectory . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
        
        // Iterate through the images and display them
        foreach($images as $image) {
            // Get the image name
            $imageName = basename($image);
            echo "<img src='$image' alt='$imageName' style='max-width: 200px; margin: 10px;'>";
        }
        ?>
    </div>
</body>
</html>
