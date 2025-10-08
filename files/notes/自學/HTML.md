檔案表示:
1. .html和*.jpg在不同硬碟:
img src="file:///f:/*.jpg" width="300" height="120"/
2. .html和*.jpg在相同資料夾:
img src="*.jpg" width="300" height="120"/
3.  *.jpg在img資料夾，img和html在同資料夾:
img src="image/*.jpg/"width="300" height="120"/
4.  *.jpg 在img資料夾，html在connage資料夾，img和connage在同資料夾
img src="../image/*.jpg/"width="300" height="120"/
5. 圖片在網路
img src="http://static.runoob.com/images/runoob-logo.png" width="300" height="120"/

./代表文件所在的資料夾
../上一層資料夾
../../上一層的上一層
/根目錄

屬性:一個名稱、值成對出現
值可用" "或' '，若值本身就有' '，那就要用" "表示，反之也是，例如:
<a href="https://www.runoob.com?q='search'">Link</a>