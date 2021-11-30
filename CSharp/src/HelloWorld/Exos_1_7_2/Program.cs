using System;

namespace Exos_1_7_2
{
    class Program
    {
        static void Main(string[] args)
        {
            int a;
            int b;
            int c;

            Console.WriteLine("Nombre a : ");
            a = int.Parse(Console.ReadLine());
            Console.WriteLine("Nombre b : ");
            b = int.Parse(Console.ReadLine());
            Console.WriteLine("Nombre c : ");
            c = int.Parse(Console.ReadLine());

            if (a < b)
            {
                if (c < a)
                {
                    Console.WriteLine(c + "<" + a + "<" + b);
                }
                else if (c < b)
                {
                    Console.WriteLine(a + "<" + c + "<" + b);
                }
                else
                {
                    Console.WriteLine(a + "<" + b + "<" + c);
                }
                if (c < b)
                {
                    Console.WriteLine(c + "<" + b + "<" + a);
                }
                else if (c < a)
                {
                    Console.WriteLine(b + "<" + c + "<" + c);
                }
                else
                {
                    Console.WriteLine(b + "<" + a + "<" + c);
                }
            }
        }
    }
}
