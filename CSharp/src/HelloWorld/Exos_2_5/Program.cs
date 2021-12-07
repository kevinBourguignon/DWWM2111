using System;

namespace Exos_2_5
{
    class Program
    {
        static void Main(string[] args)
        {
            int N;
            int Nbre;
            int max = 2;
            int min = 1;

            Random random = new Random();
            random.Next(min, max);
            N = random.Next(min, max);

            Console.WriteLine("Entrer le nombre entre 0 et 2 ");
            Nbre = int.Parse(Console.ReadLine());


            do {
                if (max == 2)
                {
                    Console.WriteLine("Vous gagnez un point ");

                }
                else if (min == 1)
                {
                    Console.WriteLine("Vous gagnez un point ");
                }
                else
                {
                    Console.WriteLine("Vous ne gagnez rien ");
                }
            } while (max > min);


        }
    }
}
