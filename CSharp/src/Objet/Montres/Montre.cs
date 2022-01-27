using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Montres
{
    class Montre
    {
        private int _heure;
        private int _minute;
    }

    public Montre(int heure, int minute)
    {
        this._heure;
        this._minute;
    }

    public Montre(Montre m)
    {
        this.Heure = m.Heure;
        this.Minute = m.Minute;
    }

    public int Heure
    {
        get { return _heure; }
        private set
        {
            if (value >= 0 && value <= 23)
                _heure = value;
            
        }
    }
}
