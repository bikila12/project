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
            <h3>Request Employee:</h3>
            <form action="adminUpdatepro.php" method="post">
                <table border="1">
                    <tr bgcolor="#85A157">
                        <th>ID</th>
                        <th>First_Name</th>
                        <th>Middle_Name</th>
                        <th>Last_Name</th>
                        <th>Year</th>
                        <th>Qualification</th>
                        <th>Gender</th>
                        <th>Department</th>
                        <th>Photo</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                    // Use mysqli to connect to the database
                    $con = mysqli_connect("localhost", "root", "", "gcvs_db_success");

                    if (!$con) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $q = "SELECT * FROM employe";
                    $r = mysqli_query($con, $q);

                    while ($row = mysqli_fetch_assoc($r)) {
                        $Id = $row['ID'];
                        $fn = $row['Frist_Name'];
                        $mn = $row['Midle_Name'];
                        $ln = $row['Last_Name'];
                        $yog = $row['Year_of_Graduation'];
                        $q = $row['Qualification'];
                        $g = $row['Gender'];
                        $d = $row['Department'];
                        $p = $row['Photo'];
                    ?>
                    <tr bgcolor="#BADFE8">
                        <td><strong><?php echo $Id; ?></strong></td>
                        <td><strong><?php echo $fn; ?></strong></td>
                        <td><strong><?php echo $mn; ?></strong></td>
                        <td><strong><?php echo $ln; ?></strong></td>
                        <td><strong><?php echo $yog; ?></strong></td>
                        <td><strong><?php echo $q; ?></strong></td>
                        <td><strong><?php echo $g; ?></strong></td>
                        <td><strong><?php echo $d; ?></strong></td>
                        <td><strong><img src="imagepro2.php?ID=<?php echo $row['ID']; ?>" width="100" height="50"></strong></td>
                        <td><strong>
                            <a href="admindeleteemploye.php?ID=<?php echo $Id; ?>" onclick="return confirm('Are you sure you want to permanently delete this data?')">
                                <img src="iterfaceimage/delete-icon.jpg" width="60" height="50"/>
                            </a>
                        </strong></td>
                    </tr>
                    <?php
                    }
                    mysqli_close($con);
                    ?>
                </table>
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
