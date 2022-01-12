using System;

namespace Materiel_école
{
    abstract class Trousse
    {
        private int volume;
        private bool estOuvert;

        public abstract bool Ouvert
        {
            
        }

        public abstract void Trousse
        {
            
        }

        public abstract void Ouvrir
        {
            
        }

        public abstract void Fermer
        {
            
        }

        public  int Volume
        {
            get { return volume; }
            set { volume = value; }
        }

        public  bool EstOuvert
        {
            get { return estOuvert; }
            set { estOuvert = true; }
        }
    }
}
