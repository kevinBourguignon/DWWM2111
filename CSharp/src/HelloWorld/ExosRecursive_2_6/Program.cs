using System;

namespace ExosRecursive_2_6
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine(ProduitEntier(3, 3));
        }
        
        public static int ProduitEntier(int a, int b)
        {
            if(OperationEgalZeros(b))
            {
                 return 0;
            }

            return Operation(a, ProduitEntier(a, --b));

        }
        public static int Operation(int nombre1, int nombre2)
        {
            return nombre1 + nombre2;
        }
        public static int OperationSoutraction(int nombre)
        {
            return nombre = -1;
        }
        public static bool OperationEgalZeros(int nombre)
        {
            return nombre == 0;
        }
        
        
    }
}
