using System;

namespace Exos_3_7
{
    class Program
    {
        static void Main(string[] args)
        {
            rechercheDicho( new String[4], 4 , "paul");       
        }
        public static void rechercheDicho(string[] tab, int nbrVal, string val)
        {
             
            bool trouve;
            int debut;
            int milieu;
            int fin;
    

            trouve = false;
            debut = 0;
            fin = nbrVal;

            for(int i = 0; i < tab.Length; i++)
            { 
                Console.WriteLine("Saisir les prenom: ");
                tab[i] = Console.ReadLine();
            }
            Array.Sort(tab);
            for (int i = 0; i < tab.Length; i++)
            {
                Console.Write($"{tab[i]} , " );
            }
            


            while(!trouve && ((fin - debut) > 1))
            {
                milieu = (debut + fin) / 2;
                trouve = (tab[milieu] == val);

                if(tab[milieu].CompareTo(val) == 1)
                {
                    fin = milieu;
                }
                else
                {
                    debut = milieu;
                }

                if (tab[debut] == val)
                {
                      Console.WriteLine( tab[debut] );
                }
                else
                {
                    Console.WriteLine(0);
                }
                Console.WriteLine($" {debut} le prénom qui se trouve a cet endroit est {val}");
            }
        }
        
            
        
    }
}
