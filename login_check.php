<?php
mysql_connect('localhost', 'root', '');
mysql_select_db('ruangprogrammer');  //sesuaikan dengan nama database anda
function antiinjection($data)
{
    $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
    return $filter_sql;
}

$var_username = antiinjection($_POST['frm_username']);
$var_password = antiinjection(md5($_POST['frm_password']));

$sqlShow = "SELECT admin_id,admin_username,admin_password FROM admin WHERE admin_username='$var_username' AND admin_password='$var_password'";
$result = mysql_query($sqlShow);
$rows = mysql_num_rows($result);

// Apabila username dan password ditemukan
if ($rows > 0) {
    session_start();
    $data = mysql_fetch_array($result);

    $_SESSION['username'] = $data['admin_username'];
    $_SESSION['password'] = $data['admin_password'];
    // echo "login berhasil";
    header('location:admin_area.php');
} else {
    header('location: index.php?action=gagal');
}

?>