<html>
<head>
<title>MWU GCVS</title>
</head>
<body>
<?php 
session_start();

// Retrieve variables from GET and POST
$eid = $_GET['ID'];
$rer = $_POST['rer'];
$ra = $_POST['regA'];

// Check if the approval option is selected
if ($ra == "--select one--") {
    echo '<script type="text/javascript">
        alert("Please select approval option");
        window.location = "approveserreq2.php";
    </script>';
    exit();
} else {
    // Establish database connection
    $con = new mysqli("localhost", "root", "", "gcvs_db_success");

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $con->prepare("INSERT INTO request_approval (Employe_ID, Registerar_Remark, Approval) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $eid, $rer, $ra);

    // Execute the query
    if ($stmt->execute()) {
        echo '<script type="text/javascript">
            alert("Remark added successfully");
            window.location = "approveserreq2.php";
        </script>';
    } else {
        die("Error: " . $stmt->error);
    }

    // Close statement and connection
    $stmt->close();
    $con->close();
}
?>
</body>
</html>
