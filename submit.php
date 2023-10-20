<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost"; // Replace with your database server address
    $username = "root"; // Replace with your database username
    $password = ""; // Replace with your database password
    $database = "thelogobucks"; // Replace with your database name
    
    $connection = new mysqli($servername, $username, $password, $database);
    
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    $firstName = $_POST["firstName"];
    $company = $_POST["company"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    $howHear = $_POST["howHear"];
    
    // Handle file upload
    $file_name = $_FILES["file"]["name"];
    $file_tmp_name = $_FILES["file"]["tmp_name"];
    $upload_directory = "images/"; // Specify your upload directory
    
    // Create a unique file name
    $uniqueFileName = uniqid() . "_" . $file_name;
    
    // Construct the full path to the uploaded file
    $uploadPath = $upload_directory . $uniqueFileName;
    
    // Move the uploaded file to the desired directory
    if (move_uploaded_file($file_tmp_name, $uploadPath)) {
        // File has been successfully uploaded
        
        // Insert data into the database (use SQL queries)
        $sql = "INSERT INTO thelogobucks (first_name, company, email, phone, message, how_hear, file_name) 
                VALUES ('$firstName', '$company', '$email', '$phone', '$message', '$howHear', '$uniqueFileName')";
    
        if ($connection->query($sql) === TRUE) {
            header("Location: contact.php");
        } else {
            echo "Error: " . $connection->error;
        }
    } else {
        echo "Error uploading file.";
    }
    
    $connection->close();
}
?>
