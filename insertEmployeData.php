<html>
<head>
    <title>JKU GCVS</title>
</head>
<body>
<?php
// Capture POST data
$gid = $_POST['Gid'];
$gfname = $_POST['Gfname'];
$gmname = $_POST['Gmname'];
$glname = $_POST['Glname'];
$yog = $_POST['Yog'];
$gqul = $_POST['Gqul'];
$mgender = $_POST['mgender'];
$gdep = $_POST['gdep'];

// Validate image upload
if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
    echo '<script type="text/javascript">alert("Please select a valid image!");window.location="employeform.php";</script>';
    exit();
}

$image_size = getimagesize($_FILES['image']['tmp_name']);
if ($image_size === FALSE) {
    echo '<script type="text/javascript">alert("Please select a valid image!");window.location="employeform.php";</script>';
    exit();
} elseif ($_FILES['image']['size'] > 30000) {
    echo '<script type="text/javascript">alert("The image is too big!");window.location="employeform.php";</script>';
    exit();
} else {
    $gphoto = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_type = addslashes($_FILES['image']['type']);
}

// Database connection
$con = mysqli_connect("localhost", "root", "", "gcvs_db_success");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if ID already exists
$check_query = "SELECT * FROM employe WHERE ID = '$gid'";
$result = mysqli_query($con, $check_query);
if (mysqli_num_rows($result) > 0) {
    echo '<script type="text/javascript">alert("Duplicate entry for ID. Please use a unique ID.");window.location="employeform.php";</script>';
    mysqli_close($con);
    exit();
}

// Query to insert data
$sql = "INSERT INTO employe 
    (ID, Frist_Name, Midle_Name, Last_Name, Year_of_Graduation, Qualification, Gender, Department, Photo, Photo_type) 
    VALUES 
    ('$gid', '$gfname', '$gmname', '$glname', '$yog', '$gqul', '$mgender', '$gdep', '$gphoto', '$image_type')";

// Execute query
if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}

// Success message
echo '<script type="text/javascript">alert("Employee Registered successfully!");window.location="employeform.php";</script>';

// Close the database connection
mysqli_close($con);
?>
</body>
</html>
