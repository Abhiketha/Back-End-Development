<html>
<body> 

<?php


$link = mysqli_connect("sdb-55.hosting.stackcp.net", "student85-353031316d91", "ua92-studentAc", "student85-353031316d91");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Students</h3>
	
		<table>
		
			<tr>
				<th width="150px">sID<br><hr></th>
				<th width="250px">sName<br><hr></th>
				<th width="250px">lname<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT sID, sName, lname  FROM student");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['sID']}</th>
				<th>{$row['sName']}</th>
				<th>{$row['lname']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>


