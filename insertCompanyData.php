<html>
<head>
    <title>MWU GCVS</title>
</head>
<body>
<?php 
if (
    isset($_POST['Gid'], $_POST['cphone'], $_POST['cname'], $_POST['cemail'], 
    $_POST['ccountry'], $_POST['ccity'], $_POST['date'], $_POST['rov'])
) {
    $gid = $_POST['Gid'];
    $Cphone = $_POST['cphone'];
    $Cname = $_POST['cname'];
    $Cemail = $_POST['cemail'];
    $Ccountry = $_POST['ccountry'];
    $Ccity = $_POST['ccity'];
    $Date = $_POST['date'];
    $Rfv = $_POST['rov'];

    // Database connection
    $con = mysqli_connect("localhost", "root", "", "gcvs_db_success");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check for duplicate email
    $checkQuery = "SELECT * FROM company WHERE Company_Email = '$Cemail'";
    $result = mysqli_query($con, $checkQuery);
    if (mysqli_num_rows($result) > 0) {
        die("Error: A company with this email already exists.");
    }

    // SQL query
    $sql = "INSERT INTO company (ID, Company_Phone, Company_Name, Company_Email, Company_Country, Company_City, Date, Reason_of_Verification) 
            VALUES ('$gid', '$Cphone', '$Cname', '$Cemail', '$Ccountry', '$Ccity', '$Date', '$Rfv')";

    // Execute query
    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }

    // Redirect on success
    header("Location: rf.php");
    exit();
} else {
    die("Error: All form fields are required.");
}
?>
</body>
</html>
