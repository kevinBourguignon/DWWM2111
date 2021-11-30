using System;

namespace Exos_1_5
{
    class Program
    {
        static void Main(string[] args)
        {
            float S;
            float I;
            int N;
            float IS;
           double IC;

            Console.WriteLine("Ecrire la valeur de la somme initiale ");
            S = float.Parse(Console.ReadLine());

            Console.WriteLine("Ecrire la valeur de l'intérêt");
            I = float.Parse(Console.ReadLine());

            Console.WriteLine("Ecrire la valeur de nombre d'année");
            N = int.Parse(Console.ReadLine());

            IS = S*(1 + (N * I/100))- S;
            Console.WriteLine("L'intérêt simple est de : " + IS);

            IC =  (S*Math.Pow(1+I/100,N)-S);
            Console.WriteLine("L'intérêt composé est de : " + IC);




        }
    }
}
