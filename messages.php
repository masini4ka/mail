<html>
<head>
    <meta charset="UTF-8">
    <title>MAIL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
    <link rel="stylesheet" href="styles/styles.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">M-mail</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="/mailing/index.html">Home</a></li>
            <li class="active"> <a href="/mailing/messages.php">Messages</a></li>
            <li><a href="/mailing/contact.php">Contact</a></li>
        </ul>
    </div>
</nav>
</body>
</html>
<?php

require ("db_connect.php");


$sql = "SELECT * FROM maildata";
$result = $db->query($sql);

while ($row = $result->fetchArray(SQLITE3_ASSOC)){
    echo 'From: '. $row['Name'] . ' ('.$row['Email'].')'.'<br>' . 'Message: '.$row['Message'] . '<br/><br>';
}
unset($db);

