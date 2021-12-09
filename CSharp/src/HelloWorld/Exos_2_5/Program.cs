using System;

namespace Exos_2_5
{
    class Program
    {
        static void Main(string[] args)
        {
            int N;
            int Nbre;
            int joueur = 0;
            int ordi = 0;

            Random random = new Random();

            do
            {
               

                N = random.Next(0, 3);

                Console.WriteLine("Entrer le nombre entre 0 et 2 ");
                Nbre = int.Parse(Console.ReadLine());



                if (Math.Abs(Nbre - N) == 2)
                {
                    Console.WriteLine(+Nbre + " Et " + N + " le joueur qui a proposer le plus grand nombre gagne un point");
                    if(Nbre > N)
                    {
                        joueur++;
                    }
                    else
                    {
                        ordi++;
                    }
                }
                if (Math.Abs(Nbre - N) == 1)
                {
                    Console.WriteLine(+Nbre + " Et " + N + " le joueur qui a proposé le plus petit nombre gagne un point");
                    if(Nbre > N)
                    {
                        ordi++;
                    }
                    else
                    {
                        joueur++;
                    }
                }
                else
                {

                    Console.WriteLine(+Nbre + " Et " + N + " aucun point n'est marqué ");
                }

                Console.WriteLine($"le joueur à {joueur} et l'ordinateur à {ordi} ");

            } while (!(joueur == 10 || ordi == 10));


        }
    }
}
