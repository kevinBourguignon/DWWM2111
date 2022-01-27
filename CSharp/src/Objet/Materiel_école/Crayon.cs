using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Materiel_école
{
    abstract class Crayon : OutilQuiEcrit
    {
        private bool pointeDeMineATailler;

        public void Tailler()
        {
            if(CapaciteEcriture > 3)
            {
                CapaciteEcriture -= 3;
                pointeDeMineATailler = true;
            }
            else
            {
                CapaciteEcriture = -1;
            }
        }

        

        public  bool PointeDeMineATailler
        {
            get { return pointeDeMineATailler; }
         private set { pointeDeMineATailler = value; }
        }

       

        public override void Utiliser()
        {
            int rndMinePlusTaillee = new Random().Next(0, 3);

            if (!this.PointeDeMineATailler)
            {
                this.Tailler();
            }
            base.Ecrire();

            if (rndMinePlusTaillee == 0)
            {
                this.PointeDeMineATailler = false;
            }
        }
    }
}
