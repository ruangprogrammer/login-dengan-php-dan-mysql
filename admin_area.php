<?php
session_start();
if (empty($_SESSION['username'])) {
    header('location: index.php?action=logindulu');
} else {
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
            "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        <title>Untitled Document</title>
    </head>

    <body>
    <h2>Administrator</h2>
    <p>Anda login sebagai <b><?php echo $_SESSION['username']; ?></b></p>
    <br/>
    <a href="logout.php">logout</a>
    </body>
    </html>
    <?php
}
?>