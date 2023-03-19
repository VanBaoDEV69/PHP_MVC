<?php
require_once '../config/database.php';
require_once '../controllers/EmployeeController.php';


?>

<h1>Employee List</h1>

<a href="?action=create">Thêm nhân viên mới</a>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($employees as $employee) : ?>
			<tr>
				<td><?php echo $employee['id']; ?></td>
				<td><?php echo $employee['name']; ?></td>
				<td><?php echo $employee['email']; ?></td>
				<td><?php echo $employee['phone']; ?></td>
				<td>
					<a href="?action=show&id=<?php echo $employee['id']; ?>">View</a>
					<a href="?action=edit&id=<?php echo $employee['id']; ?>">Edit</a>
					<a href="?action=delete&id=<?php echo $employee['id']; ?>">Delete</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>