<!DOCTYPE html>
<html>

<head>
    <title>AYO LOGIN</title>
    <style type="text/css">
        body {
            font-family: Verdana;
            font-size: 14px;
            background-color: #F7F7F7;
        }

        input,
        button {
            padding: 7px;
        }

        button {
            cursor: pointer;
        }

        .container {
            background-color: #FFFFFF;
            border: 1px solid #000000;
            padding: 10px;
            width: 400px;
            margin: 0 auto;
        }

        .container .form-control {
            margin-bottom: 10px;
            width: 100%;
        }

        .container .form-control:last-child {
            margin-bottom: 0;
        }

        .container .form-control input {
            width: 380px;
        }

        .container .form-control button {
            width: 397px;
        }

        .container .pesan {
            color: #FFFFFF;
            text-align: center;
            padding: 7px;
            background-color: #FF0000;
            font-weight: bold;
        }
    </style>
</head>

<body>
<div class="container my-4">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title"> </div>
            </div> 
    <h1 align="center">Masuk Disini</h1>
    <style>
        body {
            background-color: wheat;
        }
    </style>
    <hr>
    <form action="login-proses.php" method="post">
        <table width="300" border="0" align="center">
            <tr>
                <td width="150">Username</td>
                <td>
                    <input type="text" name="username" required>
                </td>
            </tr>
            <tr>
                <td width="150">Password</td>
                <td>
                    <input type="password" name="password" required>
                </td>
            </tr>
            <tr>
                <td width="150"></td>
                <td>
                    <input type="submit" name="login" value="login" required>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>