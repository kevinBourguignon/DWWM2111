using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Materiel_école
{
    class CrayonDePapier : Crayon
    {
        public  CrayonDePapier()
        {
            this.CapaciteEcriture = 100;
            this.Couleur = "gris";
            this.PointeDeMineTaillee = true;
        }
    }
}
