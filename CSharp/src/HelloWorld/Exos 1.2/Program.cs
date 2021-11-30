using System;

namespace Exos_1_2
{
    class Program
    {
        static void Main(string[] args)
        {
            int rayon;
            double air;
            double volume;

            Console.WriteLine("Enter the radius value of the sphere : ");

            rayon = int.Parse(Console.ReadLine());

            air = (4 * Math.PI) * Math.Pow(rayon, 2);
            volume = (4 / 3 * Math.PI) * Math.Pow(rayon, 3);

            Console.WriteLine("L'air de la phère est " + air + " et le volume est " + volume);
         }
    }
}
