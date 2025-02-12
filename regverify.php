<?php
session_start();
if (!isset($_SESSION['username'])) { 
    header("location:bayisa.php");
} else {
    // Error Reporting (only for development, remove in production)
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
?>

<html>
<head>
    <link href="good.css" rel="stylesheet" type="text/css" />
    <link href="admin.css" rel="stylesheet" type="text/css" />
    <title>Registerar page</title>
</head>
<body id="container">
<div id="body">
    <?php include "registerarheader.php"; ?>
    <div id="left">
        <?php include "registerarLeft.php"; ?>
    </div>
    <div id="spacee">
        <div id="appl">
            <?php
            // Ensure Gid is passed and set in POST
            if (isset($_POST['Gid'])) {
                $gid = $_POST['Gid'];

                // Using mysqli to connect to MySQL database
                $con = mysqli_connect("localhost", "root", "", "gcvs_db_success");
                if (!$con) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Query to fetch student details
                $q = "SELECT * FROM student WHERE ID='$gid'";
                $r = mysqli_query($con, $q);

                // Display student information if exists
                if (mysqli_num_rows($r) > 0) {
                    echo "<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Original Graduate Details:</h2>";
                    echo '<table cellspacing="15" cellpadding="10" bgcolor="#CCFFFF">';
                    while ($row = mysqli_fetch_array($r)) {
                        echo "<tr><td><b>ID:</b></td><td>" . $row[0] . "</td></tr>";
                        echo "<tr><td><b>First Name:</b></td><td>" . $row[1] . "</td></tr>";
                        echo "<tr><td><b>Middle Name:</b></td><td>" . $row[2] . "</td></tr>";
                        echo "<tr><td><b>Last Name:</b></td><td>" . $row[3] . "</td></tr>";
                        echo "<tr><td><b>Year of Graduation:</b></td><td>" . $row[5] . "</td></tr>";
                        echo "<tr><td><b>Qualification:</b></td><td>" . $row[6] . "</td></tr>";
                        echo "<tr><td><b>Gender:</b></td><td>" . $row[7] . "</td></tr>";
                        echo "<tr><td><b>Department:</b></td><td>" . $row[8] . "</td></tr>";
                        echo "<tr><td><b>Photo:</b></td><td><img src='imagepro.php?ID=" . $row['ID'] . "' width='100' height='100'></td></tr>";
                    }
                    echo '</table>';
                } else {
                    echo "<h3><font color='red'>No Such Graduate Information!</font></h3>";
                }
            } else {
                echo "<h3><font color='red'>Graduate ID (Gid) not provided!</font></h3>";
            }
            ?>
        </div>

        <div id="appr">
            <?php
            // Ensure Gid is passed and set in POST
            if (isset($_POST['Gid'])) {
                $gid = $_POST['Gid'];

                // Query to fetch employe details
                $q = "SELECT * FROM employe WHERE ID='$gid'";
                $r = mysqli_query($con, $q);
                if (mysqli_num_rows($r) == 0) {
                    echo "No such record exists";
                    exit();
                }

                // Display employe information and the verification form
                while ($row = mysqli_fetch_row($r)) {
                    echo "<h2>&nbsp;&nbsp;&nbsp;&nbsp;Requested Graduate Details:</h2>";
                    echo '<form action="insertverification.php?ID=' . $row[0] . '" method="post">';
                    echo '<table cellspacing="15" cellpadding="10" bgcolor="#FFCC99">';
                    echo "<tr><td><b>ID:</b></td><td>" . $row[0] . "</td></tr>";
                    echo "<tr><td><b>First Name:</b></td><td>" . $row[1] . "</td></tr>";
                    echo "<tr><td><b>Middle Name:</b></td><td>" . $row[2] . "</td></tr>";
                    echo "<tr><td><b>Last Name:</b></td><td>" . $row[3] . "</td></tr>";
                    echo "<tr><td><b>Year of Graduation:</b></td><td>" . $row[4] . "</td></tr>";
                    echo "<tr><td><b>Qualification:</b></td><td>" . $row[5] . "</td></tr>";
                    echo "<tr><td><b>Gender:</b></td><td>" . $row[6] . "</td></tr>";
                    echo "<tr><td><b>Department:</b></td><td>" . $row[7] . "</td></tr>";
                    echo "<tr><td><b>Photo:</b></td><td><img src='imagepro2.php?ID=" . $row[0] . "' width='100' height='100'></td></tr>";
                    echo '</table>';
                    echo '<br>';
                    echo "<tr><td><b>Verification:</b>&nbsp;&nbsp;</td><td><select name='regA' id='span9001'>
                        <option>--select one--</option>
                        <option>Verified</option>
                        <option>Unverified</option>
                        </select></td></tr><br><br>";
                    echo "<input type='submit' class='btn btn-primary' name='regsub' value='Submit'>";
                    echo '</form>';
                }
            }
            ?>
        </div>
    </div>

    <?php include "yfoot.php"; ?>
</div>

</body>
</html>

<?php
}
?>
