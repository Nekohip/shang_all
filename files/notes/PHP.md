**

[https://mackliu.github.io/php-book/categories/](https://mackliu.github.io/php-book/categories/)

xampp/xampp-control.ini 唯讀關掉，權限設完全控制

在config>httpd.conf更改XAMPP的workspace資料夾
DocumentRoot ”F:/php_basic”
<Directory "F:/php_basic">
這兩個資料夾要一樣
"#"是註記
  
XAMPP會先讀index.html/[index.xxx](http://index.xxx)(某個副檔名),若沒有會顯示資料夾裡的檔案列表
![[Pasted image 20251003094309.png]]
DirectoryIndex決定哪個檔案優先
工作用資料夾及檔案名稱要全小寫，不要有空白

Options Indexes FollowSymLinks Includes ExecCGI將
"Indexes"拿掉，資料夾裡無index時，就不會讀取資料夾內檔案
![[Pasted image 20251003094403.png]]
檔案>設定>延伸模組>PHP，Validate>"C:\\xampp\\php\\php.exe"
查看原始碼:
view-source:https://www.facebook.com/?locale=zh_TW

SEO搜尋引擎最佳化
符合規範的網站會被人工排在google最前面

network裡能檢查素材大小及下載速度![[server.png]]
![[螢幕擷取畫面 2025-10-03 113307.png]]
左上角點開可以用鼠標點網頁，查看元素在原始碼的哪行
接近真理的東西會被定義成"常數"，永遠不能變動
常數會一直占用記憶體，少用
變數沒用時系統會移除

二元運算子
=>  用在陣列
->  用在物件、成員、行為、屬性、方法

===  比較變數的同時比較資料型態，在所有程式語言作用都一樣

php的程式不顯示在瀏覽器上，因為已經被編譯成HTML字串