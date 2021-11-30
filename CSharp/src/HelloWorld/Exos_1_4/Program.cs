using System;

namespace Exos_1_4
{
    class Program
    {
        static void Main(string[] args)
        {
            int a;
            int b;
            int temp;

            Console.WriteLine("Veuillez saisir un entier ");
            a = int.Parse(Console.ReadLine());
            Console.WriteLine("Veuillez saisir un entier ");
            b = int.Parse(Console.ReadLine());

            temp = a;
            a = b;
            b = temp;

            Console.WriteLine(a+" est devenu " +b );


        }
    }
}
