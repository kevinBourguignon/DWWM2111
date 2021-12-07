using System;

namespace Exos_2_4
{
    class Program
    {
        static void Main(string[] args)
        {
            int Somme;
            int NbrMagasin;

            Console.WriteLine("Saisir la Somme de départ");
            Somme = int.Parse(Console.ReadLine());

            
            for (NbrMagasin = 0; Somme > (Somme/2) + 1 ; NbrMagasin++)
            {

                Somme = Somme - ((Somme / 2) + 1);
            }

            Console.WriteLine("le nombre de magasin est de " + (NbrMagasin +1));
        }
    }
}
