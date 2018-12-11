<?php

require ("db_connect.php");

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$msg=$_REQUEST['msg'];

$sql = "INSERT INTO maildata('Name', 'Email', 'Message') VALUES ('$name', '$email', '$msg')";
$result = $db->query($sql);

//while ($row = $result->fetchArray(SQLITE3_ASSOC)){
//    echo $row['Name'] . ': $' . $row['Email'] . '<br/>';
//}
unset($db);
//header("location:index.html?note=success");
header("location:\mailing\messages.php");
//$query = mysqli_query($db_connect,'INSERT INTO maildata (name, email, message) VALUES (\'$name\', \'$email\',\'$msg\' )') or die(mysqli_error($db_connect));
////mysqli_close($db_connect);
////header("location:index.html?note=success");