<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";

if (!$conn) {
die("Database connection failed: " . mysqli_connect_error());
}


if (isset($_GET['toggle'])) {

$id = intval($_GET['toggle']);

$result = mysqli_query($conn, "SELECT status FROM user WHERE id=$id");

if (!$result) {
die("SELECT ERROR: " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);

if (!$row) {
die("User not found.");
}

$newStatus = ($row['status'] == 1) ? 0 : 1;

$query = "UPDATE user SET status=$newStatus WHERE id=$id";

if (!mysqli_query($conn, $query)) {
die("UPDATE ERROR: " . mysqli_error($conn));
}

header("Location: index.php");
exit();
}


if (isset($_POST['submit'])) {

$name = mysqli_real_escape_string($conn, $_POST['name']);
$age = intval($_POST['age']);

$query = "INSERT INTO user (name, age, status)
VALUES ('$name', $age, 0)";

if (!mysqli_query($conn, $query)) {
die("INSERT ERROR: " . mysqli_error($conn));
}

header("Location: index.php");
exit();
}

?>

<!DOCTYPE html>
<html>

<head>

<title>User Form</title>

<style>

body {
font-family: Arial;
width: 700px;
margin: 40px auto;
}

form {
display: flex;
gap: 10px;
margin-bottom: 20px;
}

input {
padding: 8px;
}

input[type=submit] {
cursor: pointer;
}

table {
width: 100%;
border-collapse: collapse;
}

th, td {
border: 1px solid black;
padding: 10px;
text-align: center;
}

.btn {
text-decoration: none;
color: white;
padding: 6px 12px;
border-radius: 5px;
}

.on {
background: green;
}

.off {
background: red;
}

</style>

</head>

<body>

<h2>User Form</h2>

<form method="POST">

<input
type="text"
name="name"
placeholder="Name"
required
>

<input
type="number"
name="age"
placeholder="Age"
required
>

<input
type="submit"
name="submit"
value="Submit"
>

</form>


<?php

$result = mysqli_query($conn, "SELECT * FROM user");

if (!$result) {
die("SELECT ERROR: " . mysqli_error($conn));
}

?>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php

while ($row = mysqli_fetch_assoc($result)) {

$status = $row['status'] ?? 0;

$statusClass = ($status == 1) ? "on" : "off";
$statusText = ($status == 1) ? "ON" : "OFF";

?>

<tr>

<td>
<?= htmlspecialchars($row['id']) ?>
</td>

<td>
<?= htmlspecialchars($row['name']) ?>
</td>

<td>
<?= htmlspecialchars($row['age']) ?>
</td>

<td>
<?= htmlspecialchars($status) ?>
</td>

<td>

<a
class="btn <?= $statusClass ?>"
href="?toggle=<?= $row['id'] ?>"
>
<?= $statusText ?>
</a>

</td>

</tr>

<?php
}
?>

</table>

</body>
</html>