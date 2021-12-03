using System;

namespace Exos_2_1_2
{
    class Program
    {
   
        static void Main(string[] args)
        {
            double kilometre = 0;
            double mi = 0;
            String saisie;
            String[] chaine = new string[5];

            
                
                Console.WriteLine("entrer distance  : ");
                saisie = Console.ReadLine();
               

               

                chaine = saisie.Split(" ");
                if(chaine.Length < 2)
            {
                kilometre = double.Parse(chaine[0]);
                Console.WriteLine(kilometre + "kilometre est de " + kilometre / 1.609);
            }

               else if(chaine[1] == "mi")
                {

                    
                    mi = double.Parse(chaine[0]);
                    Console.WriteLine( mi + "miles est de " + mi*1.609);
                    
                }
               
            else
            {

                kilometre = double.Parse(chaine[0]);
                Console.WriteLine( kilometre + "kilometre est de " + kilometre/1.609);

            }
                

                

                
                
       
            




        }
    }
}
