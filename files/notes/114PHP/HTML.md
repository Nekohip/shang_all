VScode安裝套件:live server
輸入"!”
auto save:after delay

格式化文件>排版(shift+alt+F)
CS193P

Ctrl + /  >>註解
<style>

    table,

    th,

    td{

        /* 框線 */

        border: 1px solid black;

        /* 文字置中 */

        text-align: center;

    }

</style>

<table width="100%">
        <tr>    /* row */

            <td><img src="./images/pic6.png" alt="Trulli" width="100%"></td>    /* column */

        </tr>
        
</table>

![[Pasted image 20251002105552.png]]
Element:成對標籤(<html><head><body>)
可以用GPT置換圖片
"這段w3school的範本有圖片，幫我換成unsplash裡的圖片"

<h1 style="background-color:powderblue;">This is a heading</h1>
也能寫在head
<style>
h1{
	background-color:powderblue;
}
</style>


檔案表示:
1. .html和*.jpg在不同硬碟:
<img src="file:///f:/*.jpg" width="300" height="120"/>
2. .html和*.jpg在相同資料夾:
<img src="*.jpg" width="300" height="120"/>
3.  *.jpg在img資料夾，img和html在同資料夾:
<img src="image/*.jpg/"width="300" height="120"/>
4.  *.jpg 在img資料夾，html在connage資料夾，img和connage在同資料夾
<img src="../image/*.jpg/"width="300" height="120"/>
5.圖片在網路
<img src="http://static.runoob.com/images/runoob-logo.png" width="300" height="120"/>

./代表文件所在的資料夾
../上一層資料夾
../../上一層的上一層
/根目錄
creative