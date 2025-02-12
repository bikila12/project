<?php
session_start();
if (!isset($_SESSION['username'])) { 
    header("location:bayisa.php");
    exit();
}
?>
<html>
<head>
    <link href="good.css" rel="stylesheet" type="text/css" />
    <link href="admin.css" rel="stylesheet" type="text/css" />
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
            $con = new mysqli("localhost", "root", "", "gcvs_db_success");
            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            }

            $q = "SELECT * FROM company";
            $r = $con->query($q);
            ?>
            <h3>Search Graduate Information:</h3>
            <form action="sendingemailstoexternal.php" method="post">
                <table cellspacing="20" cellpadding="10"><br><br><br><br><br>
                    <tr>
                        <td><b><h2>Graduate ID:</h2></b></td>
                        <td>
                            <select name="Gid" id="span9001">
                                <?php
                                if ($r && $r->num_rows > 0) {
                                    while ($ro = $r->fetch_assoc()) {
                                        $qew = "SELECT * FROM info_verification";
                                        $rr = $con->query($qew);
                                        if ($rr && $rr->num_rows > 0) {
                                            while ($row = $rr->fetch_assoc()) {
                                                if ($row['ID'] == $ro['ID'] && $row['Verification'] == "Verified") {
                                                    $qstud = "SELECT * FROM student";
                                                    $stud = $con->query($qstud);
                                                    if ($stud && $stud->num_rows > 0) {
                                                        while ($rstud = $stud->fetch_assoc()) {
                                                            if ($row['ID'] == $rstud['ID']) {
                                                                $yu = "SELECT * FROM report";
                                                                $ss = $con->query($yu);
                                                                $verified = false;
                                                                if ($ss && $ss->num_rows > 0) {
                                                                    while ($roww = $ss->fetch_assoc()) {
                                                                        if ($roww['ID'] == $rstud['ID']) {
                                                                            $verified = true;
                                                                            break;
                                                                        }
                                                                    }
                                                                }
                                                                if (!$verified) {
                                                                    echo "<option>" . htmlspecialchars($rstud['ID']) . "</option>";
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                </table>
                <button class="btn btn-primary" name="search">&nbsp;Generate Report</button>
            </form>
        </div>
    </div>
    <?php
    include "yfoot.php";
    ?>
</div>
</body>
</html>
