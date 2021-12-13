using System;

namespace Exos_3_4
{
    class Program
    {
        static void Main(string[] args)
        {
            int N = 10;
            int[] tableau = new int[10] { 8, 2, 5, 6, 1, 7, 10, 9, 3, 4 };
            int small = 0;

            IndicePlusPetit(N, tableau, small);
        }
        static void IndicePlusPetit(int N, int[] tableau, int small)
        {

            
            Console.WriteLine("Avant: ");

            for (int index = 0; index < N; index++)
            {
                Console.Write(tableau[index] + ", ");
            }
                for(int index1 = N-2; index1 >= 0; index1--)
                {
                    for(int index2 = 0; index2 <= index1; index2++)
                    {
                        if(tableau[index2 + 1] < tableau[index2])
                        {
                            int t = tableau[index2 + 1];
                            tableau[index2 + 1] = tableau[index2];
                            tableau[index2] = t;
                        }
                    }
                }

            Console.WriteLine();
            Console.WriteLine("Après: ");
            for(int index3 = 0; index3 < N; index3++)
            {
                Console.Write(", " + tableau[index3]);
            }

            if (tableau.Length > 0)
            {
                small = tableau[0];
            }
            for (int i = 0; i < tableau.Length; i++)
            {
                if (small > tableau[i])
                {
                    int tmp = small;
                    small = tableau[i];
                    tableau[i] = small;
                }
            }
            Console.WriteLine("l'indice du plus petit est " + small);
        }
    }
}
