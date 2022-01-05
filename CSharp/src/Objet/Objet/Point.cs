﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Geométrie
{
    class Point
    {
        private int _x;
        private int _y;
    
        
    public int X
    {
        get {  return _x ; }
        set { _x = value; }
        
    }

    public int Y
    {
            get { return _y; }
            set { _y = value; }
    }
    public Point(int _x, int _y)
        {
            X = _x;
            Y = _y;
        }

        public void DeplacerVersPosition(int x, int y)
        {
            X = x;
            Y = y;
        }

        public void DeplacerDe(int nombreADeplacerX, int nombreADeplacerY)
        {
            X = X + nombreADeplacerX;
            Y = Y + nombreADeplacerY;
        }

    }
  }