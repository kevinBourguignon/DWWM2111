using System;

namespace ExosRecursive_2_5bis
{
    class Program
    {
        public static int SommeEntier(int a , int b )
        {
            if(b < 0)
            {

                return (SommeEntier(a, b + 1) - 1);

            }
            else
            {

                

                if (b == 0)
                {
                    return a;
                }
                else
                {

                    return (SommeEntier(a, b - 1) + 1);

                }
            }

           
                
        }

        static void Main(string[] args)
        {

            Console.WriteLine(SommeEntier(-2, -5));
        }

    }
}
