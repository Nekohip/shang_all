
        <!-- 頁首 -->
        <header class="header">
            <div class="header-content">
                <div class="logo">
                    <div class="logo-mark">TF</div>
                    <div>
                        <h1>TechFlow Solutions</h1>
                        <p>創新科技 • 卓越服務</p>
                    </div>
                </div>
                
                <!-- 導覽列 -->
                <nav class="navbar">
                    <a href="index.php?pos=index" class="nav-link <?=($_GET['pos']=='index')?'active':'';?>" >
                        首頁
                    </a>
                    <a href="news.php?pos=new" class="nav-link <?=($_GET['pos']=='new')?'active':'';?>" >
                        公告欄
                    </a>
                    <a href="about.php?pos=about" class="nav-link <?=($_GET['pos']=='about')?'active':'';?>" >
                        關於我們
                    </a>
                    <a href="services.php?pos=service" class="nav-link <?=($_GET['pos']=='service')?'active':'';?>">
                        服務介紹
                    </a>
                    <a href="contact.php?pos=contact" class="nav-link <?=($_GET['pos']=='contact')?'active':'';?>">
                        聯絡我們
                    </a>
                </nav>
            </div>
        </header>
                