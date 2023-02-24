<?php 

class Joueur{
    private $nom;
    private $prenom;
    private $naissance;
    private Pays $nationalite;
    private array $saisons;
    //Joueur : nom, prénom, date de naissance/âge, nationalité, saison
    public function __construct($nom, $prenom, $naissance, Pays $nationalite)
    {
        $this->nom = $nom; 
        $this->prenom = $prenom; 
        $this->naissance = new DateTime($naissance);
        $this->nationalite= $nationalite;
        $this->saisons=[];
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getNaissance()
    {
        return $this->naissance;
    }

    public function getNationalite()
    {
        return $this->nationalite;
    }

    public function Age(){
        $now = new DateTime();
        return $now->diff($this->naissance)->y;
    }

    public function ajouterSaison(Saison $saison)
    {
        $this->saisons[]=$saison;
    }

    public function infosJoueur()
    {
        echo "<div style='color:white; background-color:#4CA66B; margin:0; width:250px; height:250px; border-radius:5px; display:flex; flex-direction: column; justify-content: space-around; box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px'> <span style='text-align:center'><span style='font-size:18px'><b>$this</b></span><br>
        <span style='font-size:13px'> $this->nationalite - ".$this->age()." ans </span></span><br><span style='text-align:center; font-size:14px'>";
        foreach($this->saisons as $saison){
            echo "<span style='display:flex; flex-direction:column; gap:5px'>".$saison->getEquipe()." ".$saison."<br>";
        }
        echo "</span></span></div></div><br>";
    }

    public function __toString()
    {
        return "$this->prenom $this->nom";
    }
}

?>