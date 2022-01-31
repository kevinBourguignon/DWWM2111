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

        public bool EstOuverte
        {
            get { return this._estOuverte; }
            private set { this._estOuverte = value; }
        }

        public PoupeeRusse Dans
        {
            get { return this._dans; }
            private set { this._dans = value; }
        }

        public PoupeeRusse Contenue
        {
            get { return this._contenue; }
            set { this._contenue = value; }
        }


        public void Ouvrir()
        {
            // this.Dans == null test si la poupée est dans aucun autre poupée
            if (!this.EstOuverte && this.Dans == null)
            {
                this.EstOuverte = true;
                Console.WriteLine($"Ouverture de la poupée de taille {this.Taille}.");
            }
            else
            {
                Console.WriteLine("♥/!\\/!\\/!\\♥ Ouverture impossible. ♥/!\\/!\\/!\\♥");
            }
        }


        public void Fermer()
        {

            if (this.EstOuverte && this.Dans == null)
            {
                this.EstOuverte = false;

                Console.WriteLine($"Fermeture de la poupée de taille {this.Taille}.");
            }
            else
            {
                Console.WriteLine("♥/!\\/!\\/!\\♥ Fermeture impossible. ♥/!\\/!\\/!\\♥");
            }
        }


        public void PlacerDans(PoupeeRusse p)
        {

            if (!this.EstOuverte && this.Dans == null && p.EstOuverte && p.Contenue == null && p.Taille > this.Taille)
            {
                this.Dans = p;
                p.Contenue = this;
                Console.WriteLine($"Je met une poupée de taille {this.Taille} dans une poupée de taille {p.Taille}");
            }
            else
            {
                Console.WriteLine($"♥/!\\/!\\/!\\♥ Impossible de mettre la poupée de taille {this.Taille} dans une poupée de taille {p.Taille} ♥/!\\/!\\/!\\♥");
            }
        }


        public void SortirDe(PoupeeRusse p)
        {
            if (this.Dans == p && p.EstOuverte)
            {
                this.Dans = null;
                p.Contenue = null;
                Console.WriteLine($"Je sort une poupée de taille {this.Taille} de la poupée de taille {p.Taille}");
            }
            else
            {
                Console.WriteLine($"♥/!\\/!\\/!\\♥ Impossible de sortir la poupée de taille {this.Taille} de la poupée de taille {p.Taille} ♥/!\\/!\\/!\\♥");
            }
        }


        public static int CompterLesPoupeesEmboitees(PoupeeRusse poupee)
        {
            if (poupee.Contenue == null)
            {
                return 1;
            }
            else
            {
                return 1 + CompterLesPoupeesEmboitees(poupee.Contenue);
            }
        }



    }
}
