using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace practice9
{
    internal class practice9
    {
        static void Main(string[] args)
        {
            //1.輸入整數，如果輸入的不是0就繼續輸入；輸入0結束並輸出所有整數的和
            /*int sum = 0;
            int num;
            Console.WriteLine("輸入整數，輸入0加總:");
            
            do
            {
                num = Convert.ToInt32(Console.ReadLine());
                sum += num;
            }
            while (num != 0);

            Console.Write("加總=" + sum);*/


            //2.一顆球落地後反彈回原來高度一半，輸入某高度，計算第10次，落地時經過多少公尺，反彈多高
            /*Console.Write("請輸入高度:");
            double height = Convert.ToInt32(Console.ReadLine());
            double sum = 0;*/

            /*for(int i = 0; i < 10; i++)
            {
                Console.WriteLine("反彈第" + (i+1) + "次，落下" + height + "公尺");
                sum += height;
                Console.WriteLine("已經過" + sum + "公尺"); 
                height /= 2;

                Console.WriteLine("回彈" + height + "公尺");
                if (i < 9)
                {
                    sum += height;
                    Console.WriteLine("已經過" + sum + "公尺\n");
                }

            }*/
            //3.(單獨計算總距離)
            /*double d = 2 * height;
            sum = height;
            for (int i = 0; i<9; i++)
            {
                d /= 2;
                sum += d;
            }
            Console.WriteLine("第10次已經過" + sum + "公尺\n");*/


            //4.輸入整數a,次方n並計算
            /*Console.Write("請輸入整數:");
            int a = Convert.ToInt32(Console.ReadLine());
            Console.Write("請輸入次方:");
            int n = Convert.ToInt32(Console.ReadLine());
            int b = 1;

            for(int i = 0; i < n ; i++)
            {
                b *= a;
            }
            Console.Write(a + "^" + n + " =" + b);*/


            //5.輸入整數，輸出其階乘
            /*Console.Write("請輸入整數:");
            int n = Convert.ToInt32(Console.ReadLine());
            int i = n;
            while(i > 1)
            {
                i--;
                n *= i;
            }
            Console.Write("n!=" + n);*/


            //6.輸入q和n，輸出1+q+q^2+q^3+...+q^n
            /*Console.Write("請輸入整數:");
            int q = Convert.ToInt32(Console.ReadLine());
            Console.Write("請輸入次方:");
            int n = Convert.ToInt32(Console.ReadLine());

            int sum = 1;
            int r = 1;

            for (int i = 0; i < n; i++)
            {
                r *= q;
                sum += r;
            }

            Console.Write(sum);*/


            //7.輸入整數k，讓Sn=1+1/2+1/3+...+1/n，直到Sn>k，輸出n
            /*Console.Write("輸入整數:");
            double k = Convert.ToInt32(Console.ReadLine());
            double n = 2;
            double sn = 1;

            for ( ; sn <= k; n++)
            {
                Console.WriteLine(sn + "+" + "1/" + n);
                sn += 1 / n;
                
            }
            Console.WriteLine("\nSn = " + sn);
            Console.Write("n = " + (n-1));*/


            //8.台灣有p萬人口，每年增長0.1%，n年後有多少人?
            /*Console.Write("輸入年數:");
            int n = Convert.ToInt32(Console.ReadLine( ));
            Console.Write("輸入人口數(x萬人):");
            double p = Convert.ToInt32(Console.ReadLine()); ;

            for(int i = 0; i < n; i++)
            {
                p *= 1.001;
                Console.WriteLine(i+1 + "年後人口為" + p + "萬人");
            }
            Console.Write("\n"+ n + "年後人口為" + (int)p + "萬人");*/


            //9.輸入複合年利率R、現金M、投資Y年，計算最後會有多少錢
            /*Console.Write("輸入年利率:");
            double r = Convert.ToInt32(Console.ReadLine());
            Console.Write("輸入現金:");
            double m = Convert.ToInt32(Console.ReadLine());
            Console.Write("輸入投資年數:");
            int y = Convert.ToInt32(Console.ReadLine());

            for(int i = 0; i < y; i++)
            {
                m += m * (r/100);
            }
            Console.Write((int)m);*/


            //10.輸出所有三位水仙花數(各位數的立方加總=三位數本身)
            /*int i = 1;
            int j = 0;
            int k = 0;
            int n;
            while (i < 10)
            {
                while (j < 10)
                {
                    while (k < 10)
                    {
                        n = i * i * i + j * j * j + k * k * k;
                        int r = Convert.ToInt32(""+i+j+k);
                        if (n > 100 && n < 1000 && n == r)
                        {
                            Console.WriteLine("i=" + i + " j=" + j + " k=" + k + " n=" + n);
                        }
                        k++;

                    }
                    k = 0;
                    j++;

                }
                j = 0;
                i++;

            }*/
            //老師解
            /*for (int i = 100; i <= 999; i++)
            {
                int ones = i % 10;
                int tens = i / 10 % 10;
                int hundreds = i / 100;

                if(ones * ones * ones + tens * tens * tens + hundreds * hundreds * hundreds == i)
                {
                    Console.WriteLine(i);
                }
            }*/


            //11.輸入整數，換行輸出每位數字，從個位開始
            /*Console.Write("請輸入整數:");
            int n = Convert.ToInt32(Console.ReadLine());
            int a = 1;
            int c = 10;
            while (c/10 > 0)
            {
               c = n / a;
               int d = c % 10;
               Console.WriteLine(d);
               a *= 10;
            }*/

            //老師解
            /*Console.Write("請輸入整數:");
            int n = Convert.ToInt32(Console.ReadLine());
            while (n != 0)
            {
                int i = n % 10;
                Console.WriteLine(i);
                n /= 10;
            }*/


            //12.輸入整數，去除整數中的0並輸出
            /*Console.Write("請輸入整數:");
            long n = Convert.ToInt64(Console.ReadLine());
            long a = 1;
            long n1 = n;

            while (n1 > 0)  //取得數字的位數
            {
                n1 /= 10;
                a *= 10;
            }

            while (a > 0)   //*a%10取得每一位數，每乘一次a/10，再*a%10取得下一位
            {
                long c = n / a % 10;
                a /= 10;
                if (c != 0)
                {
                    Console.Write(c);
                }
            }*/

            //老師解
            /*int n = Convert.ToInt32(Console.ReadLine());
            int sum = 0;
            int place = 1;

            while (n != 0)
            {
                int i = n % 10; //取得個位數
                if (i != 0)
                {
                    //將取得的個位數乘上它應該在的位數，個位*1、十位*10以此類推，然後加總
                    i *= place; 
                    sum += i;
                    place *= 10; 
                }

                n = n / 10; //去除個位數
            }
            Console.WriteLine(sum);*/


            //13.輸入整數，輸出整數的相反，不含0
            /*Console.Write("請輸入整數:");
            int n = Convert.ToInt32(Console.ReadLine());
            int a = 1;
            for (int c = 10; c / 10 > 0;)
            {
                c = n / a;
                int d = c % 10;
                if (d != 0)
                {
                    Console.Write(d);
                }
                a *= 10;
            }*/

            //14.只去掉尾數的0
            /*Console.Write("請輸入整數:");
            int n = Convert.ToInt32(Console.ReadLine());

            while(n % 10 == 0 )
            {
                n /= 10;               
            }
            while (n != 0)
            {
                int i = n % 10;
                Console.Write(i);               
                n /= 10;
            }*/

            //老師解
            /*int n = Convert.ToInt32(Console.ReadLine());
            bool zero = false;
            while (n != 0)
            {
                int i = n % 10;
                if (zero == false)
                {
                    if (i != 0)
                    {
                        Console.Write(i);
                        zero = true;
                    } 
                }
                else
                {
                    Console.Write(i);
                }

                n /= 10;
            }*/

            //15.輸入整數，判斷是否回文，是輸出yes，不是輸出no
            /*Console.Write("請輸入整數:");
            int n = Convert.ToInt32(Console.ReadLine());
            int b = n;
            string n2 = "";
            do
            {
                int c = b % 10;
                n2 += c;
                b /= 10;
            }
            while (b > 0);
            Console.WriteLine("倒過來為"+n2);

            if (n == Convert.ToInt32(n2))
            {
                Console.Write("是回文");
            }
            else
            {
                Console.Write("非回文");
            }*/

            //老師解
            /*int n = Convert.ToInt32(Console.ReadLine());
            int b = n;
            int n2 = 0;
            while (b != 0)
            {
                int c = b % 10;
                n2 = n2 * 10 + c;
                b /= 10;
            }

            if (n == n2)
            {
                Console.Write("是回文");
            }
            else
            {
                Console.Write("非回文");
            }*/


            //16.輸入英數混合字串，輸出數字的和
            /*string str = Console.ReadLine();
            char[] charArray = str.ToCharArray();

            int result = 0;
            int sum = 0;
       
            for (int i = 0; i < charArray.Length; i++)
            {
                char n = charArray[i];
                string nStr = Convert.ToString(n);
                bool t = int.TryParse(nStr, out result);
 
                if (t == true)
                {
                    int nInt = Convert.ToInt32(nStr);
                    sum += nInt;
                }
            }
            Console.Write(sum);*/

            //老師解
            /*char c;
            int sum = 0;
            do
            {
                c = (char)Console.Read();
                if (c >= '0' && c <= '9')
                {
                    int number = c - '0';
                    sum += number;
                }
                
            }
            while (c != '@');
            Console.Write(sum);*/

            //17.輸入英、數、符號混和字串，將數字加起來，遇到*加500
            /*string str = Console.ReadLine();
            char[] charArray = str.ToCharArray();

            int result;
            int sum = 0;

            for (int i = 0; i < charArray.Length; i++)
            {
                char n = charArray[i];
                string nStr = Convert.ToString(n);
                bool t = int.TryParse(Convert.ToString(n), out result);

                if (t == true)
                {
                    int nInt = Convert.ToInt32(nStr);
                    sum += nInt;
                }
                else if(nStr == "*")
                {
                    sum += 500;
                }
            }
            Console.Write(sum);*/

            //老師解
            /*char c;
            int sum = 0;
            do
            {
                c = (char)Console.Read();
                if (c >= '0' && c <= '9')
                {
                    int n = c - '0';
                    sum += n;
                }           
                else if (c == '*')
                {
                    sum += 500;
                }
            }
            while (c != '#');
            Console.Write(sum);*/

            //18.輸入整數，輸出整數的因數個數和所有因數
            /*int n = Convert.ToInt32(Console.ReadLine());
            int sum = 0;
            string fac = "";
            
            for(int i = 1; i <= n; i++)
            {
                if (n % i == 0)
                {
                    sum++;
                    fac += i + " ";
                }
            }
            Console.WriteLine("因數個數:" + sum);
            Console.WriteLine("所有因數:" + fac);*/


            //19.輸入正整數，判斷是否質數
            /*int n = Convert.ToInt32(Console.ReadLine());
            int count = 0;

            for(int i = n; i > 0; i--)
            {
                if (n % i == 0)
                {
                    count++;
                }
            }

            if (count == 2)
            {
                Console.WriteLine(n + "是質數");
            }
            else
            {
                Console.WriteLine(n + "非質數");
            }*/

            //20.輸出一行10個*
            /*for(int i = 0; i < 10; i++)
            {
                Console.Write("*");
            }*/


            //21.輸出4行10個*
            /*for(int i = 0; i < 4; i++)
            {
                for(int j = 0; j < 10; j++)
                {
                    Console.Write("*");
                }
                Console.WriteLine();
            }*/

            //用continue
            /*int j = 0;
            for (int i = 0; i < 10; i++)
            {
                Console.Write("*");
                j++;
                if (i == 9 && j < 40)
                {
                    i = -1;
                    Console.WriteLine();
                    continue;
                }
            }*/

            //22.輸入n,m，輸出n行m列的*
            /*int n = Convert.ToInt32(Console.ReadLine());
            int m = Convert.ToInt32(Console.ReadLine());

            for (int i = 0; i < m; i++)
            {
                for (int j = 0; j < n; j++)
                {
                    Console.Write("*");
                }
                Console.WriteLine();
            }*/

            //用continue
            /*int n = Convert.ToInt32(Console.ReadLine());
            int m = Convert.ToInt32(Console.ReadLine());
            int j = 0;

            for (int i = 0; i < m; i++)
            {
                Console.Write("*");
                if (i == m-1 && j < n-1)
                {
                    i = -1;
                    j++;
                    Console.WriteLine();
                    continue;
                }

            }*/

            //23.輸入整數n，輸出n層的三角形
            /*Console.Write("請輸入三角形層數:");
            int n = Convert.ToInt32(Console.ReadLine());
            for (int i = 1; i <= n; i++)
            {
                for(int j = 1; j <= i; j++)
                {                   
                    Console.Write("*");
                }
                Console.WriteLine();
            }*/

            //用continue
            /*int n = Convert.ToInt32(Console.ReadLine());
            int j = 1;
            for (int i = 1; i > 0; i--)
            {
                Console.Write("*");
                if(i == 1 && j < n)
                {
                    j++;
                    i += j;
                    Console.WriteLine();
                    continue;
                }

            }*/

            //靠右三角形
            /*int n = Convert.ToInt32(Console.ReadLine());
            for(int i = 1; i <= n; i++)
            {
                for(int j = n - i; j > 0; j--)
                {
                    Console.Write(" ");                 
                }
                for (int k = i; k > 0; k--)
                {
                    Console.Write("*");
                }
                Console.WriteLine();
            }*/

            //24.輸入整數n，輸出n層的三角形的斜邊
            /*Console.Write("請輸入層數:");
            int n = Convert.ToInt32(Console.ReadLine());
            for (int i = 1; i <= n; i++)
            {
                for(int j = 1; j < i; j++)                    
                {
                    Console.Write(" ");
                }

                Console.WriteLine("*");   
            }*/

            //25.輸入整數n，輸出n層的倒三角形的斜邊
            /*int n = Convert.ToInt32(Console.ReadLine());          
            for(int i = n; i > 0; i--)
            {
                for(int j = i - 1; j > 0; j--)
                {
                    Console.Write(" ");
                }
                Console.WriteLine("*");
            }*/

            //26.輸入整數n，輸出n層的平行四邊形
            /*int n = Convert.ToInt32(Console.ReadLine());
            for (int i = 0; i < n; i++)
            {
                for (int j = 0; j < i; j++)
                {
                    Console.Write(" ");
                }
                for (int k = n; k > 0; k--)
                {
                    Console.Write("*");
                }

                Console.WriteLine();
            }*/

            //27.輸入n，輸出n列等腰三角
            /*int n = Convert.ToInt32(Console.ReadLine());
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
            }*/

            //老師解
            /*int n = Convert.ToInt32(Console.ReadLine());
            for (int i = 1; i <= n; i++)
            {
                for (int j = n - i; j > 0; j--) //要n-1個空格，每行遞減1，i剛好從0開始
                {
                    Console.Write(" ");
                }
                for (int k = 0; k < 2 * i - 1; k++) //(l/i)0+1=1, 1+2=3, 2+3=5 //奇數個*，每行多2顆，i每次回圈+1，l也+1
                {
                    Console.Write("*");
                }
                Console.WriteLine();
            }*/

            //28.輸入n，輸出2n-1列菱形
            /*int n = Convert.ToInt32(Console.ReadLine());
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
            //此時l=n+1
            l -= 1;
            for (int i = 0; i < n - 1; i++)
            {
                l -= 2;  //l5 5-2=3
                for (int j = i + 1; j > 0; j--) //需要i+1個空格，每行遞增1
                {
                    Console.Write(" ");
                }
                for (int k = 0; k < n - 1 + l; k++)  //需要n-1+l個*，每行少2個，l每次迴圈-2
                {
                    Console.Write("*");
                }
                Console.WriteLine();
            }*/

            //
            int n = Convert.ToInt32(Console.ReadLine());
            for (int i = 1; i <= n; i++)
            {
                for (int j = n - i; j > 0; j--) //要n-1個空格，每行遞減1，i剛好從0開始
                {
                    Console.Write(" ");
                }
                for (int k = 0; k < 2 * i - 1; k++) //(l/i)0+1=1, 1+2=3, 2+3=5 //奇數個*，每行多2顆，i每次回圈+1，l也+1
                {
                    Console.Write("*");
                }
                Console.WriteLine();
            }
            for (int i = 1; i <= n-1; i++)
            {
                for (int j = i; j > 0; j--) //要n-1個空格，每行遞減1，i剛好從0開始
                {
                    Console.Write(" ");
                }
                for (int k = 2 * (n - i) -1; k > 0; k--) //(l/i)0+1=1, 1+2=3, 2+3=5 //奇數個*，每行多2顆，i每次回圈+1，l也+1
                {
                    Console.Write("*");
                }
                Console.WriteLine();
            }

            //29.九九乘法表
            /*for(int i = 1; i < 10; i++)  //n1
            {
                for (int j = 1; j < 10; j++)
                {
                    int k = j * i;
                    Console.WriteLine(i + "*" + j + "=" + k+" ");
                }
                Console.WriteLine();
            }*/

            //30.100元買ㄐ
            /*int male = 3;
            int female = 5;
            int child = 2;

            for(int i = 1; i <= 100; i++)
            {
                for (int j = 1; j <= 100; j++)
                {
                    for (int k = 1; k <= 100; k++)
                    {
                        int money_sum = i * male + j * female + k * child;
                        if(money_sum == 100)
                        {
                            Console.WriteLine("公雞" + i + "隻 " + 
                                "母雞" + j + "隻 " + "小雞" + k + "隻 "+ 
                                "=" + money_sum + "元");
                        }                      
                    }                
                }               
            }*/

            //31.輸入n1和n2，找出兩數的最大公因數
            /*int n1 = Convert.ToInt32(Console.ReadLine());
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
            }*/

            //32.

        }
    }
}
