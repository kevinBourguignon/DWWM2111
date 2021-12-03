using System;

namespace Exos_2_2_1
{
    class Program
    {
        static void Main(string[] args)
        {
            double F = 0 ;
            double C = 0 ;
            String saisie;
            String[] chaine = new string[5];
            
            
            
                Console.WriteLine("Entrer le nombre entre -459.67 et 5 000 000 avec C ou F ");
                saisie = Console.ReadLine();
            
                chaine = saisie.Split(" ");

            

                if(chaine.Length < 2)
                {
                   F = double.Parse(chaine[0]);
                  Console.WriteLine(F + "Fahrenheit est de " + (F - 32d)*(5d/9d) + "°C");
                }
               else if(chaine[1] == "C")
                {
                    C = double.Parse(chaine[0]);
                   Console.WriteLine(C + "Celsius est de " + ((C * (9d / 5d)) + 32d) + "°F");
                 
                }
            else
            {
                F = double.Parse(chaine[0]);
               Console.WriteLine(F + "Fahrenheit est de " + ((F - 32d) * (5d / 9d)) + "°C");
            }
          
                    
        }
    }
}
