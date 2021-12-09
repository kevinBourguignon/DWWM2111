using System;

namespace Exos3_1
{
    class Program
    {
        static void Main(string[] args)
        {
            int N;
            int[] tab = new int[6] { 1, 5, 4, 10, 6, 7 };

            Console.WriteLine("Saisir la valeur ");
            N = int.Parse(Console.ReadLine());

            Array.Sort(tab);
            for(int i = 0; i < tab.Length; i++)
            {
                Console.Write(tab[i] + " ");
            }
            

             if(Array.BinarySearch(tab, N) >= 0)
            {
                Console.WriteLine("\nla valeur de l'indice est " +N );
            }
            else
            {
                Console.WriteLine("Il n'est pas trouvé ");
            }


        }
    }
}
