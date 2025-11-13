<!-- check.php -->
<?php
// 模擬正確帳號密碼（實務上應該從資料庫查詢）
$correct_username = "admin";
$correct_password = "123456";

// 接收 POST 資料
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// 驗證
if ($username === $correct_username && $password === $correct_password) {
    echo "<h2>登入成功！</h2>";
    echo "歡迎，" . htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
} else {
    echo "<h2>登入失敗！</h2>";
    echo "帳號或密碼錯誤。";
}
?>
