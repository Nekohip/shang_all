<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            height: 30vh;
            width: 50%;
            margin: auto;
            border: 1px solid black;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login_buttom{
            margin: 25px 0 0 90px;
        }
    </style>
</head>
<body>
    <div class='container'>
        <form action='' method='post'>
            <label>帳號</label><input type='text' name='acc'><br>
            <label>密碼</label><input type='password' name='pwd'><br>
            <input type='submit' value='登入' class='login_buttom'><br>
        </form>
    

        <?php
            $acc[] = 'user';
            $pwd[] = 'admin';
            $useracc = $_POST['acc'];
            $userpwd = $_POST['pwd'];

            if($useracc == $acc[0] && $userpwd == $pwd[0])
            {
                echo '<p>登入成功</p>';
            }
            else
            {
                echo '<p>登入失敗</p>';
            }
        ?>
    </div>
</body>
</html>