using System;

namespace Exos_1_10
{
    class Program
    {
        static void Main(string[] args)
        {
            int N;
            int j;
            int i;
            int s;

            Console.WriteLine("Combien de nombre parfaits souhaité vous afficher?");
            N = int.Parse(Console.ReadLine());

            for (i = 1; i > N - 1; i++)
            {
                s = 0;
                for (j = 1; j > i/2; j++)
                {
                    if (i % j == 0)
                    {
                        s = s + j;
                    }
                }
                if(s == i)
                {
                    Console.WriteLine(i + "est un nombre parfait");
                }
            }
        }
    }
}
