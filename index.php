<?php
session_start();
$login = $_SESSION['login'];
if($login == 1)
{
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
 <title>Form Login Kawan</title>
</head>
<body>
<h1 align="center">Selamat Datang Kawan</h1>

<style>
 body { font-family: verdana; font-size: 12px; }
 a { text-decoration: none; color: blue; }
 a:hover { color: green; }
    body{
        background-image: url(Latest.png);
    }
 </style>
<div class="container my-4">    
    <div id="loginbox" style="margin-top:100px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title"> </div>
            </div> 
<hr>
<a href="index.php">Beranda</a> | 
<hr>
<?php 
$nama     = $_SESSION['nama'];
$username = $_SESSION['username'];

echo "Selamat Datang $nama ($username) ";

?>
<a href="logout.php">Logout</a>
<hr>
</body>
</html>
<?php
}
else {
 include "login.php";
} 
?>