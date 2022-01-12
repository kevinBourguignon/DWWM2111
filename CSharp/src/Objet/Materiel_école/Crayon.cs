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

        }

        public new void Ecrire()
        {

        }

        public  bool PointeDeMineATailler
        {
            get { return pointeDeMineATailler = true; }
        }

        public new void affaires()
        {
            throw new NotImplementedException();
        }

        public new void utiliser()
        {
            throw new NotImplementedException();
        }
    }
}
