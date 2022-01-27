using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Materiel_école
{
    class StyllosPlume : OutilQuiEcrit
    {
        public void RemplacerCartouche()
        {
            string couleur = this.Couleur; 
        }

        public StyllosPlume()
        {
            string couleur = this.Couleur;
        }
    }
}
