<a href="index.php"><button>Add Blog</button></a>

<table border="1">
	<tr>
		<th>Descriptions</th>
	</tr>
<?php

include ("dbconnect.php");

$sql=mysql_query("SELECT * FROM texteditor");
while($row = mysql_fetch_array($sql))
{
?>
	<tr>
		<td><?=$row['description']?></td>
	</tr>

<?php
 }
?>
</table>