<?php
	include "inc/header.php";
	include "inc/db.php"
?>
<div class="container p-4">
	<div class="card">
		<div class="card-header d-flex justify-content-between">
			<div class="card-title">
				<h2>Users</h2>
			</div>
			<div>
				<a href="create.php" class="btn btn-primary">Create</a>
			</div>
		</div>
		<div class="card-body">
			<?php
				if(isset($_GET['success'])){
					?>
					<div class="alert alert-success"><?=$_GET['success']?></div>
					<?php
				}
				if(isset($_GET['error'])){
					?>
					<div class="alert alert-danger"><?=$_GET['error']?></div>
					<?php
				}
			?>
			<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>date</th>
				</tr>
				<?php
				$sql = "SELECT * FROM users ORDER BY id DESC";
				$query = mysqli_query($con, $sql);
				while($users = mysqli_fetch_assoc($query)){
					?>
					<tr>
						<td><?=$users['id']?></td>
						<td><?=$users['name']?></td>
						<td><?=$users['email']?></td>
						<td><?=$users['date']?></td>
					</tr>
					<?php
				}
				?>
			</table>
		</div>
	</div>
</div>
<?php
	include 'inc/footer.php'
?>