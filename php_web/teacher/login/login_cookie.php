<?php
//設定時區以用台北時間計算cookie存活時間
date_default_timezone_set("Asia/Taipei");

//isset檢測變數已設置且值非null
//如果_COOKIE['login']已設置且值是1，showForm為false
$showForm = !(isset($_COOKIE['login']) && $_COOKIE['login'] == '1');

echo $showForm;
?>
<!doctype html>
<html lang="zh-Hant">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>會員登入</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrap" role="main" aria-labelledby="login-title">
        <div class="hero" aria-hidden="false">
            <div class="logo" aria-hidden="true">
                <div class="mark" aria-hidden="true">
                    <!-- simple icon -->
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M3 12C3 7.03 7.03 3 12 3s9 4.03 9 9-4.03 9-9 9S3 16.97 3 12z" fill="rgba(255,255,255,0.18)" />
                        <path d="M8.5 12.5L11 15l5-5" stroke="#fff" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <!-- 左邊box -->
                <div>
                    <h1>MyApp-<?=date("Y-m-d H:i:s");?></h1>
                    <p>專屬會員入口-COOKIE</p>
                </div>
            </div> 
            <h2 class="headline">歡迎回來，輕鬆登入</h2>
            <p class="sub">輸入您的帳號與密碼即可登入。此畫面僅負責前端表單，驗證請交由 chk_login.php 處理。</p>

            <div class="art">
                <div class="pill">快速登入</div>
                <div style="flex:1"></div>
                <div class="pill">安全加密</div>
            </div>
        </div>
        <!-- 右邊form -->
        <div class="card" role="region" aria-label="登入表單">
            <!-- 如果showForm是false顯示登入表單 -->
            <?php if ($showForm): ?>
                <h2 id="login-title">會員登入</h2>
                <p class="lead">請使用您的帳號登入，如需協助請聯絡客服。</p>
                <!-- 傳送方式是post的form -->
                <form action="chk_login_cookie.php" method="post" autocomplete="on" novalidate>
                    <div class="field">
                        <label for="username">帳號 / 電子郵件</label>
                        <div class="input">
                            <!-- 將輸入的數值傳送，key:name value:輸入的值 -->
                            <input id="username" name="username" type="text" placeholder="請輸入帳號或Email" autocomplete="username" />
                        </div>
                    </div>

                    <div class="field">
                        <label for="password">密碼</label>
                        <div class="input">
                            <input id="password" name="password" type="password" placeholder="請輸入密碼" autocomplete="current-password" />
                        </div>
                    </div>

                    <div class="actions" style="margin-top:6px">
                        <div class="left-actions">
                            <label class="checkbox">
                                <input type="checkbox" name="remember" value="1" style="width:16px;height:16px;border-radius:4px;accent-color:#7c3aed" />
                                記住我
                            </label>
                        </div>
                        <!-- 按下傳送，並跳到chk_login_cookie.php -->
                        <div style="display:flex;gap:10px">
                            <button type="submit" class="btn">登入</button>
                            <a class="ghost" href="#" onclick="return false;">註冊</a>
                        </div>
                    </div>

                    <div class="helper">
                        <span style="color:rgba(255,255,255,0.55);font-size:13px">尚未有帳號？</span>
                        <a class="forgot" href="#" onclick="return false;">忘記密碼？</a>
                    </div>
                </form>
                <!-- 如果showForm是true顯示登入成功 -->
            <?php else: ?>
                <h2 id="login-title">登入成功</h2>
                <p class="lead">您已成功登入系統。</p>
                <div style="margin-top:18px">
                    <a class="ghost" href="login.php" style="display:inline-flex">返回登入頁面</a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <svg class="decor" width="160" height="160" viewBox="0 0 160 160" fill="none" aria-hidden="true">
        <defs>
            <linearGradient id="g" x1="0" x2="1">
                <stop offset="0" stop-color="#7c3aed" stop-opacity="0.9" />
                <stop offset="1" stop-color="#06b6d4" stop-opacity="0.9" />
            </linearGradient>
        </defs>
        <circle cx="80" cy="80" r="60" stroke="url(#g)" stroke-width="6" fill="none" />
    </svg>
</body>

</html>