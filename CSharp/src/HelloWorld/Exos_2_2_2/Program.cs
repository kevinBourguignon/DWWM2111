using System;

namespace Exos_2_2_2
{
    class Program
    {
        static void Main(string[] args)
        {
            double F;
            double C;
            int[] tab;
            string saisie;
            int minimum;
            int maximum;


           
            Console.WriteLine("Saisir une unité de mesure C ou F");
            saisie = Console.ReadLine();

            Console.WriteLine("Saisir la valeur minimun : ");
            minimum = int.Parse(Console.ReadLine());

            Console.WriteLine("Saisir la valeur maximum (doit être supérieur à la valeur minimum) : ");
            maximum = int.Parse(Console.ReadLine());

             tab = new int[maximum - minimum +1];
            
            for(int i = 0; i <= maximum - minimum; i++)
            {
                tab[i] = i + minimum;
            }
            Console.Write("");
        }
    }
}
