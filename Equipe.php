<?php 

class Equipe{
    private $nom;
    private Pays $pays;
    private $anneeCreation;
    //Equipe : nom, pays, année de création, saison
    public function __construct($nom, Pays $pays, $anneeCreation)
    {
        $this->nom = $nom;
        $this->pays = $pays;
        $this->anneeCreation = $anneeCreation;
        $this->saisons=[];
        $this->pays->ajouterEquipe($this);
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPays()
    {
        return $this->pays;
    }

    public function getCreation()
    {
        return $this->anneeCreation;
    }

    public function ajouterSaison(Saison $saison)
    {
        $this->saisons[]=$saison;
    }

    public function infosEquipe()
    {
        echo "<div style='color:white; background-color:#4682B4; margin:0; width:250px; height:250px; border-radius:5px; display:flex; flex-direction: column; justify-content: space-around; box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px'> <span style='text-align:center'><span style='font-size:18px'><b>$this</b></span><br>
        <span style='font-size:13px'> $this->pays - ".$this->anneeCreation."</span></span><br><span style='text-align:center; font-size:14px'>";
        foreach($this->saisons as $saison){
            echo "<span style='display:flex; flex-direction:column; gap:5px'>".$saison->getJoueur()." ".$saison."<br>";
        }
        echo "</span></span></div></div><br>";
    }

    public function __toString()
    {
        return "$this->nom";
    }
}

?>