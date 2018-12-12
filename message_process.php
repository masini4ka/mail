<?php
/**
 * Validation of user input data
 * Insert into the db if no errors
 */
require ("db_connect.php");
$name=$email=$msg=$email_error=$msg_error=$name_error=$success="";
function test_input($input){
    $input=trim($input);
    $input=stripslashes($input);
    $input=htmlspecialchars($input);
    return $input;
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['name'])){
        $name_error="Name is required";
    }else{
        $name=test_input($_POST['name']);
        if(!preg_match("/^[a-zA-Z]*$/", $name)){
            $name_error="Only letters and white space allowed";
        }
    }
    if(empty($_POST['email'])){
        $email_error="Email is required";
    }else{
        $email=test_input($_POST['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_error="Invalid email format";
        }
    }
    if(empty($_POST['msg'])){
        $msg="";
    }else{
        $msg=test_input($_POST['msg']);
    }
    if($name_error =='' and $email_error== ''){
        $sql = "INSERT INTO maildata('Name', 'Email', 'Message') VALUES ('$name', '$email', '$msg')";
        $result = $db->query($sql);
        unset($db);
        $success="Your message has been saved";
        $name=$email=$msg="";
    }
}
