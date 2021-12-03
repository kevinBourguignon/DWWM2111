using System;

namespace Exos_1_8
{
    class Program
    {
        static void Main(string[] args)
        {
            int Année;

            Console.WriteLine("Déterminé si l'année est bissextile");
            Année = int.Parse(Console.ReadLine());

            if (Année % 4 != 0)
            {
                Console.WriteLine("l'année n'est pas bissextile");
            }
            else if (Année % 100 == 0 && Année % 400 != 0)
            {
                Console.WriteLine("l'année non bissextile");
            }
            else
            {
                Console.WriteLine("Année bissextile");
            }
        }
    }
}
