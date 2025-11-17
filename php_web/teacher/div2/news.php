<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>最新消息 - TechFlow Solutions</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="company.css">
</head>
<body>
    <div class="page-container">
        <!-- 頁首 -->
<?php $pos=explode(".",basename(__FILE__))[0] ; include "header.php";?>
        <!-- 主要內容區 -->
        <main class="main-content">

<section class="hero-section">
    <h1>最新消息</h1>
    <p>掌握 TechFlow Solutions 的最新動態、活動與產業趨勢</p>
</section>

<section class="content-card">
    <h2>近期新聞</h2>
    <ul style="list-style:none; padding:0; margin:0;">
        <li style="margin-bottom:32px;">
            <h3 style="margin-bottom:8px; color:#7c3aed;">2025/11/10 - 榮獲「最佳數位轉型企業獎」</h3>
            <p style="color:rgba(255,255,255,0.8);">TechFlow Solutions 於 2025 年度科技創新大會榮獲「最佳數位轉型企業獎」，感謝所有客戶與夥伴的支持！</p>
        </li>
        <li style="margin-bottom:32px;">
            <h3 style="margin-bottom:8px; color:#06b6d4;">2025/10/28 - 新產品「AI 智能分析平台」正式上市</h3>
            <p style="color:rgba(255,255,255,0.8);">我們推出全新 AI 智能分析平台，協助企業快速洞察數據、提升決策效率，歡迎預約體驗！</p>
        </li>
        <li style="margin-bottom:32px;">
            <h3 style="margin-bottom:8px; color:#7c3aed;">2025/09/15 - 參加台灣雲端科技展</h3>
            <p style="color:rgba(255,255,255,0.8);">TechFlow Solutions 於台北南港展覽館參展，展示最新雲端解決方案，現場反應熱烈！</p>
        </li>
    </ul>
</section>

<section class="content-card">
    <h2>活動預告</h2>
    <ul style="list-style:none; padding:0; margin:0;">
        <li style="margin-bottom:24px;">
            <h3 style="margin-bottom:8px; color:#06b6d4;">2025/12/05 - 數位轉型線上研討會</h3>
            <p style="color:rgba(255,255,255,0.8);">邀請業界專家分享數位轉型成功案例，歡迎免費報名參加！</p>
        </li>
        <li style="margin-bottom:24px;">
            <h3 style="margin-bottom:8px; color:#7c3aed;">2026/01/20 - 新春客戶感謝茶會</h3>
            <p style="color:rgba(255,255,255,0.8);">TechFlow Solutions 將舉辦新春茶會，感謝客戶長期支持，敬請期待！</p>
        </li>
    </ul>
</section>

<section class="content-card" style="text-align:center;">
    <h3>訂閱電子報</h3>
    <p>輸入您的 Email，隨時掌握最新消息與活動資訊！</p>
    <form method="post" action="#" style="max-width:400px; margin:0 auto;">
        <input type="email" name="email" placeholder="請輸入您的 Email" required style="width:100%; padding:12px 14px; border-radius:10px; border:1px solid #7c3aed; margin-bottom:12px;">
        <button type="submit" class="btn-primary" style="width:100%; justify-content:center;">訂閱</button>
    </form>
</section>

        </main>
        <!-- 頁腳 -->
<?php include "footer.php";?>
    </div>
</body>
</html>
