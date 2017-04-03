<?php 
include('/Student');
include('/StudentInfo');

$stud1 = new StudentInfo('George', 'Miller', 'gcm15', 31094832, 3.64, 103, 'Computer Engineering');
$stud2 = new StudentInfo('Patty', 'Smith', 'pos4', 31954012, 3.96, 74, 'Chemical Engineering');

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<h1> Student Academic Chart </h1>
	
	<table>
  		<tr>
    			<th>Firstname</th>
    			<th>Lastname</th> 
    			<th>Username</th>
			<th>Peoplesoft ID</th>
			<th>GPA</th>
			<th>Credits</th>
			<th>Major</th>
  		</tr>
  		<tr>
    			<td><?php echo $stud1->getFirst(); ?></td>
    			<th><?php echo $stud1->getLast(); ?></th> 
    			<th><?php echo $stud1->getUsername(); ?></th>
			<th><?php echo $stud1->getPeoplesoft(); ?></th>
			<th><?php echo $stud1->getGPA(); ?></th>
			<th><?php echo $stud1->getCredits(); ?></th>
			<th><?php echo $stud1->getMajor(); ?></th>
  		</tr>
 		<tr>
    			<td><?php echo $stud2->getFirst(); ?></td>
    			<th><?php echo $stud2->getLast(); ?></th> 
    			<th><?php echo $stud2->getUsername(); ?></th>
			<th><?php echo $stud2->getPeoplesoft(); ?></th>
			<th><?php echo $stud2->getGPA(); ?></th>
			<th><?php echo $stud2->getCredits(); ?></th>
			<th><?php echo $stud2->getMajor(); ?></th>
 		</tr>
	</table>
</body>
</html>
