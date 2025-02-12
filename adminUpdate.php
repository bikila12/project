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
    <title>Administrator Page</title>
</head>
<body id="container">
<div id="bod">
<?php
    include "adminheader.php";
?>
    <div id="leftsh">
<?php
    include "adminleft.php";
?>
    <div id="spaceesh">
        <div id="aformsh">
            <h3>Graduate Information:</h3>
            <form action="adminUpdatepro.php" method="post">
                <table border="1">
                    <tr bgcolor="#85A157">
                        <th>ID</th><th>First_Name</th><th>Middle_Name</th><th>Last_Name</th>
                        <th>Gpa</th><th>Year</th><th>Qualification</th><th>Gender</th>
                        <th>Department</th><th>Photo</th><th>Edit</th><th>Delete</th>
                    </tr>
                    <?php
                    // Connect to the database using mysqli
                    $con = mysqli_connect("localhost", "root", "", "gcvs_db_success");

                    if (!$con) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    // Fetch data from the 'student' table
                    $q = "SELECT * FROM student";
                    $r = mysqli_query($con, $q);

                    while ($row = mysqli_fetch_assoc($r)) {
                        $Id = $row['ID'];
                        $fn = $row['Frist_Name'];
                        $mn = $row['Midle_Name'];
                        $ln = $row['Last_Name'];
                        $cg = $row['Cumulative_Gpa'];
                        $yog = $row['Year_of_Graduation'];
                        $q = $row['Qualification'];
                        $g = $row['Gender'];
                        $d = $row['Department'];
                        $p = $row['Photo'];
                    ?>
                    <tr bgcolor="#BADFE8">
                        <td><strong><?php echo $Id;?></strong></td>
                        <td><strong><?php echo $fn;?></strong></td>
                        <td><strong><?php echo $mn;?></strong></td>
                        <td><strong><?php echo $ln;?></strong></td>
                        <td><strong><?php echo $cg;?></strong></td>
                        <td><strong><?php echo $yog;?></strong></td>
                        <td><strong><?php echo $q;?></strong></td>
                        <td><strong><?php echo $g;?></strong></td>
                        <td><strong><?php echo $d;?></strong></td>
                        <td><strong><img src="imagepro.php?ID=<?php echo $row['ID']?>" width="30" height="50"></td>
                        <td><strong><a href="adminUpdatepro.php?ID=<?php echo $Id;?>"><img src="iterfaceimage/update-icon.png" width="30" height="50"/></a></strong></td>
                        <td><strong><a href="admindeletestudent.php?ID=<?php echo $Id;?>" onclick="return confirm('Are You Sure You Want to Permanently Delete Student Data?')">
                            <img src="iterfaceimage/delete-icon.jpg" width="30" height="40"/>
                        </a></strong></td>
                    </tr>
                    <?php
                    }
                    mysqli_close($con); // Close the database connection
                    ?>
                </table>
                <h2 align="right"><a href="export-csv/export.php">DOWNLOAD</a></h2>
                <h1 align="center">
                    There are <?php
                    // Reconnect and count the number of rows
                    $con = mysqli_connect("localhost", "root", "", "gcvs_db_success");

                    if (!$con) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $result = mysqli_query($con, "SELECT * FROM student");
                    $numberOfRows = mysqli_num_rows($result);

                    if ($numberOfRows > 0) {
                        echo '<font size="6" color="#FF0000" bgcolor="#003366">' . $numberOfRows . '</font>';
                    } else {
                        echo "No students found!";
                    }
                    mysqli_close($con);
                    ?> Graduated Students!
                </h1>
            </form>
        </div>
    </div>
<?php
    include "yfoot.php";
?>
</div>
</body>
</html>
<?php
}
?>
