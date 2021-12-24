using System;

namespace Exos_Ma_Journee_de_samedi
{
    class Program
    {
        static void Main(string[] args)
        {
            bool MesCourse;
            bool SacDeCourses;
            bool Magasin;
            bool Beautemps;
            bool Sportive;
            bool MauvaisTemps;
            bool NeigeSol;
            bool Manger;
            bool Restaurant;

            Console.WriteLine("Comment organiser mon week-end ?");
            MesCourse = bool.Parse(Console.ReadLine());

            if (MesCourse)
            {
                Console.WriteLine("Je me souviens qui faut que je fasse mes courses donc je prépare mes sacs et ma liste de courses ");
                Console.WriteLine("Je vérifie si mes sacs sont bien vider ? ");
                SacDeCourses = bool.Parse(Console.ReadLine());

                if (SacDeCourses)
                {
                    Console.WriteLine("Mes sacs de courses bien vider donc je vais au magasin ");
                }
                else
                {
                    Console.WriteLine("Je dois les vider rapidement ");
                    Console.WriteLine("Donc je pars au magasin vue que ces pas loin ?");
                    Magasin = bool.Parse(Console.ReadLine());

                    if (Magasin)
                    {
                        Console.WriteLine("Arriver au magasin je prends quelques articles en vérifiant si j'ai bien tout et je passe au caisse et je paie ");
                    }
                    else
                    {
                        Console.WriteLine("Je continue de chercher les articles manquants et après je passe au caisse en payant ");
                        Console.WriteLine("je suis rentrer a midi");
                        Manger = bool.Parse(Console.ReadLine());

                        if (Manger)
                        {
                            Console.WriteLine("je suis motiver je prépare petit pois, purée de carottes et un steak");
                        }
                        else
                        {
                            Console.WriteLine("Je mange juste un sandwich rapide avec salade, tomate, cornichon, oeuf durs, jambon et beurre");
                        }

                    }
                }

                Beautemps = bool.Parse(Console.ReadLine());


                if (Beautemps)
                {
                    Console.WriteLine("Je vais me promener le long de la rivière");
                    Sportive = bool.Parse(Console.ReadLine());

                    if (Sportive)
                    {
                        Console.WriteLine("Je me sans en forme et me suis échauffer donc je profite des installations sportives");
                    }

                }
                else
                {
                    Console.WriteLine("J'observe simplement la faune encore présente en début de journée et je retourne chez moi pour préparer le repas de midi");
                }

                MauvaisTemps = bool.Parse(Console.ReadLine());

                if (MauvaisTemps)
                {
                    Console.WriteLine(" je reste au chaud avec un café ou un thé en regardant ma série préféré si ma connexion tient le coup");
                }
                else
                {
                    Console.WriteLine("je lis mon dernier livre de mon auteur favoris ");
                    Console.WriteLine("Il a neiger tout la nuit?");
                    NeigeSol = bool.Parse(Console.ReadLine());

                    if (NeigeSol)
                    {
                        Console.WriteLine("Je prend mes gants, mon bonnet, mon écharpe");
                    }
                    else
                    {
                        Console.WriteLine("je prend ma pelle avec moi en plus pour degager la neige et je prend ma voiture pour partir au ski pour la journer");
                        Console.WriteLine("Trouver un restaurant pour manger ?");
                        Restaurant = bool.Parse(Console.ReadLine());

                        if (Restaurant)
                        {
                            Console.WriteLine("Trouver un restaurant et espérer trouver une place ");
                        }
                        else
                        {
                            Console.WriteLine("je refais un tour de piste pour voir si une place se libère au restaurant et après le repas je retourne sur les piste jusqu'a leur fermeture, puis je rentre");
                        }
                    }

                   bool PasDeSki = bool.Parse(Console.ReadLine());

                    if (PasDeSki)
                    {
                        Console.WriteLine("Mes amis disponible je sort avec eux cet après-midi ");

                    }
                    else
                    {
                        Console.WriteLine("je joue au jeu multijoueur en ligne ");
                        Console.WriteLine("Aucun ami est disponible?");
                        bool Plante = bool.Parse(Console.ReadLine());

                        if (Plante)
                        {
                            Console.WriteLine("je vais m'occuper des plantes ");
                        }

                    }


                }
            }

        }
    }
}
