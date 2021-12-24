using System;

namespace Exos_Mois_De_Naissance
{
    class Program
    {
        static void Main(string[] args)
        {
            String[] Mois = new String[12];
            String saisie;


            Console.WriteLine("Indiquer le nombre de votre mois de naissance ? ");
            saisie = Console.ReadLine();
            
            Mois[1] = "Janvier";
            Mois[2] = "Février";
            Mois[3] = "Mars";
            Mois[4] = "Avril";
            Mois[5] = "Mai";
            Mois[6] = "Juin";
            Mois[7] = "Juillet";
            Mois[8] = "Août";
            Mois[9] = "Septembre";
            Mois[10] = "Octobre";
            Mois[11] = "Novembre";
            Mois[12] = "Décembre";

            
            
            
            for(int i = 1; i < Mois.Length+1; i++)
            {
               
                
                    Console.WriteLine($"{saisie} est le {Mois[i]} de l'année");

            }
            



        }
       
    }
}
