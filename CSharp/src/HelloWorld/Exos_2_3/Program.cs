using System;


namespace Exos_2_3
{
    class Program
    {
        
        static void Main(string[] args)
        {
            int max = 100;
            int min = 0;
            int N ;
            int x;
            int i;
            int temp;
            
           
                Random random = new Random();
                random.Next(min, max);
                int rnd = random.Next(min, max);

            if(max < min)
            {
                temp = min;
                min = max;
                max = temp;
            }

            x = min + random.Next(max - min + 1);

            Console.WriteLine(min + "< x <" + max);
            N = int.Parse(Console.ReadLine());

            i = 1;

            while (N > x)
            {
                Console.WriteLine("N = ");
                N = int.Parse(Console.ReadLine());
                i = i + 1;
            }

            if(x == N)
            {
                Console.WriteLine("Bravo vous avez trouvé le nombre en " + i + "essaie");
            }
            else
            {
                Console.WriteLine("le nombre qu'il fallait trouvé était " + x);
            }

            
            
                
            
            
        }
    }
}
