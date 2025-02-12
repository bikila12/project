<html>
<head>
<link href="good.css" rel="stylesheet" type="text/css" />
<link href="admin.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<title>
Registrar Page
</title>
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
$gid = $_GET['ID'];
$con = new mysqli("localhost", "root", "", "gcvs_db_success");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Prepare and execute the query
$q = "SELECT * FROM student WHERE ID = ?";
$stmt = $con->prepare($q);
$stmt->bind_param("s", $gid);
$stmt->execute();
$result = $stmt->get_result();

// Check if any record is returned
if ($result->num_rows == 0) {
    echo "No such record exists";
    exit();
}

// Fetch the record as an associative array
$row = $result->fetch_assoc();
?>
<h3>Update Graduate Information Form:</h3>
<form method="post" enctype="multipart/form-data" action="regupdatepro.php?ID=<?php echo htmlspecialchars($row['ID']); ?>">
<table cellspacing="15" cellpadding="10" bgcolor="#FFCC99">
<tr>
    <td>Graduate ID:</td>
    <td><?php echo htmlspecialchars($row['ID']); ?></td>
</tr>
<tr>
    <td>First Name:</td>
    <td>
        <input type="text" name="Gfname" size="20" value="<?php echo htmlspecialchars($row['FirstName'] ?? ''); ?>" required>
    </td>
</tr>
<tr>
    <td>Middle Name:</td>
    <td>
        <input type="text" name="Gmname" size="20" value="<?php echo htmlspecialchars($row['MiddleName'] ?? ''); ?>" required>
    </td>
</tr>
<tr>
    <td>Last Name:</td>
    <td>
        <input type="text" name="Glname" size="20" value="<?php echo htmlspecialchars($row['LastName'] ?? ''); ?>" required>
    </td>
</tr>
<tr>
    <td>Cumulative GPA:</td>
    <td>
        <input type="text" name="Gpa" size="20" value="<?php echo htmlspecialchars($row['GPA'] ?? ''); ?>" required>
    </td>
</tr>
<tr>
    <td>Year of Graduation:</td>
    <td>
        <select name="Yog">
            <option value="<?php echo htmlspecialchars($row['YearOfGraduation'] ?? ''); ?>">
                <?php echo htmlspecialchars($row['YearOfGraduation'] ?? ''); ?>
            </option>
            <?php for ($year = 2017; $year <= 2031; $year++): ?>
                <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
            <?php endfor; ?>
        </select>
    </td>
</tr>
<tr>
    <td>Qualification:</td>
    <td>
        <select name="gqul">
            <option value="<?php echo htmlspecialchars($row['Qualification']); ?>">
                <?php echo htmlspecialchars($row['Qualification']); ?>
            </option>
            <option value="Bachelors Degree">Bachelors Degree</option>
            <option value="Post Graduate">Post Graduate</option>
        </select>
    </td>
</tr>
<tr>
    <td>Gender:</td>
    <td>
        <select name="mgender">
            <option value="<?php echo htmlspecialchars($row['Gender']); ?>">
                <?php echo htmlspecialchars($row['Gender']); ?>
            </option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
    </td>
</tr>
<tr>
    <td>Department:</td>
    <td>
        <select name="gdep">
            <option value="<?php echo htmlspecialchars($row['Department']); ?>">
                <?php echo htmlspecialchars($row['Department']); ?>
            </option>
            <option value="Computer Science">Computer Science</option>
            <option value="Plant Science">Plant Science</option>
			<option value="Animal Science">Animal Science</option>
            <option value="Agro_Economics">Agro_Economics</option>
			<option value="Natural Resource Management">Natural Resource Management</option>
            <option value="Eco Tourism">Eco Tourism</option>
			<option value="Health Officer (HO)">Health Officer (HO)</option>
            <option value="Nursing">Nursing</option>
			<option value="Midwifery">Midwifery</option>
            <option value="Statistics">Statistics</option>
			<option value="Mathematics">Mathematics</option>
            <option value="Biology">Biology</option>
			<option value="Chemistry">Chemistry</option>
            <option value="Physics">Physics</option>
			<option value="Sport Science">Sport Science</option>
            <option value="Economics">Economics</option>
			<option value="Accounting and Finance">Accounting and Finance</option>
            <option value="Management">Management</option>
			<option value="English">English</option>
            <option value=">Law">>Law</option>
			<option value="History">History</option>
			<option value="Geography">Geography</option>
            <option value="Psychology">Psychology</option>
			<option value="Civics and Ethical Education">Civics and Ethical Education</option>
            <!-- Add other departments here -->
        </select>
    </td>
</tr>
<tr>
    <td>Upload Photo:</td>
    <td><input type="file" name="image"></td>
</tr>
</table>
<input type="submit" name="browse" class="btn btn-primary" value="Update">
</form>
<?php
$stmt->close();
$con->close();
?>
</div>
</div>
<?php
    include "yfoot.php";
?>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
</script>
</body>
</html>
