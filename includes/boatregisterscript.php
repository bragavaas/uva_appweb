<?php
// your_backend_script.php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $YachtName = $_POST['YachtName'];
    $Yatch_ad = $_POST['Yatch_ad'];
    $Yatch_description = $_POST['Yatch_description'];
    $Manufacturer = $_POST['Manufacturer'];
    $Model = $_POST['Model'];
    $YearBuilt = $_POST['YearBuilt'];
    $Length = $_POST['Length'];
    $Width = $_POST['Width'];
    $CrusingSpeed = $_POST['CrusingSpeed'];
    $MaxSpeed = $_POST['MaxSpeed'];
    $Cabins = $_POST['Cabins'];
    $Bathrooms = $_POST['Bathrooms'];
    $CurrentLocation = $_POST['CurrentLocation'];
    $HourlyCost = $_POST['HourlyCost'];
    $Passengers = $_POST['Passengers'];
    $OwnerID = $_POST['OwnerID'];
    
    // Database connection details
    $hostname = 'localhost'; // e.g., 'localhost' or '127.0.0.1'
    $username = 'uvaroot'; // MySQL username
    $password = 'uvaroot'; // MySQL password
    $database = 'uva_webapp'; // Database name

    try {
        // Create connection
        $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $conn->prepare("INSERT INTO yachts (YachtName, Manufacturer, Model, YearBuilt, Length, Width, CruisingSpeed, MaxSpeed, Cabins, Bathrooms, CurrentLocation, HourlyCost, OwnerID, Passengers, Yatch_ad, Yatch_description)
                    VALUES (:YachtName, :Manufacturer, :Model, :YearBuilt, :Length, :Width, :CruisingSpeed, :MaxSpeed, :Cabins, :Bathrooms, :CurrentLocation, :HourlyCost, :OwnerID, :Passengers, :Yatch_ad, :Yatch_description)");
        $stmt->bindParam(':YachtName', $YachtName);
        $stmt->bindParam(':Manufacturer', $Manufacturer);
        $stmt->bindParam(':Model', $Model);
        $stmt->bindParam(':YearBuilt', $YearBuilt);
        $stmt->bindParam(':Length', $Length);
        $stmt->bindParam(':Width', $Width);
        $stmt->bindParam(':CruisingSpeed', $CruisingSpeed);
        $stmt->bindParam(':MaxSpeed', $MaxSpeed);
        $stmt->bindParam(':Cabins', $Cabins);
        $stmt->bindParam(':Bathrooms', $Bathrooms);
        $stmt->bindParam(':CurrentLocation', $CurrentLocation);
        $stmt->bindParam(':HourlyCost', $HourlyCost);
        $stmt->bindParam(':OwnerID', $OwnerID);
        $stmt->bindParam(':Passengers', $Passengers);
        $stmt->bindParam(':Yatch_ad', $Yatch_ad);
        $stmt->bindParam(':Yatch_description', $Yatch_description);
    
        $stmt->execute();

        echo "Yacht registered successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close the database connection
    $conn = null;
}

// Process file uploads
if (!empty($_FILES['photos']['name'][0])) {
    $fileNames = array_filter($_FILES['photos']['name']);
    $fileTmps = array_filter($_FILES['photos']['tmp_name']);
    
    foreach ($fileTmps as $key => $fileTmp) {
        $fileName = $fileNames[$key];
        $fileTmp = $fileTmps[$key];
        
        // Process each uploaded file (e.g., move it to a directory, save file names to the database, etc.)
        // Example: Move uploaded files to a directory (change 'uploads/' to your desired directory)
        $uploadDirectory = 'uploads/';
        $uploadFilePath = $uploadDirectory . $fileName;
        move_uploaded_file($fileTmp, $uploadFilePath);
        
        // Save file names or paths to the database (modify this based on your database schema)
        // Example: Insert file paths into the 'gallery' table (modify SQL query accordingly)
        $stmt = $conn->prepare("INSERT INTO gallery (image_url, description, yacht_id) VALUES (?, ?, ?)");
        $stmt->execute([$uploadFilePath, 'Image description', $yachtId]); // Modify $yachtId with the current yacht ID
    }
}
?>