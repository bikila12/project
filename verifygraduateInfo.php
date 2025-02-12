<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:bayisa.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link href="good.css" rel="stylesheet" type="text/css" />
    <link href="admin.css" rel="stylesheet" type="text/css" />
    <title>Registrar Page</title>
</head>
<body id="container">
<div id="bod">
    <?php include "registerarheader.php"; ?>
    <div id="left">
        <?php include "registerarLeft.php"; ?>
    </div>
    <div id="spacee">
        <div id="aform">
            <?php
            // Establishing Database Connection
            $con = new mysqli("localhost", "root", "", "gcvs_db_success");
            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            }

            // Query to fetch employees
            $query = "SELECT * FROM employe";
            $result = $con->query($query);
            ?>
            <h3>Verify Graduate Information:</h3>
            <form action="regverify.php" method="post">
                <table cellspacing="20" cellpadding="10">
                    <tr>
                        <td><b><h2>Graduate ID:</h2></b></td>
                        <td>
                            <select name="Gid" id="span9001">
                                <?php
                                while ($employee = $result->fetch_assoc()) {
                                    // Check if employee's info is approved but not verified
                                    $employeeID = $employee['ID'];
                                    $approvalQuery = "SELECT * FROM request_approval WHERE Employe_ID = '$employeeID' AND Approval = 'Approved'";
                                    $approvalResult = $con->query($approvalQuery);

                                    $verificationQuery = "SELECT * FROM info_verification WHERE ID = '$employeeID'";
                                    $verificationResult = $con->query($verificationQuery);

                                    if ($approvalResult->num_rows > 0 && $verificationResult->num_rows == 0) {
                                        echo "<option value='{$employee['ID']}'>{$employee['ID']}</option>";
                                    }
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                </table>
                <button class="btn btn-primary" name="search">&nbsp;Search</button>
            </form>
        </div>
    </div>
    <?php include "yfoot.php"; ?>
</div>
</body>
</html>
