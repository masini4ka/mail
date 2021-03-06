<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact anyone</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
    <link rel="stylesheet" href="styles/styles.css" >
    <!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">-->
<?php include('message_process.php'); ?>
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
            <li > <a href="/mailing/messages.php">Messages</a></li>
            <li class="active"><a href="/mailing/contact.html">Contact</a></li>
        </ul>
    </div>
</nav>
<form class="form-contact" method="POST" id="contact_form" action="contact.php">
    <h2 class="form-contact-heading">Contact anyone</h2>
    <br>
    <div class="field">
        <label for="inputName" class="label">Name</label>
        <input type="input" name="name" id="inputName" class="form-control" placeholder="Your Name" value="<?= $name ?>">
        <span class="error"><?= $name_error ?></span>
    </div>
    <div class="field">
        <label for="inputEmail" class="label">E-Mail</label>
        <input type="input" name="email" id="inputEmail" class="form-control" placeholder="name@email.com" value="<?= $email ?>">
        <span class="error"><?= $email_error ?></span>
    </div>
    <div class="field">
        <label for="inputMessage" class="label">Message</label>
        <textarea class="form-control" name = "msg" id="inputMessage" rows="3" value="<?= $msg ?>"></textarea>
    </div>
    <br>
    <div class="field">
        <div class="control">
            <button class="btn btn-lg btn-primary btn-block btn-success" type="submit">Send</button>
        </div>
    </div>
    <div class="success"><?= $success; ?></div>
</form>

</body>
</html>