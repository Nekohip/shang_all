<?php
//新增session檔案
session_start();
$method = $_SERVER['REQUEST_METHOD'];
//接收form傳來的數值
//如果_POST['username']存在，移除_POST['username']的前後空白，否則設null
$username = isset($_POST['username']) ? trim($_POST['username']) : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$message = '';
$chk = false;

if ($method === 'POST') {
    if ($username === 'admin' && $password === '123456') {
        $chk = true;
        $message = '登入成功，歡迎回來！';
        $_SESSION['login'] = 1;
    } else {
        $chk = false;
        $message = '帳號或密碼錯誤，請重新嘗試。';
        $_SESSION['login'] = 0;
    }
} else {
    $message = '請由登入表單提交帳密。';
}

?>
<!doctype html>
<html lang="zh-Hant">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>登入檢查</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrap" role="main">
        <div class="hero" aria-hidden="false">
            <div class="logo" aria-hidden="true">
                <div class="mark" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M3 12C3 7.03 7.03 3 12 3s9 4.03 9 9-4.03 9-9 9S3 16.97 3 12z" fill="rgba(255,255,255,0.18)" />
                        <path d="M8.5 12.5L11 15l5-5" stroke="#fff" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div>
                    <h1>MyApp</h1>
                    <p>專屬會員入口</p>
                </div>
            </div>

            <h2 class="headline"><?php echo $chk ? '登入成功' : '登入結果'; ?></h2>
            <p class="sub"></p>
        </div>

        <div class="card" role="region" aria-label="登入結果">
            <?php if ($method !== 'POST'): ?>
                <div class="status err">請從登入表單提交資料。請按下方按鈕返回登入頁面。</div>
            <?php else: ?>
                <?php if ($chk): ?>
                    <div class="status ok">帳號：</div>
                <?php else: ?>
                    <div class="status err"></div>
                <?php endif; ?>
            <?php endif; ?>

            <div style="display:flex;gap:10px;margin-top:12px;align-items:center">
                <a class="ghost" href="login.php">回到登入頁面</a>
                <?php if ($chk) { ?>
                    <form method="post" action="" style="margin:0">
                        <button class="btn" type="button" onclick="location.href='login.php'">繼續</button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>