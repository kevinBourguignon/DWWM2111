using System;

namespace Exos_2_1_1
{
    class Program
    {
        static void Main(string[] args)
        {
            double km;
            double miles;
            String saisie;
            String[] chaine;

            
            do
            {
                Console.WriteLine("Entrer les km  ou appuyer sur q pour quitter ");
                saisie = Console.ReadLine();

                if (saisie.Equals("q"))
                {
                    Console.WriteLine("quitter le programme");
                    Environment.Exit(0);
                }

                chaine = saisie.Split(" ");
                km = double.Parse(chaine[0]);

                if(km < 0.01 || km > 1000000)
                {
                    Console.WriteLine("Veuillez choisir nombre différent compris entre 0.01 ou 1 000 000 ");
                    continue;
                }

                
                 miles = 0.621371 * km; 


                Console.WriteLine($"La conversion de {km} km est {miles} mi");

            } while (km < 0.01 || km > 1000000);

           




        }
    }
}
