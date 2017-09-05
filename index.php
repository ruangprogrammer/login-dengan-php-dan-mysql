<?php
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="login_check.php">
    <br/><br/><br/>
    <p align="center">
        <?php
        if ($_GET['action'] == 'gagal') {
            echo "<b style='color:red'>Login  Gagal..!!!</b>";
        } elseif ($_GET['action'] == 'logout') {
            echo "<b>Anda Sudah Logout</b>";
        } elseif ($_GET['action'] == 'logindulu') {
            echo "<b>Anda tidak mempunyai akses ke sistem</b>";
        }
        ?>
    </p>
    <table border="0" align="center">
        <tr>
            <td>Username</td>
            <td>:</td>
            <td>
                <input type="text" name="frm_username" id="frm_username"/>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td>
                <input type="password" name="frm_password" id="frm_password"/>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
                <input type="submit" name="Submit" value="Login" id="Submit"/>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
