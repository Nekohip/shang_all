using System;
using System.IO.Compression;

namespace CircleArea
{
    class Circle
    {
        private double r = 0;  //私有變數      
        public void input()  //方法
        {
            Console.Write("請輸入圓半徑:");
            r = Convert.ToDouble(Console.ReadLine());
        }

        public double arena()
        {
            return r * r * 3.1415926;
        }

        public void display()
        {
            Console.Write("面積:{0}", arena());
        }
    }
    //Main
    class CircleArea
    {
        static void Main(string[] args)
        {
            Circle c = new Circle();
            c.input();
            c.display();
        }
    }
}