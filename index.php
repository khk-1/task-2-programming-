<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Task 2 Programming</title>

<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">

<h2>Task 2 Programming</h2>

<form id="userForm">

<input type="text" id="name" placeholder="Name" required>

<input type="number" id="age" placeholder="Age" required>

<button type="submit">Submit</button>

</form>

<table>

<thead>

<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Status</th>
<th>Action</th>
</tr>

</thead>

<tbody id="tableBody">

<?php
while($row = mysqli_fetch_assoc($result)){
?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['age']; ?></td>
<td><?php echo $row['status']; ?></td>

<td>

<button onclick="toggleStatus(<?php echo $row['id']; ?>)">
Toggle
</button>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

<script src="script.js"></script>

</body>
</html>