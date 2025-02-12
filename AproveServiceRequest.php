<?php
session_start();
if (!isset($_SESSION['username'])) { 
    header("location:bayisa.php");
} else {
?>
<html>
<head>
    <link href="good.css" rel="stylesheet" type="text/css" />
    <link href="admin.css" rel="stylesheet" type="text/css" />
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <title>Registerar page</title>
</head>
<body id="container">
    <div id="bod">
        <?php
        include "registerarheader.php";
        ?>
        <div id="left">
            <?php
            include "registerarLeft.php";
            ?>
        </div>

        <div id="spacee">
            <div id="aform">
                <?php
                // Check if 'cem' is set in POST request
                if (isset($_POST['cem'])) {
                    $cem = $_POST['cem'];
                } else {
                    // If 'cem' is not set, show an error message and redirect
                    echo '<script type="text/javascript">alert("Company email is missing!"); window.location="approveserreq2.php";</script>';
                    exit();
                }

                // Corrected database connection using mysqli
                $con = mysqli_connect("localhost", "root", "", "gcvs_db_success");

                if (!$con) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Query to fetch company details based on email
                $q = "SELECT * FROM company WHERE Company_Email='$cem'";
                $r = mysqli_query($con, $q);

                if (mysqli_num_rows($r) == 0) {
                    echo "No such record exists";
                    exit();
                }

                // Loop through the result set and display the company details
                while ($row = mysqli_fetch_row($r)) {
                ?>
                    <h2>Details of Requested Company:</h2>
                    <form action="regApprovedcomdet.php?ID=<?php echo $row[0]; ?>" method="post">
                        <table cellspacing="20" cellpadding="10">
                            <tr><td><b>Employe ID:</b></td><td><?php echo $row[0];?></td></tr>
                            <tr><td><b>Company Name:</b></td><td><?php echo $row[1];?></td></tr>
                            <tr><td><b>Company Phone:</b></td><td><?php echo $row[2];?></td></tr>
                            <tr><td><b>Company Email:</b></td><td><?php echo $row[3];?></td></tr>
                            <tr><td><b>Company Country:</b></td><td><?php echo $row[4];?></td></tr>
                            <tr><td><b>Company City:</b></td><td><?php echo $row[5];?></td></tr>
                            <tr><td><b>Date:</b></td><td><?php echo $row[6];?></td></tr>
                            <tr><td><b>Reason of Verification:</b></td><td><?php echo $row[7];?></td></tr>
                            <tr><td><b>Enter Remark:</b></td><td><span id="sprytextarea1">
                                <label><textarea name="rer" rows="3" cols="20"></textarea></label>
                                <span class="textareaRequiredMsg">Remark required.</span></span></td></tr>
                            <tr><td><b>Approval:</b></td><td>
                                <select name="regA" id="span9001">
                                    <option>--select one--</option>
                                    <option>Approved</option>
                                    <option>Disproved</option>
                                </select>
                            </td></tr>
                        </table>
                        <input type="submit" name="regsub" value="Submit" class="btn btn-primary">
                    </form>
                <?php
                }

                mysqli_close($con); // Close the database connection
                ?>
            </div>
        </div>
        <?php
        include "yfoot.php";
        ?>
    </div>
    <script type="text/javascript">
    var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
    </script>
</body>
</html>
<?php
}
?>
