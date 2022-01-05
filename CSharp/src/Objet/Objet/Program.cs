using System;

namespace Geométrie

{
    class Program
    {
        static void Main(string[] args)
        {
            Point p1 = new Point(3, 2);

            Point p2 = new Point(4, 4);

            Point3D p3 = new Point3D(3, 2, 4);

            Segment2D segment1 = new Segment2D(p1, p2);
            Segment2D segment2 = new Segment2D(2, 2, -6, -4);

            Console.WriteLine(p1.X + " " + p1.Y );
            Console.WriteLine(p2.X + " " + p2.Y);
            Console.WriteLine(p3.X + " " + p3.Y + " " + p3.Z); 
          

        }
    }
}
