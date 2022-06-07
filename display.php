<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
		<?php include 'css/links.php'; ?> 
		<?php include 'css/dstyle.css'; ?>
</head>
<body>
	<div class="main-div">
		<h1>List of Participants for the Event<h1>
			<div class="center-div">
				<div class="table-responsive">
					<table>
						<thead>
							<tr>
								<th>S.NO</th>
								<th>Firstname</th>
								<th>Lastname</th>
								<th>Gender</th>
								<th>College</th>
								<th>D.O.B</th>
								<th>Email</th>
								<th>Areacode</th>
								<th>Phone</th>
								<th>Department</th>
								<th>Semester</th>
								<th>Outdooors</th>
								<th colspan="2">Indoors</th>
							</tr>
						</thead>
				
						<tbody>
							<?php 

								$conn=mysqli_connect("localhost","root","","mproject");
	
								if(!$conn)
								{
									die("No connection".mysqli_connect_error());
								}
								else
								{
									echo 
									"
									<script>
										alert('Connection Successfull...');
									</script>
									";
								}
	
								$query="select * from registration";
								$sql=mysqli_query($conn,$query);
	
								$num=mysqli_num_rows($sql);
	
								while($res=mysqli_fetch_array($sql))
								{
							?>
									<tr>
										<td><?php echo $res['S.NO'] ?></td>
										<td><?php echo $res['Firstname'] ?></td>
										<td><?php echo $res['Lastname'] ?></td>
										<td><?php echo $res['Gender'] ?></td>
										<td><?php echo $res['College'] ?></td>
										<td><?php echo $res['DOB'] ?></td>
										<td><span class="email-style"> <?php echo $res['Email'] ?> </span> </td>
										<td><?php echo $res['Areacode'] ?></td>
										<td><?php echo $res['Phone'] ?></td>
										<td><?php echo $res['Department'] ?></td>
										<td><?php echo $res['Semester'] ?></td>
										<td><?php echo $res['Outdoors'] ?></td>
										<td><?php echo $res['Indoors'] ?></td>
									</tr>
							<?php
								}
								mysqli_free_result($sql);
								mysqli_close($conn);
							?>
						</tbody>
					</table>
				</div>	
			</div>
		</div>
	
</body>
</html>