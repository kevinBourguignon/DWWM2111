using System;

namespace Exos_1_7
{
    class Program
    {
        static void Main(string[] args)
        {
            int a;
            int b;

            Console.WriteLine("nombre a : ");
            a = int.Parse(Console.ReadLine());
            Console.WriteLine("nombre b : ");
            b = int.Parse(Console.ReadLine());

            if (a > b)
            {
                Console.WriteLine(a + "plus grand que " + b);
            }
            else
                Console.WriteLine(a + "plus petit que " + b);

        }
    }
}
