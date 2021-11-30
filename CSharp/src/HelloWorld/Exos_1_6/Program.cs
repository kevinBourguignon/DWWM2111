using System;

namespace Exos_1_6
{
    class Program
    {
        static void Main(string[] args)
        {
            int number;
            int divider;
            bool isPrime;

            isPrime = true;
            Console.WriteLine("Enter a number");
            number = int.Parse(Console.ReadLine());
            

            for ( divider = 2; divider < number-1; divider++) 
            { 
                if (number% divider == 0)
                {
                    isPrime = false;
                }
                divider = divider + 1;
            }
                if (isPrime)
            {
                Console.WriteLine("This number is prime ");
            }
            else
            {
                Console.WriteLine("This number is not prime ");
            }
        }
    }
}
