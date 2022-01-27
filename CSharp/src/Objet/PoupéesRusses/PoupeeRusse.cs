using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace PoupéesRusses
{
    class PoupeeRusse
    {
        private int _taille;
        private bool _estOuverte;
        private PoupeeRusse _dans;
        private PoupeeRusse _contenue;

        
        public PoupeeRusse(int taille)
        {
            this._estOuverte = false;
            this._taille = taille;
            this._dans = null;
            this._contenue = null;
        }

        public int Taille
        {
            get { return this._taille; }
            private set { this._taille = value; }
        }

        public bool EstOuvert 
        {
            get { return this._estOuverte; }
            private set { this._estOuverte = value; }
        }

        public PoupeeRusse Dans
        {
            get { return this._dans; }
            private set { this._dans = value; }
        }


    }

    


}
