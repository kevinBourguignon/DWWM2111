using System;

namespace Exos1_1_1
{
    class Program
    {
        static void Main(string[] args)
        {
            // 1.1.1

            int nb1;
            int nb2;
            double result;

            Console.WriteLine("Enter a first number"); 
            //WriteLine --> Automatiquement à la ligne

            nb1 = Int32.Parse(Console.ReadLine());

            Console.WriteLine("Enter a second number");
            nb2 = Int32.Parse(Console.ReadLine());

            result = (nb1 + nb2) / 2d ; 
            // Le d pour double

            Console.WriteLine("The average of the two numbers is " + result);
            Console.WriteLine($"The average of the two numbers is {result}" ); 

        }
    }
}
