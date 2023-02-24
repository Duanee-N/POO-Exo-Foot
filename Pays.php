<?php 

class Pays{
    private $nom;
    private array $equipes;
    //Pays : nom, joueur
    public function __construct($nom)
    {
        $this->nom = $nom;
        $this->equipes=[];
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function ajouterEquipe(Equipe $equipe)
    {
        $this->equipes[]=$equipe;
    }

    public function infosPays()
    {
        echo "<div style='color:white; background-color:#BB0B0B; margin:0; width:250px; height:250px; border-radius:5px; display:flex; flex-direction: column; justify-content: space-around; box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px'> <span style='text-align:center; font-size:18px'><b>$this</b></span><br><span style='font-size:14px; text-align:center'>";
        foreach($this->equipes as $equipe){
            echo "<span style='display:flex; flex-direction:column; gap:5px'>$equipe <br>";
        }
        echo "</span></span></div><br>";
    }

    public function __toString()
    {
        return "$this->nom";
    }
}

?>