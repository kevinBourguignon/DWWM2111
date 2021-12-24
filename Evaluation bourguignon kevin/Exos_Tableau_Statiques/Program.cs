using System;

namespace Exos_Tableau_Statiques
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] tab = new string[7];
           string[] reponse = new string[2] ;
            string saisie;

           
            

            Console.WriteLine("Repondez aux questions suivantes par vrai ou faux");
   

                Console.WriteLine(tab[1] = "Avez-vous votre permis voiture ? ");
                saisie = Console.ReadLine();

                Console.WriteLine(tab[2] = "Aimez-vous faire du ping-pong ? ");
                saisie = Console.ReadLine();

                Console.WriteLine(tab[3] = "Avez-vous des enfants ? ");
                saisie = Console.ReadLine();

                Console.WriteLine(tab[4] = "Aimez-vous les mangas et anime ? ");
                saisie = Console.ReadLine();

                Console.WriteLine(tab[5] = "Avez-vous votre permis bateaux ? ");
                saisie = Console.ReadLine();

                Console.WriteLine(tab[6] = "Avez-vous un chien ? ");
                saisie = Console.ReadLine();

            reponse = saisie.Split("");

            for(int i = 1; i < tab.Length + reponse.Length; i++)
            {
                
                Console.WriteLine($"{tab[i]} Vous avez répondu {saisie}");
            }
            
            
                
                 
            

        }
    }
}
