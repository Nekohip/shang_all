Console.WriteLine("Hello World!");  //文字輸出指令

  class   方法
ctrl+k, ctrl+c > 將選中的行變註釋

ctrl+k, ctrl+u > 解除註釋

  

跳脫字元:

\n  //換行

\t  //四個空格(=tab)

  

如果要輸出的文字和指令有衝突，要加 \

e.g.輸出 

天線寶寶說:”你好”

>Console.WriteLine("天線寶寶說\”你好\”");  //把"”裡的”當成文字而非指令

  

創建變數:

1.=左右類型一致

2.右邊的值需要的容器大小，小於等於左邊容器

int a(變數) = 1(常數)

  

命名不能與”關鍵字”重名

[C# 關鍵字和情境關鍵字 - C# reference | Microsoft Learn](https://learn.microsoft.com/zh-tw/dotnet/csharp/language-reference/keywords/)

  

命名規範:

1.駝峰命名法(camel naming):第一個單字首字母小寫，其餘單字首字母大寫

e.g. ericAge, characterHitPoint, heroDamage

  

2.Pascal命名法:每個單字首字母都用大寫

e.g. PI, HP, MP

  

變數用Camel,方法類別用Pascal

  

%模除(求餘):用於整數，用在小數上容易出現不精確的問題

運算子優先級:

乘除 > 加減 > 比較(<,>,<=,>=) > 邏輯(&&,==,||,!)

()裡最優先計算

  

字元編碼轉換成對應數字:

字元’0’的編碼為48，而ASCII 0-9數字編碼為48-57，字元和字元計算時會用編碼來計算，因此所有的字元(編碼)減掉’0’(48)就會等於字元本身

e.g.

char a = ‘8’;

Console.Write(a-’0’);

輸出:8

  

不知道什麼時候終止迴圈用while，明確知道用for

任何迴圈方法都能用其他迴圈實現

  

各迴圈使用時機

for:確定循環次數時

while:確定循環條件時

do while:循環體至少執行一次
