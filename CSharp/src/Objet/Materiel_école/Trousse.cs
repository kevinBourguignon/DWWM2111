using System;

namespace Materiel_école
{
    abstract class Trousse
    {
        private int volume;
        private bool estOuvert;

       
        public Trousse()
        {
            Volume = volume;
            EstOuvert = estOuvert;
        }

        public  void Ouvrir()
        {
            this.estOuvert = true;
        }

        public  void Fermer()
        {
            this.estOuvert = false;

        }

        public  int Volume
        {
            get { return volume; }
           private set { volume = value; }
        }

        public  bool EstOuvert
        {
            get { return estOuvert; }
           private set { estOuvert = true; }
        }
    }
}
