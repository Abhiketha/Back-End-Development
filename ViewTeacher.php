<html>
<body> 

<?php


$link = mysqli_connect("sdb-55.hosting.stackcp.net", "student85-353031316d91", "ua92-studentAc", "student85-353031316d91");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Teachers</h3>
	
		<table>
		
			<tr>
				<th width="150px">tid<br><hr></th>
				<th width="250px">tname<br><hr></th>
                <th width="250px">lname<br><hr></th>
			</tr>
				
			<?php
			

			$sql = mysqli_query($link, "SELECT tid, tname, lname  FROM t1");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['tid']}</th>
				<th>{$row['tname']}</th>
                <th>{$row['lname']}</th>
				
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

