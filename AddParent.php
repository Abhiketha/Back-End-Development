<?php


$link = mysqli_connect("sdb-55.hosting.stackcp.net", "student85-353031316d91", "ua92-studentAc", "student85-353031316d91");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $pname = $_POST['pname'];
    $lname = $_POST['lname'];
  
    echo "pname";
    echo "lname";
   

    $sql = "INSERT INTO p1 (pname, lname) VALUES ('$pname', '$lname')";
  
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>