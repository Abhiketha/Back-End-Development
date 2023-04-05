<?php


$link = mysqli_connect("sdb-55.hosting.stackcp.net", "student85-353031316d91", "ua92-studentAc", "student85-353031316d91");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $tname = $_POST['tname'];
    $lname = $_POST['lname'];
  
    echo "$tname";
    echo "$lname";
   

    $sql = "INSERT INTO t1  (tname, lname) VALUES ('$tname', '$lname')";
  
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>