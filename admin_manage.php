<?php
$db = new mysqli ( "localhost", "root", "root", "student" );
if (mysqli_connect_errno ()) {
	echo "unable to connect database!";
}
$query = "select *  from sinfo ";
$result = $db->query ( $query );
$num_result = $result->num_rows;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>admin_manage</title>
</head>
<body>
	<center>
		<h1>admin_manage</h1>
		<br><br>
		<form name="form1" method="post" action="admin_search.php">
		<input type="text" name="sid">
		<input type="submit" value="" />

		<br><br><br><br>
			<table width="600" border="1" align="center">
				<tr>
					<td align="center"></td>
					<td align="center"></td>
					<td align="center"></td>
					<td align="center"></td>
					<td align="center"></td>
					<td align="center"></td>
					<td align="center"></td>
				</tr><?php

				for($i = 0; $i < $num_result; $i ++) {
					$row = $result->fetch_assoc ();
					?>
  <tr>
					<td align="center"><?php  $sid = $row['sid'];echo $sid;?></td>
					<td align="center"><?php echo $row['sname'];?></td>
					<td align="center"><?php echo $row['sscore'];?></td>
					<td align="center"><?php echo $row['sclass'];?></td>
					<td align="center"><?php echo $row['sex'];?></td>
					<td align="center"><?php echo $row['interest'];?></td>
					<td align="center"><a href="<?php echo "delete.php?sid=".$sid ?>"></a></td>
				</tr>
	<?php
				}
				$db->close ();
				?>
</table>
		</form>
		<br><br>
		<td align="center"><a href="login.html"></a></td>
	</center>
	>
</body>
</html>
