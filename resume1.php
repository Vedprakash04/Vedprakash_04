<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<center><u><h1>RESUME</h1></u></center><br>
	<b><?php
	echo$_POST['name']; ?></b>
	Present Address:-<br><?php
	echo$_POST['pre1']; ?><br>
	E-mail:<?php
	echo$_POST['email']; ?>
	<br>
	Contact No:<?php
	echo$_POST['number']; ?><br>
	<p>To achieve a challenging position in he industry and to use<br>my technical communication and interpersonal skills for the growth of<br>organization.</p><h3>Educational Qualification:</h3>
	<table class="table table-bordered" style="width:50px">
<thead>
      <th>Qualification</th>
   <th>Board/University</th>
<th>Year of Passing</th>
<th>percentage</th>
</thead>
<tbody>
<tr>
<td><?php
	echo$_POST['q1']; ?></td>
<td><?php
	echo$_POST['b1']; ?></td>
<td><?php
	echo$_POST['year1']; ?></td>
<td><?php
	echo$_POST['per1']; ?></td></tr>
<tr><td><?php
	echo$_POST['q2']; ?></td>
<td><?php
	echo$_POST['b2']; ?></td>
<td><?php
	echo$_POST['year2']; ?></td>
<td><?php
	echo$_POST['per2']; ?></td></tr>

</tbody>
</table>
<h3>Technical Qualification:</h3>
<table class="table table-bordered" style="width:50px">
<thead>
      <th>Qualification</th>
   <th>University</th>
<th>Year of Passing</th>
<th>percentage</th>
</thead>
<tbody>
<tr>
<td><?php
	echo$_POST['q3']; ?></td>
<td><?php
	echo$_POST['b3']; ?></td>
<td><?php
	echo$_POST['year3']; ?></td>
<td><?php
	echo$_POST['per3']; ?></td></tr>

</tbody>
</table>
<br>
Project:-<?php
	echo$_POST['pname']; ?><br>
Training:-<?php
	echo$_POST['tname']; ?>
	<center><input style="background-color:lightblue;" type = "button" value = "Print" onclick = "window.print()" /></center>
</body>
</html>