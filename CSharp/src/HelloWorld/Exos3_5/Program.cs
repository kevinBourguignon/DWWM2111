using System;

namespace Exos3_5
{
    class Program
    {
        static void Main(string[] args)
        {
            String mot;
            String motreverse = "";

            Console.WriteLine("Saisir un mot que vous pensez un palindome ");
            mot = Console.ReadLine();

           
            for (int i = mot.Length-1; i >= 0 ; i--)
            {
                motreverse += mot[i].ToString();
            }
            if (mot == ".")
            {
                Console.WriteLine("La chaine est vide ");
            }
            else if(motreverse == mot)
            {
                Console.WriteLine($"C'est un palindrome \n La chaine saisie était  {mot} et la chaine inversé est {motreverse} ");
            }
            else
            {
                Console.WriteLine($"Ce n'est pas un palindrome \n La chaine saisie était {mot} et la chaine inversé est {motreverse} ");
            }
     
        }

            
        
    }
}
