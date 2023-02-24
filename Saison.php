<?php 

class Saison{
    private Joueur $joueur;
    private Equipe $equipe;
    private $dateDebut;
    //Saison : joueur, équipe, date de début de contrat, date de fin de contrat
    public function __construct(Joueur $joueur, Equipe $equipe, $dateDebut)
    {
        $this->joueur = $joueur;
        $this->equipe = $equipe;
        $this->dateDebut = $dateDebut;
        $this->joueur->ajouterSaison($this);
        $this->equipe->ajouterSaison($this);
    }

    public function getJoueur()
    {
        return $this->joueur;
    }

    public function getEquipe()
    {
        return $this->equipe;
    }

    public function getDebutContrat()
    {
        return $this->dateDebut;
    }

    public function __toString()
    {
        return "($this->dateDebut)";
    }
}

?>