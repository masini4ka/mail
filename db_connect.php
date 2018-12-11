<?php
//$db_host="localhost";
//$db_username="root";
//$db_password="";
//$db_name="mail";
//
//$db_connect=mysqli_connect($db_host,$db_username,$db_password,$db_name) or die();
//
//if($mysqli_connect_error()){
//    echo "Failed to connect to dtabase-", $mysqli_connect_error();
//}else{
//    echo "connection sussess";
//}

$db = new SQLite3('maildatabase.sqlite') or die("cannot connect to the database");

//$sql = "SELECT * FROM maildata";
//$result = $db->query($sql);
//while ($row = $result->fetchArray(SQLITE3_ASSOC)){
//    echo $row['Name'] . ': $' . $row['Email'] . '<br/>';
//}
//unset($db);
