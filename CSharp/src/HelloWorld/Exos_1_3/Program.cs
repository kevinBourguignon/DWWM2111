using System;

namespace Exos_1_3
{
    class Program
    {
        static void Main(string[] args)
        {
            double radius;
            double surface;
            double angleDeg;

            Console.WriteLine("entrer le rayon du cercle");

            radius = double.Parse(Console.ReadLine());
            angleDeg = double.Parse(Console.ReadLine());

            surface = Math.PI * Math.Pow(radius, 2) * angleDeg / 360;

            Console.Write ("Aire du cercle =" +String.Format("{0:N2}", surface));//permet de mettre à 2 chiffre après la virgule.

            //Console.Write("\nAire du cercle =" +surface);
        }
    }
}
