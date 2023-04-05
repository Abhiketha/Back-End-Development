<?php

//mysqli_connect() function establishes a connection with MySQL server and returns the connection as an object.
/*
   $host = "sdb-55.hosting.stackcp.net";
   $username  = "student85-353031316d91";
   $passwd = "ua92-studentAc";
   $dbname = "student85-353031316d91";
*/
$link = mysqli_connect("sdb-55.hosting.stackcp.net", "student85-353031316d91", "ua92-studentAc", "student85-353031316d91");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}


/*
The isset() function checks whether a variable
 is set, which means that it has to be declared 
 and is not NULL. 
 This function returns true if the variable
  exists and is not NULL, 
  otherwise it returns false.
*/
if (isset($_POST['submit'])) {

    $sname = $_POST['sName'];
    $lname = $_POST['lname'];

    echo "$sname";
    echo "$lname";

/*
mysqli_query() function accepts a string value
representing a query as one of the parameters
and, executes/performs the given query 
on the database
*/
    $sql = "INSERT INTO student(sName,lname) VALUES ('$sname','$lname')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}