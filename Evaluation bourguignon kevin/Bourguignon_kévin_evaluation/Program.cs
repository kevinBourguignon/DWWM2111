using System;

namespace Bourguignon_kévin_evaluation
{
    class Program
    {
        static void Main(string[] args)
        {
           
            const String nom = "bourguignon" ;
           const String prenom = "kevin";
             int age ;
            int année;

           

            Console.WriteLine("Saisir votre age ");
            age = int.Parse(Console.ReadLine());

            Console.WriteLine($"{nom} {prenom} à {age} ans ");

            année = int.Parse(Console.ReadLine());
            

            if (année >= 2000)
            {
                Console.WriteLine("Il est né avant 2000 ");

            }
            else
            {
                Console.WriteLine("Il est né après 2000");
            }


        }
        
    }
}
