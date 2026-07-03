<?php
session_start();

if(!isset($_SESSION['students'])){
    $_SESSION['students'] = [];
}
?>

<!DOCTYPE html>
<html>

<head>
<title>Student Information Management System</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Student Information Management System</h1>

<form action="add_student.php" method="post">

<input type="text" name="student_id" placeholder="Student ID" required>

<input type="text" name="name" placeholder="Student Name" required>

<input type="text" name="programme" placeholder="Programme" required>

<input type="email" name="email" placeholder="Email" required>

<button type="submit">Add Student</button>

</form>

<table>

<tr>
<th>Student ID</th>
<th>Name</th>
<th>Programme</th>
<th>Email</th>
<th>Action</th>
</tr>

<?php foreach($_SESSION['students'] as $index => $student): ?>

<tr>

<td><?= htmlspecialchars($student['student_id']) ?></td>

<td><?= htmlspecialchars($student['name']) ?></td>

<td><?= htmlspecialchars($student['programme']) ?></td>

<td><?= htmlspecialchars($student['email']) ?></td>

<td>

<a class="delete"
href="delete_student.php?id=<?=$index?>">
Delete
</a>

</td>

</tr>

<?php endforeach; ?>

</table>

</div>

</body>
</html>
