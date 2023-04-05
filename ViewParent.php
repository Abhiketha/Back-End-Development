<html>
<body> 

<?php


$link = mysqli_connect("sdb-55.hosting.stackcp.net", "student85-353031316d91", "ua92-studentAc", "student85-353031316d91");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Parents</h3>
	
		<table>
		
			<tr>
				<th width="150px">pid<br><hr></th>
				<th width="250px">pname<br><hr></th>
				<th width="250px">lname<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT pid, pname, lname  FROM p1");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['pid']}</th>
				<th>{$row['pname']}</th>
				<th>{$row['lname']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>
