        <!--index.php-->
        <header class="header">
            <div class="header-content">
                <div class="logo">
                    <div class="logo-mark">TF</div>
                    <div>
                    <?php 
                    switch($_GET['pos']){
                        case "index":
                            echo "<h1>TechFlow Solutions</h1>";
                            echo "<p>創新科技 • 卓越服務A</p>";
                        break;
                        case "about":
                            echo "<h1>TechFlow Solutions</h1>";
                            echo "<p>創新科技 • 卓越服務B</p>";
                        break;
                        case "news":
                            echo "<h1>TechFlow Solutions</h1>";
                            echo "<p>創新科技 • 卓越服務Z</p>";                            
                            break;
                        case "contact":
                            echo "<h1>TechFlow Solutions</h1>";
                            echo "<p>創新科技 • 卓越服務C</p>";
                        break;
                        case "services":
                            echo "<h1>TechFlow Solutions</h1>";
                            echo "<p>創新科技 • 卓越服務S</p>";
                        break;
                    }
                    ?>
                    </div>
                </div>
                
                <!-- 導覽列 -->
                <?php include "navbar.php";?>
            </div>
        </header>
