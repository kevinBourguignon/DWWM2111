using System;

namespace ExosRecursive_2_5
{
    class Program
    {
        public static int SommeEntier(int a = 2, int b = 3)
        {
       
            if(b == 0)
            {
                return (a);
            }
            else
            {

                return (SommeEntier(a, b - 1) + 1);

            }
        }

        static void Main(string[] args)
        {

            Console.WriteLine(SommeEntier(2, 3));
        }
       
    }
}
