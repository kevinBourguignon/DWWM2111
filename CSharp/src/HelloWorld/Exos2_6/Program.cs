using System;

namespace Exos2_6
{
    class Program
    {
        static void Main(string[] args)
        {
            bool beauTemps;
            bool reparationRapide;
            bool etatBicyclette;
            bool possGOT;
            bool dispoGot;

            
            Console.WriteLine("fait-il beaux ? ");
            beauTemps = bool.Parse(Console.ReadLine());

            if (beauTemps)
            {
                Console.WriteLine("Il fait beaux donc je fait une balade ");
                Console.WriteLine("Est-il en état de fonctionnement ? ");
                etatBicyclette = bool.Parse(Console.ReadLine());
                
                if (etatBicyclette)
                {
                    Console.WriteLine("La bicyclette est en bone état, je vais faire une balade ");
                }
                   else
                   {
                    Console.WriteLine("Je passe chez le garagiste avant ma balade ");
                    Console.WriteLine("J'espère que ses réparable immédiatement ? ");
                    reparationRapide = bool.Parse(Console.ReadLine());
                    
                    if (reparationRapide) 
                    {
                        Console.WriteLine("Réparer immédiatement ! je vais me balader ");
                    }
                    else
                    {
                        Console.WriteLine("Je laisse ma bicyclette et je vais cueillir des joncs ");
                    }
                   }
            }
            else
            {
                Console.WriteLine("il ne fait pas beau du tout ");
                Console.WriteLine("Donc je passe ma journée à lire, le 1er tome de Game of Throne se trouve t-il dans ma bibliothèque ?");
                possGOT = bool.Parse(Console.ReadLine());

                if (possGOT)
                {
                    Console.WriteLine("il est dans ma bibliothèque le 1er tome de GOT, je le lis ");
                }
                else
                {
                    Console.WriteLine("Je ne le trouve pas dans ma bibliothèque ");
                    Console.WriteLine("GOT sera t-il a la biliothèque municipal ?");
                    dispoGot = bool.Parse(Console.ReadLine());

                    if (dispoGot)
                    {
                        Console.WriteLine("Je trouve le livre GOT le 1er tome, je le prend et je le lis chez moi");
                    }
                    else
                    {
                        Console.WriteLine("Je trouve pas le 1er tome GOT donc je prends un roman policier et je rentre chez moi le lire");
                    }
                }

            }


                    


            
        }
    }
}
