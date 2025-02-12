<div id="mheader">
    <img src="iterfaceimage/log.JPG" width="1000" height="120" alt="logo image">
</div>
<header>
    <hgroup>
        <div>
            <ul id="nav">
                <li><a href="RegisterarPage.php">Home</a></li>
                <li><a href="#">Manage Graduate Information</a>
                    <ul>
                        <li><a href="insertregister.php">Insert Graduate Information</a></li>
                        <li><a href="regupdate.php">Display Graduate Information</a></li>
                        <li><a href="viewreg.php">Search Student File</a></li>
                    </ul>
                </li>
                <li><a href="approveserreq2.php">Approve Request (<?php
                    // Database connection using mysqli
                    $con = mysqli_connect("localhost", "root", "", "gcvs_db_success");

                    // Check connection
                    if (!$con) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    // Perform query to count the rows in 'company' table
                    $result = mysqli_query($con, "SELECT * FROM company");

                    // Get number of rows returned
                    $numberOfRows = mysqli_num_rows($result); 

                    // If there are any rows, display the count
                    if ($numberOfRows > 0) {
                        echo '<font size="3" color="#FF0000" bgcolor="#003366">' . $numberOfRows . '</font>';
                    } else {
                        echo " ";
                    }

                    // Close the connection
                    mysqli_close($con);
                ?>)</a></li>
                <li><a href="verifygraduateInfo.php">Verify</a></li>
                <li><a href="sendmessearch.php">Generate Report</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
        </div>
    </hgroup>
</header>
