int n1 = Convert.ToInt32(Console.ReadLine());
int n2 = Convert.ToInt32(Console.ReadLine());
for(int i = n1; i > 0; i--)
{
    for (int j = n2; j > 0; j--)
    {
        if(n1 % i == 0 && n2 % j == 0 && i == j)
        {
            Console.Write("最大公因數:" + j);
            return;
        }
    }
}