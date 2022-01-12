using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Materiel_école
{
    abstract class OutilQuiEcrit : IOutil
    {
        private string couleur;
        private int capaciteEcriture;

        public string Couleur
        {
            get { return couleur; }
            set { couleur = value; }
        }

        public int CapaciteEcriture
        {
            get { return capaciteEcriture; }
        }

        public  void Ecrire()
        {

        }

        public void utiliser()
        {
            throw new NotImplementedException();
        }

        public void affaires()
        {

        }
    }
}
