<!DOCTYPE html>
<html>
<head>
   <link href="certificate.css" rel="stylesheet" type="text/css" />
    <link href="good.css" rel="stylesheet" type="text/css"/>
    <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript">
        function validationForm() {
            var id = document.forma.Gid.value;
            if (id === "") {
                alert("Graduate ID cannot be left blank");
                return false;
            }
        }

        function printCertificate() {
            var printContent = document.getElementById("certificate").innerHTML;
            var originalContent = document.body.innerHTML;
            document.body.innerHTML = printContent;
            window.print();
            document.body.innerHTML = originalContent;
        }
    </script> 

</head>
<body id="container">
<div id="bod">
    <div>
        <?php include "yheader.php"; ?>
    </div>
    <div id="left">
        <?php include "yleft.php"; ?>
    </div>
    <div id="spacee">
    <div id="p">
    <img src="iterfaceimage/req.jpg" width="370" height="300"/>
<p align="center"><strong><font size="6" color="blue"><i>Welcome to<br> jinka University<br> Online Graduates Vredentials<br> Verification Systems</font><br><br><font size="4" color="blue"> Before filling these  information be  <br><br>sure credentials verification <br><br>requested &nbsp;</font><a href="rf.php"><font color="green">COMPANY</font></a></strong></p></div>

        <div id="rf">
            <h2>Graduate Certificate Verification</h2>
            <form method="post" name="forma" onsubmit="return validationForm()">
                <table cellspacing="15" cellpadding="20">
                    <tr>
                        <td>certificate_ID:</td>
                        <td>
                            <span id="sprytextfield1">
                                <input type="text" name="Gid" placeholder="Enter Certificate ID" size="30">
                                <span class="textfieldRequiredMsg"><br/><b> Certificate ID is required</b></span>
                            </span>
                        </td>
                    </tr>
                </table>
                <button class="btn btn-primary" name="gsub">CHECK RESULT</button>
                <button type="reset" class="btn btn-primary">CLEAR</button>
            </form>

            <?php
if (isset($_POST['gsub'])) {
    $gid = $_POST['Gid'];

    if (empty($gid)) {
        echo "<div class='alert alert-error'>certificate ID cannot be empty!</div>";
    } else {
        $con = new mysqli("localhost", "root", "", "gcvs_db_success");
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        $query_graduate = "SELECT * FROM student WHERE ID = ?";
        $stmt = $con->prepare($query_graduate);
        $stmt->bind_param("s", $gid);
        $stmt->execute();
        $result_graduate = $stmt->get_result();

        if ($result_graduate->num_rows > 0) {
            while ($row = $result_graduate->fetch_assoc()) {
?>
<div id="certificate" style=" width: 900px;">
    <!-- Left Logo -->
    <div style="position: absolute; top: 15px; left: 15px; text-align: center;">
        <img src="logo.png" style="width: 80px; height: auto;">
    </div>

    <!-- Right Logo -->
    <div style="position: absolute; top: 15px; right: 15px; text-align: center;">
        <img src="logo.png" style="width: 80px; height: auto;">
    </div>

    <!-- Main Content -->
    <div class="certificate-header" style="text-align: center; margin-bottom: 20px; width: 900px;">
        <h1 style="margin: 10px 0; font-size: 24px;">  ጂንካ ዩኒቨርሲቲ  </h1>
        <h1 style="margin: 10px 0; font-size: 24px;">Jinka University Graduate Certificate</h1>
        <h2 style="margin: 0; font-size: 15px;">Tel:+251941448735</h2>
        <h2 style="margin: 0; font-size: 15px;">P.O.BOX:5432, Jinka, Ethiopia</h2>
        <hr>
    </div>
    <div class="certificate-body">
        <?php if (!empty($row['Photo']) && !empty($row['Photo_type'])): ?>
            <p>
                <img src="data:<?php echo $row['Photo_type']; ?>;base64,<?php echo base64_encode($row['Photo']); ?>" width="120" height="120"/>
            </p>
        <?php else: ?>
            <p><strong>Photo:</strong><br>No photo available</p>
        <?php endif; ?>

        <!-- Relocated Section -->
        <div class="certificate-body centered-content" style="text-align: center; position: relative; top: -140px;">
    <h4>TO WHOM IT MAY CONCERN</h4>
    <h4>this is to certify that</h4>

    <p>
        <strong>Full Name:</strong> <?php echo $row['Frist_Name']; ?> 
         <?php echo $row['Midle_Name']; ?> 
       <?php echo $row['Last_Name']; ?>
    </p>
    <h4> Graduated from jinka university with</h4>
    <p><strong>Department of </strong> <?php echo $row['Department']; ?></p>
    <p><strong> with GPA:</strong> <?php echo $row['Cumulative_Gpa']; ?></p>
    <p><strong>Year of Graduation:</strong> <?php echo $row['Year_of_Graduation'] ?? 'N/A'; ?></p>
    
    <p>This certificate verifies the completion of the graduate program at Jinka University.</p>
</div>


    </div>

    <!-- Add Company Stamp at the Bottom -->
    <div style="text-align: center; margin-top: 20px; position: relative;">
        <img src="stamp.jpg" style="width: 100px; padding-left:400px; height: auto; opacity: 0.8;">
    </div>
    <p><strong>certificate id:</strong> <?php echo $row['ID']; ?></p>
    <button onclick="printCertificate()" class="btn btn-primary" style="margin-top: 20px;">Print </button>
</div>
<?php
            }
        } else {
            echo "<div class='alert alert-error'>No graduate found with the given ID.</div>";
        }

        $stmt->close();
        $con->close();
    }
}
?>

        </div>
    </div>
</div>
<script type="text/javascript">
    var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>
</body>
</html>
