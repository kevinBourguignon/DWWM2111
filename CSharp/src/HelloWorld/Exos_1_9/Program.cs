using System;

namespace Exos_1_9
{
    class Program
    {
        static void Main(string[] args)
        {
            int N;
            int i;

            Console.WriteLine("Le nombre à divisé est de : ");
            N = int.Parse(Console.ReadLine());

            for (i = 2; i < N - 1; i++)
            {
                if (N % i == 0)
                {
                    Console.WriteLine(i + " sont des diviseur");
                }
            }
        }
    }
}
