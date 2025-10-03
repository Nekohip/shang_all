//輸入n，輸出n列等腰三角
/*int n = Convert.ToInt32(Console.ReadLine());
for (int i = 0; i < n; i++)
{
    for (int j = n - i - 1; j > 0; j--)
    {
        Console.Write(" ");
    }
    for (int k = 0; k < i + 1; k++)
    {
        Console.Write("*");
    }
    Console.WriteLine();
}*/

//輸入n，輸出2n-1列菱形
int n = Convert.ToInt32(Console.ReadLine());
int l = 1;
for (int i = 0; i < n; i++)
{
    for (int j = n - i - 1; j > 0; j--) //要n-1個空格，每行遞減1，i剛好從0開始
    {
        Console.Write(" ");
    }
    for (int k = 0; k < i + l; k++) //(l/i)0+1=1, 1+2=3, 2+3=5 //奇數個*，每行多2顆，i每次回圈+1，l也+1
    {
        Console.Write("*");
    }
    l++;
    Console.WriteLine();
}
//Console.WriteLine(l);
//此時l=n+1
l -= 4;
for (int i = 0; i < n - 1; i++)  //(n6) n-1=5  //需要n-1行
{
    for (int j = i + 1 ; j > 0; j--)  //j0+1=1,
    {
        Console.Write(" ");
    }
    for (int k = 0; k < n + l; k++)  //(n6/l3) 6+3=9,6+1=7,6-1=5
    {
        Console.Write("*");
    }
    l -= 2;
    Console.WriteLine();
}