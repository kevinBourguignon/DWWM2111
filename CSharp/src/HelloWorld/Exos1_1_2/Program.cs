using System;

namespace Exos1_1_2
{
    class Program
    {
        static void Main(string[] args)
        {
            // 1.1.2

            int nb1;
            int nb2;
            double result;
            bool redo;
            string answerForRedo;

            do
            {
                Console.WriteLine("Enter a first number");
                //WriteLine --> Automatiquement à la ligne

                nb1 = Int32.Parse(Console.ReadLine());
                Console.WriteLine("Enter a second number");
                nb2 = Int32.Parse(Console.ReadLine());

                result = (nb1 + nb2) / 2d;
                // Le d pour double

                Console.WriteLine("The average of the two numbers is " + result);

                Console.WriteLine("\nDo you want to make another calculation ?");
                // \n pour sauter une ligne
                answerForRedo = Console.ReadLine().ToLower();

                redo = answerForRedo.Equals("yes");

            } while (redo);
        }
    }
}
