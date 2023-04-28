<!doctype html>
<html>
<head>
    <title>panel</title>
    <style>
        body{
            direction: rtl;
        }
        table , th , td{
            border: black 2px solid;
            text-align: center;
        }
        table{
            width: 100%;
            height: 100px;
            border-collapse:collapse;
        }
        th{
            color: white;
            background-color: green;
            font-family: IRYekan;
        }
        h1{
            font-family: IRYekan;
            text-align: center;
            color: red;
        }
    </style>
</head>
<body>
<h1> به حساب کابری خوش آمدید</h1>
<table>
    <tr>
        <th>نام کاربری</th>
        <th>ایمیل</th>
        <th>رمز عبور</th>
    </tr>
    <tr>
        <td>
            <?php $username=$_POST['username'];
            echo $username;
            ?>
        </td>
        <td>
            <?php $email=$_POST['email'];
            echo $email;
            ?>
        </td>
        <td>
            <?php $password=$_POST['password'];
            echo $password;
            ?>
        </td>
    </tr>
</table>
</body>
</html>
