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
    for (int j = n - i - 1; j > 0; j--) //(n/i)5-0-1=4, 5-1-1=3
    {
        Console.Write(" ");
    }
    for (int k = 0; k < i + l; k++) //(l/i)0+1=1, 1+2=3
    {
        Console.Write("*");
    }
    l++;
    Console.WriteLine();

}
//Console.WriteLine(l);
for (int i = 0; i < n; i++)
{
    for (int j = i + 1 ; j > 0; j--) 
    {
        Console.Write(" ");
    }
    for (int k = 0; k < l; k++) 
    {
        Console.Write("*");
    }
    l-=1;
    Console.WriteLine();
}