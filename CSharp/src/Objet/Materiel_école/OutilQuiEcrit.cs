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
           protected set { couleur = value; }
        }

        public int CapaciteEcriture
        {
            get { return capaciteEcriture; }
            protected set { capaciteEcriture = value; }
        }

        protected  void Ecrire()
        {
            if (this.CapaciteEcriture > 0)
            {
                Console.WriteLine($"J'écris du texte de couleur {couleur}");
            }
            else
            {
                Console.WriteLine("!!! Capacité d'écriture épuisée !!!");
            }
        }

        public void utiliser()
        {
            throw new NotImplementedException();
        }

        
    }
}
