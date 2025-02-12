<!DOCTYPE html>
<html>
<head>
    <title>Home page of JKUGCVS</title>
    <link href="good.css" rel="stylesheet" type="text/css" />
    <script>
        let timeInterval;

        function stopClock() {
            clearTimeout(timeInterval);
        }

        function yourClock() {
            const nd = new Date();
            const h = String(nd.getHours()).padStart(2, '0');
            const m = String(nd.getMinutes()).padStart(2, '0');
            const s = String(nd.getSeconds()).padStart(2, '0');
            document.getElementById('the_time').value = `${h}:${m}:${s}`;
            timeInterval = setTimeout(yourClock, 1000);
        }
    </script>
</head>
<body id="container" bgcolor="#7aa" onload="yourClock()" onunload="stopClock()">
    <div id="bod">
        <div>
            <?php include "yheader.php"; ?>
        </div>
        <div id="left">
            <?php include "yleft.php"; ?>
        </div>
        <div id="cent">
            <div id="img">
                <form>
                    <input type="text" id="the_time" size="36" readonly style="padding-bottom:10px;">
                </form>
                <script>
                    const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                    const monthDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

                    const today = new Date();
                    const thisDay = today.getDay();
                    const thisMonth = today.getMonth();
                    const thisDate = today.getDate();
                    const thisYear = today.getFullYear();

                    if ((thisYear % 4 === 0 && thisYear % 100 !== 0) || thisYear % 400 === 0) {
                        monthDays[1] = 29;
                    }

                    let startSpaces = thisDay - (thisDate % 7 - 1);
                    startSpaces = (startSpaces + 7) % 7;

                    document.write("<table border='1' bgcolor='#66CCFF' width='240' height='210'>");
                    document.write(`<tr><td colspan='7'><center><strong>${monthNames[thisMonth]} ${thisYear}</strong></center></td></tr>`);
                    document.write("<tr><td>Su</td><td>M</td><td>Tu</td><td>W</td><td>Th</td><td>F</td><td>Sa</td></tr><tr>");

                    for (let s = 0; s < startSpaces; s++) {
                        document.write("<td></td>");
                    }

                    for (let day = 1; day <= monthDays[thisMonth]; day++) {
                        if ((day + startSpaces - 1) % 7 === 0 && day !== 1) {
                            document.write("</tr><tr>");
                        }
                        document.write(`<td>${day === thisDate ? `<strong style='color:red'>${day}</strong>` : day}</td>`);
                    }

                    document.write("</tr></table>");
                </script>
            </div>
        </div>
        <div id="righ">
            <?php include "yright.php"; ?>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Login'])) {
                session_start();
                $UserName = $_POST['uname'];
                $Password = $_POST['pword'];
                $UserType = $_POST['selectop'];

                if ($UserType === "--select one--") {
                    echo "<div class='alert alert-error'>Please select your account type and try again!!!</div>";
                } else {
                    $con = new mysqli("localhost", "root", "", "gcvs_db_success");
                    if ($con->connect_error) {
                        die("Connection failed: " . $con->connect_error);
                    }

                    $stmt = $con->prepare("SELECT * FROM user WHERE username=? AND password=? AND User_type=?");
                    $stmt->bind_param("sss", $UserName, $Password, $UserType);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows === 0) {
                        echo "<div class='alert alert-error'>Invalid credentials! Please try again.</div>";
                    } else {
                        $_SESSION['username'] = $UserName;
                        $redirectPage = $UserType === "Administrator" ? "AdminPage.php" : "RegisterarPage.php";
                        header("Location: $redirectPage");
                        exit();
                    }

                    $stmt->close();
                    $con->close();
                }
            }
            ?>
        </div>
        <?php include "yfoot.php"; ?>
    </div>
</body>
</html>
