<?php
//新增session檔案
session_start();
//回傳訪問頁面使用的請求方法(GET/POST)
$method = $_SERVER['REQUEST_METHOD'];
//接收form傳來的數值
//如果_POST['username']存在，移除_POST['username']的前後空白，否則設null
$username = isset($_POST['username']) ? trim($_POST['username']) : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$message = '';
//chk用來判斷登入是否成功、message顯示什麼文字
$chk = false;
//===: 類別也要相等，_SERVER回傳字串
if ($method === 'POST') {
    //帳密一樣，_SESSOIN
    if ($username === 'admin' && $password === '123456') {
        $chk = true;
        $message = '登入成功，歡迎回來！';
        //新增key:login value是1
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
                <!-- 右邊box -->
                <div>
                    <h1>MyApp</h1>
                    <p>專屬會員入口</p>
                </div>
            </div>

            <!-- 判斷chk是否true，執行echo $message; -->
            <h2 class="headline"><?php echo $chk ? $message : $message; ?></h2>
            <p class="sub"></p>
        </div>
        <!-- 左邊form -->
        <div class="card" role="region" aria-label="登入結果">
            <!-- 交替語法，php和html間切換 -->
            <!-- method非post -->
            <?php if ($method !== 'POST'): ?>
                <div class="status err">請從登入表單提交資料。請按下方按鈕返回登入頁面。</div>
            <!-- method為post -->
            <?php else: ?>
                <?php if ($chk): ?>
                    <div class="status ok"><?php echo '帳號：'.$username ?></div>
                <?php else: ?>
                    <div class="status err"><?php echo 'ERROR' ?></div>
                <?php endif; ?>  <!-- 交替語法結尾要endif -->
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