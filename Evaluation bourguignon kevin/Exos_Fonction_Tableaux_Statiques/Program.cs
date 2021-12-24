using System;

namespace Exos_Fonction_Tableaux_Statiques
{
    class Program
    {
        static void Main(string[] args)
        {
            int[,] nbrEntier = new int[1, 20];
            TableauStatiqueAleatoire();
        }

        public static void TableauStatiqueAleatoire(int[] nbrEntier, int monEntierAleatoire)
        {
            Random rnd = new Random();
            nbrEntier[20] = rnd.Next(0, 20);
            monEntierAleatoire = rnd.Next(-50, 50);

            Console.WriteLine($"Le nombre sera compris entre {nbrEntier} et le nombre dans le tableau est {monEntierAleatoire} ");
            
            



        }
    }
}
