<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home page of JKUGCVS</title>
    <link href="good.css" rel="stylesheet" type="text/css" />
</head>
<body id="contianer">
<div id="bod">
    <div>
        <?php include "yheader.php"; ?>
    </div>                    
    <div id="left">
        <?php include "yleft.php"; ?>    
    </div>
    <div id="cent">
        <div id="img">
            <img src="iterfaceimage/jku.jpg" width="900" height="700"/>
        </div>
        <img src="iterfaceimage/wel8.gif" width="900" height="215"/>
    </div>
    <div id="righ">
        <?php include "yright.php"; ?>
        
        <?php 
        if (isset($_POST['Login'])) {
            $UserName = $_POST['uname'];
            $Password = $_POST['pword'];
            $UserType = $_POST['selectop'];

            if ($UserType === "--select one--") {
                echo '<div class="alert alert-error">Please select your account type and try again!!!</div>';
            } else {
                // Enable MySQLi exception handling
                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

                try {
                    // Connect to MySQL
                    $con = new mysqli("localhost", "root", "", "gcvs_db_success");

                    // Prepare the query based on user type
                    $sql = "SELECT * FROM user WHERE username=? AND password=? AND User_type=?";
                    $stmt = $con->prepare($sql);
                    $stmt->bind_param("sss", $UserName, $Password, $UserType);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $records = $result->num_rows;

                    if ($records == 0) {
                        echo '<div class="alert alert-error">Please check your User Name, Password and select your account type and try again!!!</div>';
                    } else {
                        $_SESSION['username'] = $UserName;

                        if ($UserType === "Administrator") {
                            header("Location: AdminPage.php");
                            ob_end_flush();
                        } else if ($UserType === "Registerar") {
                            header("Location: RegisterarPage.php");
                        }
                        exit();
                    }

                    $stmt->close();
                    $con->close();
                } catch (mysqli_sql_exception $e) {
                    echo '<div class="alert alert-error">Database connection error: ' . $e->getMessage() . '</div>';
                }
            }
        }
        ?>
    </div>
    <?php include "yfoot.php"; ?>
</div>
</body>
</html>
