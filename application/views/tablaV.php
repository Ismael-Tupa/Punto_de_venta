<!DOCTYPE html>
<html>
<head>
	<title>lll</title>
</head>
<body>
	<table>
		<tr><th>ID</th><th>Nombre</th></tr>
	<?php
		foreach ($tabla as $tablas) 
		{
			echo "<tr>"."<td>".$tablas->id."</td>".
						"<td>".$tablas->nombre."</td>"."</tr>";
		}
	?>	
	</table>
</body>
</html>